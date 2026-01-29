{{-- EJEMPLO: Cómo usar los nuevos meta tags en tus páginas --}}

@extends('layouts.app')

{{-- TITULO --}}
@section('title', 'Cómo Descargar Videos de TikTok Gratis')

{{-- META TAGS --}}
@section('meta-description', 'Aprende a descargar videos de TikTok sin marca de agua en pocos segundos. Guía completa y fácil con VideoVibeTok.')
@section('meta-keywords', 'cómo descargar tiktok, descarga de videos tiktok, tutorial tiktok downloader, descargar vídeos sin marca agua')

{{-- OPEN GRAPH (Facebook) --}}
@section('og-type', 'article')
@section('og-title', 'Guía: Cómo Descargar Videos de TikTok sin Marca de Agua')
@section('og-description', 'Tutorial completo para descargar videos de TikTok gratis en MP4 de alta calidad. ¡Sin marca de agua!')
@section('og-image', url('/assets/img/guides/tiktok-download-guide.png'))

{{-- TWITTER CARD --}}
@section('twitter-title', 'Descarga Videos de TikTok Fácil y Gratis | VideoVibeTok')
@section('twitter-description', 'Guía paso a paso para descargar cualquier video de TikTok sin marca de agua.')
@section('twitter-image', url('/assets/img/guides/twitter-tiktok-guide.png'))

{{-- CONTENIDO --}}
@section('content')
    <div class="max-w-2xl mx-auto p-6">
        <h1>Cómo Descargar Videos de TikTok Gratis</h1>
        
        {{-- Tu contenido aquí --}}
    </div>
@endsection

{{-- 
╔════════════════════════════════════════════════════════════╗
║                   NOTAS IMPORTANTES                        ║
╚════════════════════════════════════════════════════════════╝

1. TÍTULOS:
   - Máximo 60 caracteres
   - Incluye palabra clave principal
   - Atractivo para CTR

2. DESCRIPTIONS:
   - 150-160 caracteres
   - Llama a acción
   - Palabra clave temprano

3. KEYWORDS:
   - 3-5 palabras clave
   - Relevantes al contenido
   - Orden por importancia

4. IMÁGENES:
   - OG: 1200x630px (mínimo 600x315px)
   - Twitter: 1200x628px
   - JPG o PNG comprimido
   - Optimizado para web

5. ESTRUCTURA:
   - H1: Un solo por página
   - H2-H3: Estructura jerárquica
   - P: Párrafos cortos (2-3 líneas)
   - Strong: Palabras clave importantes

6. ENLACES:
   - Texto descriptivo
   - Internos: A páginas relacionadas
   - Externos: A fuentes confiables

EJEMPLO DE PÁRRAFO OPTIMIZADO:
═════════════════════════════════

<p>
    Descargar videos de <strong>TikTok sin marca de agua</strong> 
    es ahora más fácil que nunca con <strong>VideoVibeTok</strong>. 
    Solo necesitas <a href="/como-usar">seguir 3 simples pasos</a> 
    para obtener tus videos en formato MP4 de alta calidad.
</p>

ESTRUCTURA JSON-LD EXTRA (Si necesitas):
═════════════════════════════════════════

@section('rss-link')
    <link rel="alternate" type="application/rss+xml" 
        href="{{ url('/feed/blog') }}" title="Blog - VideoVibeTok" />
@endsection

--}}
