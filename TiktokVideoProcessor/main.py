import pika
import json
import threading
from src.config import RABBIT_HOST, QUEUE_TASKS, MAX_CONCURRENT_TASKS, FLASK_HOST, FLASK_PORT
from src.utils.file_manager import continuous_cleanup
from src.services.video_service import process_video_task
from src.services.api_service import app

def callback(ch, method, properties, body):
    try:
        data = json.loads(body)
        process_video_task(data.get('url'), data.get('id'), data.get('headers'))
        ch.basic_ack(delivery_tag=method.delivery_tag)
    except Exception as e:
        print(f"[!] Error en callback: {e}")
        ch.basic_nack(delivery_tag=method.delivery_tag, requeue=False)

def main():
    # Iniciar Hilo de Limpieza
    threading.Thread(target=continuous_cleanup, daemon=True).start()
    
    # Iniciar Consumidor
    connection = pika.BlockingConnection(pika.ConnectionParameters(host=RABBIT_HOST, heartbeat=600))
    channel = connection.channel()
    channel.queue_declare(queue=QUEUE_TASKS, durable=True)
    channel.basic_qos(prefetch_count=MAX_CONCURRENT_TASKS)
    channel.basic_consume(queue=QUEUE_TASKS, on_message_callback=callback)
    
    print(f'[*] Worker listo. Escuchando en {QUEUE_TASKS}...')
    channel.start_consuming()

def run_flask():
    app.run(host=FLASK_HOST, port=FLASK_PORT, debug=False, use_reloader=False)

if __name__ == "__main__":
    # 1. Hilo de Limpieza
    threading.Thread(target=continuous_cleanup, daemon=True).start()
    
    # 2. Hilo de API Flask
    threading.Thread(target=run_flask, daemon=True).start()
    
    # 3. Consumidor RabbitMQ (Bloqueante, se queda en el hilo principal)
    print(f"[*] Sistema Iniciado: API en puerto {FLASK_PORT} y Worker esperando tareas...")
    main()