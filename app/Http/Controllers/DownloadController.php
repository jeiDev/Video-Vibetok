<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{
    private $flaskBase = 'http://127.0.0.1:5000';

    public function index(Request $request)
    {
        $videoUrl = $request->query('video_url');

        $response = Http::post($this->flaskBase . '/info', [
            'url' => $videoUrl
        ]);

        if ($response->failed()) {
            return response()->json(['error' => 'No se pudo obtener info del video'], 500);
        }

        $data = $response->json();

        return view(view: 'download', data: [
            'video_url' => $videoUrl,
            'info' => $data
        ]);
    }

    public function downloadHd(Request $request)
    {
        $videoUrl = $request->input('video_url');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post($this->flaskBase . '/download/hd', [
                    'url' => $videoUrl
                ]);

        // Retornar el archivo directamente al cliente
        return response($response->body(), 200)
            ->header('Content-Type', $response->header('Content-Type'))
            ->header('Content-Disposition', $response->header('Content-Disposition'));
    }


    public function downloadHdWm(Request $request)
    {
        $videoUrl = $request->input('video_url');

        // Llamar a Flask
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post($this->flaskBase . '/download/hd-wm', [
                    'url' => $videoUrl
                ]);

        if ($response->failed()) {
            return response()->json(['error' => 'No se pudo descargar HD con watermark'], 500);
        }

        // Nombre de archivo temporal para enviar al cliente
        $filename = 'video_hd_wm_' . Str::random(6) . '.mp4';

        return response($response->body(), 200)
            ->header('Content-Type', 'video/mp4')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }

    /**
     * Descargar audio MP3
     */
    public function downloadMp3(Request $request)
    {
        $videoUrl = $request->input('video_url');

        // Llamar a Flask
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post($this->flaskBase . '/download/mp3', [
                    'url' => $videoUrl
                ]);

        if ($response->failed()) {
            return response()->json(['error' => 'No se pudo descargar MP3'], 500);
        }

        // Nombre de archivo temporal para enviar al cliente
        $filename = 'audio_' . Str::random(6) . '.mp3';

        return response($response->body(), 200)
            ->header('Content-Type', 'audio/mpeg')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }

    public function thumbnail(Request $request)
    {
        $thumbnail = $request->query('thumbnail'); // Recibimos la URL por query

        if (!$thumbnail) {
            return response()->json(['error' => 'Se requiere el parámetro thumbnail'], 400);
        }

        try {
            $flaskResponse = Http::timeout(30)->get($this->flaskBase . '/thumbnail/' . $thumbnail);

            if ($flaskResponse->failed()) {
                return response()->json(['error' => 'No se pudo generar la miniatura'], 500);
            }

            return Response::make($flaskResponse->body(), 200, [
                'Content-Type' => 'image/jpeg',
                'Content-Disposition' => 'inline; filename="thumbnail.jpg"'
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al conectar con el backend Flask', 'details' => $e->getMessage()], 500);
        }
    }
}
