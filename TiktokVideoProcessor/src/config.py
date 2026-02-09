import os

BASE_DIR = os.path.dirname(os.path.abspath(__file__))
DOWNLOADS_ROOT = os.path.join(BASE_DIR, "..", "downloads")

# Crear carpeta de descargas si no existe
os.makedirs(DOWNLOADS_ROOT, exist_ok=True)

MAX_CONCURRENT_TASKS = 3
EXPIRATION_SECONDS = 60 * 60 * 24
CLEANUP_INTERVAL = 10

# RabbitMQ Config
RABBIT_HOST = 'localhost'
QUEUE_TASKS = 'tiktok_tasks'
QUEUE_RESULTS = 'tiktok_results'

# Flask Config
FLASK_HOST = "0.0.0.0"
FLASK_PORT = 5000

IS_PRODUCTION=False