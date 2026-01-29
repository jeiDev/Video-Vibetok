<!DOCTYPE html>

<html class="light" lang="es">

<head>
    <!-- Charset y Viewport -->
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="theme-color" content="#3b82f6" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <!-- Título y Meta Descripción -->
    <title>{{ config('services.vars.appName') }} - @yield('title', 'Descargador')</title>
    <meta name="description"
        content="@yield('meta-description', 'Descarga videos de TikTok gratis y rápido sin marca de agua. Herramienta gratuita para descargar MP4 de alta calidad. ✓ 100% Seguro y sin registro.')" />
    <meta name="keywords"
        content="@yield('meta-keywords', 'descargar videos tiktok, descarga tiktok gratis, tiktok downloader, videos sin marca agua, descargar mp4, tiktok sin watermark, descarga rápida tiktok')" />
    
    <!-- Información del Autor -->
    <meta name="author" content="{{ config('services.vars.appName') }}" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    
    <!-- URL Canónica -->
    <link rel="canonical" href="{{ url()->current() }}" />
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og-type', 'website')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title"
        content="@yield('og-title', config('services.vars.appName') . ' - Descargar Videos de TikTok Gratis')" />
    <meta property="og:description"
        content="@yield('og-description', 'Descarga videos de TikTok gratis y rápido sin marca de agua. Herramienta gratuita para descargar MP4 de alta calidad.')" />
    <meta property="og:image" content="@yield('og-image', url('/assets/img/og-image.png'))" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:site_name" content="{{ config('services.vars.appName') }}" />
    <meta property="og:locale" content="es_ES" />
    
    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="{{ url()->current() }}" />
    <meta name="twitter:title"
        content="@yield('twitter-title', config('services.vars.appName') . ' - Descargar Videos de TikTok Gratis')" />
    <meta name="twitter:description"
        content="@yield('twitter-description', 'Descarga videos de TikTok gratis y rápido sin marca de agua. Herramienta gratuita para descargar MP4 de alta calidad.')" />
    <meta name="twitter:image" content="@yield('twitter-image', url('/assets/img/twitter-image.png'))" />
    
    <!-- Security & Referrer -->
    <meta name="referrer" content="strict-origin-when-cross-origin" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <!-- Preconnect a recursos externos -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link href="https://cdn.tailwindcss.com" rel="preconnect" />
    <link href="https://www.googletagmanager.com" rel="preconnect" />
    <link href="https://pagead2.googlesyndication.com" rel="preconnect" />
    
    <!-- DNS Prefetch para dominios externos -->
    <link rel="dns-prefetch" href="https://www.googletagmanager.com" />
    <link rel="dns-prefetch" href="https://pagead2.googlesyndication.com" />
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    
    <!-- Favicon y alternativas -->
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <link rel="apple-touch-icon" href="/assets/img/favicon.png">
    
    <!-- Sitemap y Feed RSS -->
    <link rel="sitemap" type="application/xml" href="/sitemap.xml" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    @yield('rss-link')
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#3b82f6",
                        "primary-hover": "#60a5fa",
                        "background-dark": "#000000",
                        "surface-dark": "#0a0a0a",
                        "surface-hover": "#171717",
                        "text-main": "#f3f4f6",
                        "text-muted": "#9ca3af",
                        "border-dark": "#262626",
                        "accent-green": "#22c55e",
                        "background-light": "#f5f7f8",
                        "background-dark": "#101922",
                        "neon-green": "#22c55e",
                        "dark-charcoal": "#212529",
                        "light-bg": "#F8F9FA",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "Noto Sans", "sans-serif"],
                        "body": ["Spline Sans", "Noto Sans", "sans-serif"],
                    },
                    borderRadius: { "DEFAULT": "1rem", "lg": "1.5rem", "xl": "2rem", "full": "9999px" },
                },
            },
        }
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CQ0HTPNNHB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-CQ0HTPNNHB');
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4891293081300502"
        crossorigin="anonymous"></script>

    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>

    <!-- Schema.org Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SoftwareApplication",
        "name": "{{ config('services.vars.appName') }}",
        "description": "Descarga videos de TikTok gratis y rápido sin marca de agua. Herramienta gratuita para descargar MP4 de alta calidad.",
        "url": "{{ url('/') }}",
        "applicationCategory": "UtilityApplication",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "image": "{{ url('/assets/img/og-image.png') }}",
        "author": {
            "@type": "Organization",
            "name": "{{ config('services.vars.appName') }}"
        }
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "{{ config('services.vars.appName') }}",
        "url": "{{ url('/') }}",
        "logo": "{{ url('/assets/img/logo.png') }}",
        "description": "Descargador de videos de TikTok sin marca de agua",
        "sameAs": [
            "https://www.facebook.com/@yield('facebook-url', '')",
            "https://twitter.com/@yield('twitter-url', '')"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Support",
            "url": "{{ route('contact') }}"
        }
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "¿Es seguro descargar videos con {{ config('services.vars.appName') }}?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Sí, nuestro servicio es 100% seguro. No almacenamos datos personales ni instalamos software malicioso."
                }
            },
            {
                "@type": "Question",
                "name": "¿Necesito registrarme?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No, {{ config('services.vars.appName') }} es completamente gratuito y no requiere registro."
                }
            },
            {
                "@type": "Question",
                "name": "¿Qué formatos de video puedo descargar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Descargamos videos en formato MP4 de alta calidad sin marca de agua."
                }
            }
        ]
    }
    </script>

