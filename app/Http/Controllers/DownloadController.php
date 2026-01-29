<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class DownloadController extends Controller
{
    private $flaskBase;

    public function __construct()
    {
        $this->flaskBase = config('services.vars.apiTiktok');
    }

    private function dispatchToQueue($url)
    {
        $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $channel = $connection->channel();
        $channel->queue_declare('tiktok_tasks', false, true, false, false);

        $payload = json_encode([
            'url' => $url,
            'id' => uniqid(),
            'headers' => [
                'User-Agent' => request()->header('User-Agent'),
                'Accept-Language' => request()->header('Accept-Language'),
                'Sec-CH-UA' => request()->header('sec-ch-ua'),
                'Sec-CH-UA-Platform' => request()->header('sec-ch-ua-platform'),
                'Sec-CH-UA-Mobile' => request()->header('sec-ch-ua-mobile'),
                'X-Forwarded-For' => request()->ip(),
            ]
        ]);

        $msg = new AMQPMessage($payload, [
            'delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT
        ]);

        $channel->basic_publish($msg, '', 'tiktok_tasks');

        $channel->close();
        $connection->close();

        return json_decode($payload)->id;
    }

    public function index(Request $request, $lang, $id)
    {
        $response = Http::get($this->flaskBase . '/info' . '/' . $id);

        if ($response->failed()) {
            return view(view: 'errors.404');
        }

        $data = $response->json();


        return view(view: 'download', data: [
            'info' => $data,
            'id' => $id
        ]);
    }

    public function download(Request $request)
    {
        $request->validate([
            'video_url' => [
                'required',
                'url',
                'regex:/^(https?:\/\/)?(www\.|vm\.|vt\.)?tiktok\.com\/.*$/i'
            ]
        ], [
            'video_url.required' => 'La URL es obligatoria.',
            'video_url.url' => 'El formato debe ser una URL válida.',
            'video_url.regex' => 'Solo se permiten enlaces oficiales de TikTok.'
        ]);

        $cleanUrl = $this->sanitizeTikTokUrl($request->input('video_url'));
        $taskId = $this->dispatchToQueue($cleanUrl);

        return response()->json([
            'status' => 'queued',
            'task_id' => $taskId,
            'message' => 'Enlace de TikTok validado correctamente.'
        ]);
    }

    private function sanitizeTikTokUrl($url)
    {
        $url = strtok($url, '#');
        $url = strtok($url, '?');

        return $url;
    }

    public function downloadHD(Request $request, $lang, $id)
    {

        $response = Http::get($this->flaskBase . '/download/hd' . '/' . $id);

        if ($response->failed()) {
            return response()->json(['error' => 'No se pudo descargar HD'], 500);
        }

        $filename = 'video_hd_' . Str::random(6) . '.mp4';

        return response($response->body(), 200)
            ->header('Content-Type', 'video/mp4')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }

    public function downloadSD(Request $request, $lang, $id)
    {

        $response = Http::get($this->flaskBase . '/download/sd' . '/' . $id);

        if ($response->failed()) {
            return response()->json(['error' => 'No se pudo descargar SD'], 500);
        }

        $filename = 'video_sd_' . Str::random(6) . '.mp4';

        return response($response->body(), 200)
            ->header('Content-Type', 'video/mp4')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }


    public function downloadMP3(Request $request, $lang, $id)
    {
        $response = Http::get($this->flaskBase . '/download/mp3' . '/' . $id);

        if ($response->failed()) {
            return response()->json(['error' => 'No se pudo descargar MP3'], 500);
        }

        $filename = 'audio_' . Str::random(6) . '.mp3';

        return response($response->body(), 200)
            ->header('Content-Type', 'video/mp4')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }

    public function thumbnail(Request $request, $lang, $id)
    {

        $response = Http::get($this->flaskBase . '/assets' . '/' . $id . '/'.'thumbnail.jpg');

        if ($response->failed()) {
            return response()->json(['error' => 'No se pudo descargar la imagen'], 500);
        }

        return Response::make($response->body(), 200, [
            'Content-Type' => 'image/jpeg',
            'Content-Disposition' => 'inline; filename="thumbnail.jpg"'
        ]);
    }
}
