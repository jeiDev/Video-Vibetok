# Guía de Meta Tags y SEO - VideoVibeTok

## Mejoras Implementadas

El layout ha sido mejorado significativamente con los siguientes elementos SEO:

### 1. **Meta Tags Básicos**
- ✅ Charset UTF-8
- ✅ Viewport responsivo
- ✅ Theme color
- ✅ Robots meta tag
- ✅ Author meta tag
- ✅ Canonical URL

### 2. **Open Graph (Facebook)**
- ✅ og:type, og:url, og:title, og:description
- ✅ og:image con dimensiones (1200x630)
- ✅ og:site_name y og:locale (es_ES)

### 3. **Twitter/X Card**
- ✅ Twitter card summary_large_image
- ✅ Todos los meta tags de twitter necesarios

### 4. **Optimizaciones de Performance**
- ✅ Preconnect a recursos externos
- ✅ DNS Prefetch para dominios críticos
- ✅ Preload de recursos

### 5. **Schema.org (JSON-LD)**
- ✅ SoftwareApplication Schema
- ✅ Organization Schema
- ✅ FAQPage Schema

### 6. **Otros**
- ✅ Alt text descriptivo en imágenes
- ✅ Favicon y Apple Touch Icon
- ✅ Sitemap y RSS links

## Cómo Usar por Página

Para personalizar los meta tags en cada página, usa los yields en tus vistas blade:

### Ejemplo Básico (home.blade.php):

```blade
@extends('layouts.app')

@section('title', 'Descarga Videos de TikTok Gratis')

@section('meta-description', 'Descarga videos de TikTok sin marca de agua en formato MP4 de alta calidad. 100% gratuito y sin necesidad de registro.')

@section('meta-keywords', 'descargar tiktok, tiktok downloader, videos sin watermark, tiktok gratis')

@section('og-title', 'VideoVibeTok - Descarga Videos de TikTok Gratis sin Marca de Agua')

@section('og-description', 'La herramienta más rápida para descargar videos de TikTok en alta calidad sin marca de agua.')

@section('og-image', url('/assets/img/home-og-image.png'))

@section('twitter-title', 'Descarga Videos de TikTok Gratis | VideoVibeTok')

@section('twitter-description', 'Descargador de videos TikTok 100% gratis, rápido y sin marca de agua.')

@section('twitter-image', url('/assets/img/home-twitter-image.png'))

@section('content')
    <!-- Tu contenido aquí -->
@endsection
```

### Yields Disponibles:

| Yield | Default | Descripción |
|-------|---------|-------------|
| `title` | 'Descargador' | Título de la página |
| `meta-description` | Descripción por defecto | Meta description |
| `meta-keywords` | Keywords por defecto | Palabras clave |
| `og-title` | Título + app name | Título Open Graph |
| `og-description` | Descripción por defecto | Descripción Open Graph |
| `og-image` | /assets/img/og-image.png | Imagen Open Graph |
| `og-type` | 'website' | Tipo de contenido OG |
| `twitter-title` | Título + app name | Título Twitter |
| `twitter-description` | Descripción por defecto | Descripción Twitter |
| `twitter-image` | /assets/img/twitter-image.png | Imagen Twitter |
| `rss-link` | Vacío | Link a feed RSS (si aplica) |

## Recomendaciones SEO

### 1. **Longitud de Textos**
- **Title**: 50-60 caracteres
- **Meta Description**: 150-160 caracteres
- **Keywords**: 3-5 palabras clave relevantes

### 2. **Imágenes para Social Media**
- **Open Graph**: 1200x630px (mínimo 600x315px)
- **Twitter**: 1200x628px
- Formato: PNG o JPG comprimido

### 3. **Estructura de URLs**
- Usa URLs descriptivas y amigables para SEO
- Ejemplo: `/como-descargar-tiktok-sin-marca-agua` ✅
- No: `/page?id=123` ❌

### 4. **Contenido**
- Añade encabezados H1, H2, H3 correctamente
- Usa palabras clave naturalmente en el contenido
- Mantén párrafos cortos y claros
- Usa negritas `<strong>` para términos importantes

### 5. **Enlaces Internos**
- Enlaza a páginas relacionadas
- Usa anchor text descriptivo
- Evita "haz clic aquí" como anchor text

### 6. **Actualiza el Config**
En `config/services.php`, asegúrate de tener:

```php
'vars' => [
    'appName' => 'VideoVibeTok',
    // Agregar más variables globales si es necesario
]
```

## Verificación de SEO

### Herramientas Recomendadas:
- 🔗 [Google Search Console](https://search.google.com/search-console)
- 🔗 [Google PageSpeed Insights](https://pagespeed.web.dev)
- 🔗 [Schema.org Validator](https://validator.schema.org)
- 🔗 [Open Graph Debugger](https://developers.facebook.com/tools/debug)
- 🔗 [Twitter Card Validator](https://cards-dev.twitter.com/validator)
- 🔗 [Screaming Frog SEO Spider](https://www.screamingfrog.co.uk/seo-spider)

## Checklist SEO

- [ ] Título único y descriptivo en cada página
- [ ] Meta description presente (150-160 caracteres)
- [ ] Keywords relevantes incluidas
- [ ] Imágenes con alt text descriptivo
- [ ] Open Graph meta tags configurados
- [ ] Twitter Card meta tags configurados
- [ ] Schema.org JSON-LD implementado
- [ ] URL canónica presente
- [ ] Robots meta tag correcto
- [ ] Sitemap.xml enviado a Google Search Console
- [ ] robots.txt configurado adecuadamente
- [ ] Mobile responsivo (Viewport meta tag)
- [ ] Enlaces internos con anchor text descriptivo
- [ ] Tiempo de carga optimizado
- [ ] Certificado SSL/HTTPS activo

---

**Última actualización**: {{ date('Y-m-d') }}
