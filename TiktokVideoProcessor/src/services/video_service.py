import sys
import os
import subprocess
import yt_dlp
import json
from datetime import datetime, timedelta
from src.config import DOWNLOADS_ROOT, EXPIRATION_SECONDS
from src.utils.file_manager import get_file_size
from src.utils.rabbit_helper import send_update_to_laravel

def run_ffmpeg(args, step_name):
    print(f"[*] Ejecutando FFmpeg: {step_name}...", flush=True)
    try:
        if sys.platform != "win32":
            if args[0] == "ffmpeg":
                if os.path.exists("/usr/bin/ffmpeg"):
                    args[0] = "/usr/bin/ffmpeg"

        # Ejecutamos capturando stderr para el log de errores
        result = subprocess.run(args, check=True, text=True, capture_output=True)
        print(f"[V] {step_name} completado con éxito.", flush=True)
    except subprocess.CalledProcessError as e:
        print(f"[X] ERROR en {step_name}!", file=sys.stderr, flush=True)
        print(f"Salida de FFmpeg: {e.stderr}", file=sys.stderr, flush=True)
        raise Exception(f"Fallo crítico en FFmpeg ({step_name})")

def process_video_task(url, task_id, custom_headers=None):
    task_folder = os.path.join(DOWNLOADS_ROOT, task_id)
    os.makedirs(task_folder, exist_ok=True)

    paths = {
        "original": os.path.join(task_folder, "video_hd.mp4"),
        "low": os.path.join(task_folder, "video_sd.mp4"),
        "audio": os.path.join(task_folder, "audio.mp3"),
        "thumb": os.path.join(task_folder, "thumbnail.jpg"),
        "meta": os.path.join(task_folder, "info.json")
    }

    try:
        headers = {
            'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36...',
            'Referer': 'https://www.tiktok.com/'
        }
        
        ydl_opts = {
            "format": "bestvideo+bestaudio/best",
            "outtmpl": paths["original"],
            "quiet": True,
            "http_headers": headers,
            "nocheckcertificate": True,
        }

        with yt_dlp.YoutubeDL(ydl_opts) as ydl:
            info = ydl.extract_info(url, download=True)

        # FFmpeg Processing
        # Miniatura
        run_ffmpeg([
            "ffmpeg", "-y", "-i", paths["original"],
            "-ss", "00:00:01", "-vframes", "1", "-q:v", "2", paths["thumb"]
        ], "Thumbnail")

        # Video SD (480p) - Preset ultrafast para ahorrar CPU en Ubuntu
        run_ffmpeg([
            "ffmpeg", "-y", "-i", paths["original"],
            "-vf", "scale=-2:480", "-c:v", "libx264", "-preset", "ultrafast", 
            "-crf", "28", "-c:a", "copy", paths["low"]
        ], "Video SD")

        # Audio MP3
        run_ffmpeg([
            "ffmpeg", "-y", "-i", paths["original"],
            "-vn", "-acodec", "libmp3lame", "-ar", "44100", "-ac", "2", 
            "-b:a", "192k", paths["audio"]
        ], "Audio MP3")

        # Metadata
        now = datetime.now()
        metadata = {
            "id": task_id,
            "title": info.get("title"),
            "duration": info.get("duration"),
            "processed_at": now.strftime("%Y-%m-%d %H:%M:%S"),
            "expires_at": (now + timedelta(seconds=EXPIRATION_SECONDS)).strftime("%Y-%m-%d %H:%M:%S"),
            "stats": {
                "views": info.get("view_count"),
                "likes": info.get("like_count"),
                "comments": info.get("comment_count"),
                "shares": info.get("share_count")
            },
            "uploader": {
                "name": info.get("uploader"),
                "profile": info.get("uploader_url"),
                "avatar": info.get("uploader_thumbnail")
            },
            "files": {
                "hd": {"filename": "video_hd.mp4", "size": get_file_size(paths["original"])},
                "sd": {"filename": "video_sd.mp4", "size": get_file_size(paths["low"])},
                "mp3": {"filename": "audio.mp3", "size": get_file_size(paths["audio"])},
                "thumbnail": {"filename": "thumbnail.jpg", "size": get_file_size(paths["thumb"])}
            }
        }

        with open(paths["meta"], "w", encoding="utf-8") as f:
            json.dump(metadata, f, indent=4, ensure_ascii=False)

        send_update_to_laravel(task_id, "completed", metadata)
        return True

    except Exception as e:
        print(f"[X] Error task {task_id}: {e}")
        send_update_to_laravel(task_id, "failed")
        return False