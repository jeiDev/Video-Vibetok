<?php

namespace App\Console\Commands;

use App\Events\DownloadStatusUpdated;
use Illuminate\Console\Command;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use Illuminate\Support\Facades\Log;

class ProcessDownloadResults extends Command
{
    // El nombre del comando que ejecutarás en la consola
    protected $signature = 'tiktok:listen-results';
    protected $description = 'Escucha la cola de resultados provenientes del Worker de Python';

    public function handle()
    {
        $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $channel = $connection->channel();

        // Declaramos la cola (debe coincidir con la de Python)
        $channel->queue_declare('tiktok_results', false, true, false, false);

        $this->info(" [*] Esperando resultados de descargas en [tiktok_results]. CTRL+C para salir.");

        $callback = function ($msg) {
            $data = json_decode($msg->body, true);
            $taskId = $data['task_id'];
            $status = $data['status'];
            $metadata = $data['metadata'] ?? null;

            $this->info(" [+] Resultado recibido para la tarea: {$taskId} - Estado: {$status}");

            // --- AQUÍ VA TU LÓGICA DE NEGOCIO ---
            if ($status === 'completed') {
                $this->handleSuccess($taskId, $metadata);
            } else {
                $this->handleFailure($taskId);
            }

            // Confirmamos a RabbitMQ que procesamos el mensaje
            $msg->ack();
        };

        // No procesar más de uno a la vez para no saturar la DB
        $channel->basic_qos(0, 1, null);
        $channel->basic_consume('tiktok_results', '', false, false, false, false, $callback);

        while ($channel->is_consuming()) {
            $channel->wait();
        }
    }

    private function handleSuccess($taskId, $metadata)
    {
        $this->info("Video {$taskId} listo para descarga.");
        broadcast(new DownloadStatusUpdated($taskId, 'completed', $metadata));
    }

    private function handleFailure($taskId)
    {
        $this->info("La descarga del video {$taskId} falló.");
        broadcast(new DownloadStatusUpdated($taskId, 'failed'));
    }
}