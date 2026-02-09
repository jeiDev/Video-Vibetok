import os
import shutil
import stat
import json
import time
from datetime import datetime
from src.config import DOWNLOADS_ROOT, CLEANUP_INTERVAL

def force_remove_readonly(func, path, excinfo):
    if not os.path.exists(path): return
    try:
        os.chmod(path, stat.S_IWRITE)
        func(path)
    except Exception as e:
        print(f"[!] Error forzando borrado: {e}")

def get_file_size(path):
    if os.path.exists(path):
        size_bytes = os.path.getsize(path)
        return {"bytes": size_bytes, "mb": round(size_bytes / (1024 * 1024), 2)}
    return {"bytes": 0, "mb": 0}

def continuous_cleanup():
    print(f"[Vigilante] Iniciado. Revisión cada {CLEANUP_INTERVAL}s.")
    while True:
        now = datetime.now()
        if os.path.exists(DOWNLOADS_ROOT):
            for task_id in os.listdir(DOWNLOADS_ROOT):
                task_path = os.path.join(DOWNLOADS_ROOT, task_id)
                meta_path = os.path.join(task_path, "info.json")
                
                if os.path.isdir(task_path) and os.path.exists(meta_path):
                    try:
                        with open(meta_path, 'r', encoding='utf-8') as f:
                            data = json.load(f)
                            expires_at = datetime.strptime(data['expires_at'], "%Y-%m-%d %H:%M:%S")
                        
                        if now > expires_at:
                            time.sleep(1) 
                            shutil.rmtree(task_path, onerror=force_remove_readonly)
                            print(f"[Vigilante] Eliminado: {task_id}")
                    except Exception as e:
                        print(f"[!] Error analizando {task_id}: {e}")
        time.sleep(CLEANUP_INTERVAL)