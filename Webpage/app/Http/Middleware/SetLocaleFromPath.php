<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SetLocaleFromPath
{
    public function handle(Request $request, Closure $next)
    {
        $allowedLocales = ['es', 'en', 'pt', 'fr'];
        
        // 1. Intentamos obtener el idioma de la URL (segmento 1)
        $locale = $request->segment(1);

        // 2. Si no es válido, detectamos por navegador
        if (!in_array($locale, $allowedLocales)) {
            $browserLocale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
            $locale = in_array($browserLocale, $allowedLocales) ? $browserLocale : 'en';
        }

        // 3. Setear idioma en la App y para los helpers route()
        App::setLocale($locale);
        URL::defaults(['locale' => $locale]);

        return $next($request);
    }
}