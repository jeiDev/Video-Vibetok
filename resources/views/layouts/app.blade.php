<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ config('services.vars.appName') }} - @yield('title', 'Descargador')</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap"  rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#258cf4",
                        "background-light": "#f5f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body>
    <div
        class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark overflow-x-hidden font-display">
        <header
            class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e5e7eb] bg-white px-10 py-3 sticky top-0 z-50">
            <div class="flex items-center gap-4 text-[#111418]">
                <div class="size-8 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-[32px]">cloud_download</span>
                </div>
                <h2 class="text-[#111418] text-xl font-bold leading-tight tracking-[-0.015em]">{{ config('services.vars.appName') }}</h2>
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <div class="hidden md:flex items-center gap-9">
                    <a 
                        class="text-sm font-medium leading-normal text-primary" 
                        href="{{ route('home') }}"
                    >
                        Inicio
                    </a>

                    <a 
                        class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" 
                        href="{{ route('home') }}"
                    >
                        Cómo utilizar
                    </a>

                    <a 
                        class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" 
                        href="{{ route('home') }}"
                    >
                        Contactanos
                    </a>

                    <a 
                        class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" 
                        href="{{ route('home') }}"
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

            <footer class="flex justify-center py-8 px-4 bg-white border-t border-[#e5e7eb] mt-auto">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1 gap-6">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-2 text-[#111418]">
                            <span class="material-symbols-outlined text-primary">cloud_download</span>
                            <span class="text-sm font-bold">{{ config('services.vars.appName') }}</span>
                        </div>
                        <div class="flex gap-6 flex-wrap justify-center">
                            <a 
                                class="text-[#60758a] text-sm hover:text-primary transition-colors" 
                                href="{{ route('legal.terms') }}"
                            >
                                Términos de servicio
                            </a>

                            <a 
                                class="text-[#60758a] text-sm hover:text-primary transition-colors" 
                                href="{{ route('legal.privacy') }}"
                            >
                                Política de privacidad
                            </a>

                            <a 
                                class="text-[#60758a] text-sm hover:text-primary transition-colors" 
                                href="{{ route('contact') }}"    
                            >
                                Contáctenos
                            </a>

                            <a 
                                class="text-[#60758a] text-sm hover:text-primary transition-colors" 
                                href="{{ route('legal.dmca') }}"
                            >
                                DMCA
                            </a>
                        </div>
                    </div>
                    <div class="text-center md:text-left">
                        <p class="text-[#9ca3af] text-xs">© {{ date('Y') }} {{ config('services.vars.appName') }}. No estamos afiliados a TikTok.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>