</head>

<body
    class="bg-white dark:bg-background-dark text-[#111418] dark:text-text-main font-display transition-colors duration-200 antialiased selection:bg-primary/30 selection:text-white">
    <amp-auto-ads type="adsense" data-ad-client="ca-pub-4891293081300502">
    </amp-auto-ads>

    <div
        class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark overflow-x-hidden font-display">
        <header
            class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-[#f0f2f5] dark:border-border-dark bg-white/90 dark:bg-black/80 backdrop-blur-md px-6 lg:px-10 py-4">
            <div class="flex items-center gap-4 text-[#111418] dark:text-white">
                <img src="/assets/img/logo.png" alt="{{ config('services.vars.appName') }} - Descargador de videos TikTok gratis" title="{{ config('services.vars.appName') }}">
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <div class="hidden md:flex items-center gap-9">
                    <a class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary transition-colors"
                        href="{{ route('home') }}">
                        Inicio
                    </a>

                    <a class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary transition-colors"
                        href="{{ route('howToUse') }}">
                        Cómo utilizar
                    </a>

                    <a class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary transition-colors"
                        href="{{ route('contact') }}">
                        Contactanos
                    </a>

                    <a class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary transition-colors"
                        href="{{ route('legal.faq') }}">
                        FAQ
                    </a>
                </div>
            </div>
        </header>

        <div class="layout-container flex h-full grow flex-col">
            <main>
                @yield('content')
            </main>

            <footer
                class="flex justify-center py-8 px-4 bg-white dark:bg-[#161616] border-t border-[#e5e7eb] dark:border-[#27272a] mt-auto">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1 gap-6">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-2 text-[#111418] dark:text-white">
                            <img src="/assets/img/logo.png" alt="{{ config('services.vars.appName') }} - Descargador de videos TikTok sin marca de agua"
                                style="height: 50px; width: 180px;object-fit: contain;">
                        </div>
                        <div class="flex gap-6 flex-wrap justify-center">
                            <a class="text-[#60758a] text-sm hover:text-primary dark:text-gray-500 dark:hover:text-cyan-400 transition-colors"
                                href="{{ route('legal.terms-conditions') }}">
                                Términos &amp; Condiciones
                            </a>

                            <a class="text-[#60758a] text-sm hover:text-primary dark:text-gray-500 dark:hover:text-cyan-400 transition-colors"
                                href="{{ route('legal.privacy') }}">
                                Política de privacidad
                            </a>

                            <a class="text-[#60758a] text-sm hover:text-primary dark:text-gray-500 dark:hover:text-cyan-400 transition-colors"
                                href="{{ route('legal.cookie-policity') }}">
                                Política de cookies
                            </a>

                            <a class="text-[#60758a] text-sm hover:text-primary dark:text-gray-500 dark:hover:text-cyan-400 transition-colors"
                                href="{{ route('contact') }}">
                                Contáctenos
                            </a>

                            <a class="text-[#60758a] text-sm hover:text-primary dark:text-gray-500 dark:hover:text-cyan-400 transition-colors"
                                href="{{ route('legal.disclaimer') }}">
                                Aviso Legal
                            </a>
                        </div>
                    </div>
                    <div class="text-center md:text-left">
                        <p class="text-[#9ca3af] dark:text-gray-600 text-xs">© {{ date('Y') }}
                            {{ config('services.vars.appName') }}. No estamos afiliados a TikTok.
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    @vite(['resources/js/app.js'])

    @stack('scripts')
</body>

</html>