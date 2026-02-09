from flask import Flask, request, jsonify, send_file, send_from_directory
import os
import subprocess
import requests
from src.config import DOWNLOADS_ROOT

app = Flask(__name__)

def get_task_path(task_id):
    return os.path.join(DOWNLOADS_ROOT, task_id)

@app.route("/info/<task_id>", methods=["GET"])
def get_info(task_id):
    path = os.path.join(get_task_path(task_id), "info.json")
    if not os.path.exists(path):
        return jsonify({"error": "Tarea no encontrada o aún procesándose"}), 404
    
    with open(path, "r", encoding="utf-8") as f:
        import json
        return jsonify(json.load(f))

@app.route("/download/hd/<task_id>", methods=["GET"])
def download_hd(task_id):
    file_path = os.path.join(get_task_path(task_id), "video_hd.mp4")
    if not os.path.exists(file_path):
        return jsonify({"error": "Archivo no encontrado"}), 404
    return send_file(file_path, as_attachment=True)

@app.route("/download/mp3/<task_id>", methods=["GET"])
def download_mp3(task_id):
    file_path = os.path.join(get_task_path(task_id), "audio.mp3")
    if not os.path.exists(file_path):
        return jsonify({"error": "Archivo no encontrado"}), 404
    return send_file(file_path, as_attachment=True)

@app.route("/download/sd/<task_id>", methods=["GET"])
def download_sd(task_id):
    file_path = os.path.join(get_task_path(task_id), "video_sd.mp4")
    if not os.path.exists(file_path):
        return jsonify({"error": "Archivo no encontrado"}), 404
    return send_file(file_path, as_attachment=True)

@app.route("/assets/<task_id>/<filename>", methods=["GET"])
def serve_assets(task_id, filename):
    # Para servir miniaturas o avatares guardados
    return send_from_directory(get_task_path(task_id), filename)