<!DOCTYPE html>

<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ config('services.vars.appName') }} - @yield('title', 'Descargador')</title>
    <meta name="description" content="@yield('meta-description', 'Descarga videos de TikTok gratis y rápido sin marca de agua. Herramienta gratuita para descargar MP4 de alta calidad.')" />
    <meta name="keywords" content="@yield('meta-keywords', 'descargar videos tiktok gratis, descarga rapida tiktok, tiktok downloader, videos tiktok sin marca de agua, descargar mp4 tiktok')" />
    <meta property="og:title" content="@yield('og-title', config('services.vars.appName') . ' - Descargar Videos de TikTok Gratis')" />
    <meta property="og:description" content="@yield('og-description', 'Descarga videos de TikTok gratis y rápido sin marca de agua. Herramienta gratuita para descargar MP4 de alta calidad.')" />
    <meta property="og:image" content="@yield('og-image', '/assets/img/og-image.png')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('twitter-title', config('services.vars.appName') . ' - Descargar Videos de TikTok Gratis')" />
    <meta name="twitter:description" content="@yield('twitter-description', 'Descarga videos de TikTok gratis y rápido sin marca de agua. Herramienta gratuita para descargar MP4 de alta calidad.')" />
    <meta name="twitter:image" content="@yield('twitter-image', '/assets/img/twitter-image.png')" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap"  rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
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
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "Noto Sans", "sans-serif"],
                        "body": ["Spline Sans", "Noto Sans", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "1rem", "lg": "1.5rem", "xl": "2rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>

<body class="bg-white dark:bg-background-dark text-[#111418] dark:text-text-main font-display transition-colors duration-200 antialiased selection:bg-primary/30 selection:text-white">
    <div
        class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark overflow-x-hidden font-display">
        <header
            class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-[#f0f2f5] dark:border-border-dark bg-white/90 dark:bg-black/80 backdrop-blur-md px-6 lg:px-10 py-4">
            <div class="flex items-center gap-4 text-[#111418] dark:text-white">
                <img src="/assets/img/logo.png" alt="Logo">
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <div class="hidden md:flex items-center gap-9">
                    <a 
                        class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" 
                        href="{{ route('home') }}"
                    >
                        Inicio
                    </a>

                    <a 
                        class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" 
                        href="{{ route('howToUse') }}"
                    >
                        Cómo utilizar
                    </a>

                    <a 
                        class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" 
                        href="{{ route('contact') }}"
                    >
                        Contactanos 
                    </a>

                    <a 
                        class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" 
                        href="{{ route('legal.faq') }}"
                    >
                        FAQ
                    </a>
                </div>
            </div>
        </header>

        <div class="layout-container flex h-full grow flex-col">
            <main>
                @yield('content')
            </main>

            <footer class="flex justify-center py-8 px-4 bg-white dark:bg-[#161616] border-t border-[#e5e7eb] dark:border-[#27272a] mt-auto">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1 gap-6">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-2 text-[#111418] dark:text-white">
                            <img src="/assets/img/logo.png" alt="Logo" style="height: 50px; width: 180px;object-fit: contain;">
                        </div>
                        <div class="flex gap-6 flex-wrap justify-center">
                            <a 
                                class="text-[#60758a] text-sm hover:text-primary dark:text-gray-500 dark:hover:text-cyan-400 transition-colors" 
                                href="{{ route('legal.terms-conditions') }}"
                            >
                                Términos &amp; Condiciones
                            </a>

                            <a 
                                class="text-[#60758a] text-sm hover:text-primary dark:text-gray-500 dark:hover:text-cyan-400 transition-colors" 
                                href="{{ route('legal.privacy') }}"
                            >
                                Política de privacidad
                            </a>

                            <a 
                                class="text-[#60758a] text-sm hover:text-primary dark:text-gray-500 dark:hover:text-cyan-400 transition-colors" 
                                href="{{ route('legal.cookie-policity') }}"
                            >
                                Política de cookies
                            </a>

                            <a 
                                class="text-[#60758a] text-sm hover:text-primary dark:text-gray-500 dark:hover:text-cyan-400 transition-colors" 
                                href="{{ route('contact') }}"    
                            >
                                Contáctenos
                            </a>

                            <a 
                                class="text-[#60758a] text-sm hover:text-primary dark:text-gray-500 dark:hover:text-cyan-400 transition-colors" 
                                href="{{ route('legal.disclaimer') }}"
                            >
                                Aviso Legal
                            </a>
                        </div>
                    </div>
                    <div class="text-center md:text-left">
                        <p class="text-[#9ca3af] dark:text-gray-600 text-xs">© {{ date('Y') }} {{ config('services.vars.appName') }}. No estamos afiliados a TikTok.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>