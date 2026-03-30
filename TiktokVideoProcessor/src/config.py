import os
from dotenv import load_dotenv

# Cargar variables de entorno desde .env si existe
load_dotenv(os.path.join(os.path.dirname(os.path.dirname(os.path.abspath(__file__))), '.env'))

BASE_DIR = os.path.dirname(os.path.abspath(__file__))
DOWNLOADS_ROOT = os.environ.get('DOWNLOADS_ROOT', os.path.join(BASE_DIR, "..", "downloads"))
os.makedirs(DOWNLOADS_ROOT, exist_ok=True)

MAX_CONCURRENT_TASKS = int(os.environ.get('MAX_CONCURRENT_TASKS', 3))
EXPIRATION_SECONDS = int(os.environ.get('EXPIRATION_SECONDS', 60 * 60 * 24))
CLEANUP_INTERVAL = int(os.environ.get('CLEANUP_INTERVAL', 10))

# RabbitMQ Config
RABBIT_HOST = os.environ.get('RABBIT_HOST', 'localhost')
QUEUE_TASKS = os.environ.get('QUEUE_TASKS', 'tiktok_tasks')
QUEUE_RESULTS = os.environ.get('QUEUE_RESULTS', 'tiktok_results')

# Flask Config
FLASK_HOST = os.environ.get('FLASK_HOST', '0.0.0.0')
FLASK_PORT = int(os.environ.get('FLASK_PORT', 5000))

IS_PRODUCTION = os.environ.get('IS_PRODUCTION', 'False').lower() in ('true', '1', 'yes')