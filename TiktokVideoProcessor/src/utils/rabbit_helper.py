import pika
import json
from datetime import datetime
from src.config import RABBIT_HOST, QUEUE_RESULTS

def send_update_to_laravel(task_id, status, metadata=None):
    try:
        connection = pika.BlockingConnection(pika.ConnectionParameters(host=RABBIT_HOST))
        channel = connection.channel()
        channel.queue_declare(queue=QUEUE_RESULTS, durable=True)
        
        response = {
            "task_id": task_id,
            "status": status,
            "metadata": metadata,
            "completed_at": datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        }
        
        channel.basic_publish(
            exchange='',
            routing_key=QUEUE_RESULTS,
            body=json.dumps(response),
            properties=pika.BasicProperties(delivery_mode=2)
        )
        connection.close()
    except Exception as e:
        print(f"[!] Error RabbitMQ: {e}")