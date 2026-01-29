@extends('layouts.app')

@section('title', 'Política de Cookies - VideoVibeTok')

@section('meta_description')
Conoce cómo {{ config('services.vars.appName') }} utiliza cookies y tecnologías de seguimiento: cookies esenciales, analíticas y de marketing. Aprende a gestionar tus preferencias y proteger tu privacidad. Última actualización: Enero 01, 2026.
@endsection

@section('meta_keywords', 'política de cookies, cookies, privacidad, VideoVibeTok, cookies marketing, cookies analytics')

@section('og_title', 'Política de Cookies - VideoVibeTok')
@section('og_description', 'Explicamos qué cookies usamos en VideoVibeTok, por qué las usamos y cómo puedes administrarlas (cookies esenciales, analíticas y de marketing).')
@section('og_image', asset('assets/img/og/cookies-1200x630.png'))
@section('twitter_card', 'summary_large_image')

@section('content')
    <div class="flex-1 w-full max-w-[1400px] mx-auto px-4 py-8 md:px-10 md:py-12">
        <div class="mb-12 max-w-[960px] mx-auto text-center md:text-left">
            <h1
                class="text-slate-900 dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em] mb-4">
                Política de Cookies de <span class="text-primary">{{ config('services.vars.appName') }}</span>
            </h1>
            <p class="text-slate-500 dark:text-slate-400 text-base font-normal leading-normal">Entendemos la importancia de la privacidad: aquí describimos qué cookies y tecnologías de seguimiento usamos (esenciales, analíticas y de marketing), por qué las usamos y cómo puedes gestionarlas. Última actualización: <span class="font-medium">Enero 01, 2026</span></p>
        </div>
        <div class="flex flex-col lg:flex-row gap-12">
            <aside class="hidden lg:block w-64 flex-shrink-0">
                <div class="sticky top-24 space-y-8">
                    <div
                        class="bg-white dark:bg-slate-900 rounded-2xl p-6 border border-slate-200 dark:border-slate-800 shadow-sm">
                        <h3 class="text-slate-900 dark:text-white text-base font-bold mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">toc</span>
                            En esta página
                        </h3>
                        <nav class="flex flex-col gap-2">
                            <a class="flex items-center gap-3 px-3 py-2 rounded-full bg-primary/10 text-primary text-sm font-semibold transition-colors"
                                href="#overview">Resumen</a> <a
                                class="flex items-center gap-3 px-3 py-2 rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-medium transition-colors"
                                href="#status">Estado de su consentimiento</a> <a
                                class="flex items-center gap-3 px-3 py-2 rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-medium transition-colors"
                                href="#essential">Cookies esenciales</a> <a
                                class="flex items-center gap-3 px-3 py-2 rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-medium transition-colors"
                                href="#marketing">Marketing y publicidad</a> <a
                                class="flex items-center gap-3 px-3 py-2 rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-medium transition-colors"
                                href="#third-party">Terceros</a> <a
                                class="flex items-center gap-3 px-3 py-2 rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-medium transition-colors"
                                href="#manage">Cómo administrarlas</a>
                        </nav>
                    </div>
                    <div class="bg-gradient-to-br from-primary to-blue-600 rounded-2xl p-6 text-white shadow-lg">
                        <span class="material-symbols-outlined text-4xl mb-3">security</span>
                        <h4 class="font-bold text-lg mb-2">Valoramos su privacidad</h4>
                        <p class="text-blue-100 text-sm mb-4">Sus datos están seguros con nosotros. Solo utilizamos cookies
                            para mejorar su experiencia.</p> <a
                            class="inline-block text-sm font-bold underline decoration-2 underline-offset-2 hover:text-white/90"
                            href="#">Leer Política de privacidad</a>
                    </div>
                </div>
            </aside>
            <div class="flex-1 max-w-[800px]">
                <section class="mb-12" id="overview">
                    <p class="text-lg leading-relaxed text-slate-700 dark:text-slate-300 mb-6"> Utilizamos cookies y
                        tecnologías de seguimiento similares para rastrear la actividad en nuestro Servicio y almacenar
                        cierta información. Las tecnologías de seguimiento utilizadas son balizas, etiquetas y scripts para
                        recopilar y rastrear información, así como para mejorar y analizar nuestro Servicio. </p>
                    <div class="bg-blue-50 dark:bg-blue-900/20 border-l-4 border-primary p-6 rounded-r-xl">
                        <p class="text-slate-700 dark:text-slate-200 font-medium"> <span
                                class="material-symbols-outlined align-bottom mr-1 text-primary">info</span>
                            <strong>Monetización transparente:</strong> Al ser una herramienta gratuita, dependemos de los
                            anuncios para cubrir los costes de nuestros servidores. Algunas cookies nos ayudan a mostrarle
                            anuncios relevantes en lugar de aleatorios.
                        </p>
                    </div>
                </section>

                <section class="mb-12 scroll-mt-24" id="status">
                    <div
                        class="bg-white dark:bg-slate-900 rounded-2xl p-6 md:p-8 border border-slate-200 dark:border-slate-800 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)]">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-2"> <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-400">
                                        <span class="material-symbols-outlined text-xl">check_circle</span> </span>
                                    <h2 class="text-xl font-bold text-slate-900 dark:text-white">Estado del consentimiento:
                                        Permitido </h2>
                                </div>
                                <p class="text-slate-600 dark:text-slate-400 text-sm"> Ha aceptado todas las cookies. Esto
                                    nos permite ofrecer el conjunto completo de funciones y mantener nuestro servicio
                                    gratuito. </p>
                                <p class="text-xs text-slate-400 mt-2">ID de consentimiento: 8a7f9c...2b1</p>
                            </div> <button
                                class="shrink-0 flex items-center justify-center gap-2 rounded-full h-10 px-6 bg-slate-100 hover:bg-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700 text-slate-900 dark:text-white text-sm font-semibold transition-all">
                                <span class="material-symbols-outlined text-lg">tune</span> Administrar preferencias
                            </button>
                        </div>
                    </div>
                </section>

                <div class="space-y-8">
                    <section class="scroll-mt-24" id="essential">
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2"> <span
                                class="material-symbols-outlined text-primary">verified_user</span> Cookies estrictamente
                            necesarias </h2>
                        <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"> Estas cookies son esenciales
                            para que pueda navegar por el sitio web y utilizar sus funciones, como el acceso a áreas seguras
                            del sitio. Sin estas cookies, los servicios que ha solicitado no pueden ser proporcionados. </p>
                        <div class="overflow-hidden rounded-xl border border-slate-200 dark:border-slate-800">
                            <table class="w-full text-sm text-left">
                                <thead class="bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white font-semibold">
                                    <tr>
                                        <th class="px-6 py-4">Nombre</th>
                                        <th class="px-6 py-4">Proveedor</th>
                                        <th class="px-6 py-4">Propósito</th>
                                        <th class="px-6 py-4">Caducidad</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 dark:divide-slate-800 bg-white dark:bg-slate-900">
                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">XSRF-TOKEN</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">tiktok-downloader.com </td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Garantiza la seguridad de
                                            navegación del visitante.</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Sesión</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">consent_status
                                        </td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">tiktok-downloader.com </td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Almacena el estado de
                                            consentimiento de cookies del usuario.</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">1 año</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="scroll-mt-24" id="marketing">
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2"> <span
                                class="material-symbols-outlined text-primary">campaign</span> Cookies de marketing y
                            publicidad </h2>
                        <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"> Estas cookies rastrean su
                            actividad en línea para ayudar a los anunciantes a ofrecer publicidad más relevante o para
                            limitar cuántas veces ve un anuncio. Estas cookies pueden compartir esa información con otras
                            organizaciones o anunciantes. </p>
                        <div
                            class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-6 mb-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center shrink-0 text-orange-600 dark:text-orange-400">
                                    <span class="material-symbols-outlined">monetization_on</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white mb-1">¿Por qué las utilizamos?</h4>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm"> Nuestro servicio de descarga de
                                        videos es gratuito. Para mantener nuestros servidores y ofrecer descargas de alta
                                        velocidad, mostramos anuncios. Las cookies de marketing aseguran que no vea el mismo
                                        anuncio repetidamente y que los anuncios sean de algún modo relevantes para usted.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-hidden rounded-xl border border-slate-200 dark:border-slate-800">
                            <table class="w-full text-sm text-left">
                                <thead class="bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white font-semibold">
                                    <tr>
                                        <th class="px-6 py-4">Nombre</th>
                                        <th class="px-6 py-4">Proveedor</th>
                                        <th class="px-6 py-4">Propósito</th>
                                        <th class="px-6 py-4">Caducidad</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 dark:divide-slate-800 bg-white dark:bg-slate-900">
                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">_gads</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Google</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Se utiliza para mostrar
                                            anuncios en el sitio.</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">13 meses</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">IDE</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Google/DoubleClick</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Se utiliza para registrar e
                                            informar las acciones del usuario después de ver o hacer clic en uno de los
                                            anuncios del anunciante.</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">1 año</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="scroll-mt-24" id="third-party">
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2"> <span
                                class="material-symbols-outlined text-primary">hub</span> Análisis de terceros </h2>
                        <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"> Utilizamos servicios de análisis
                            de terceros para comprender cómo interactúan los usuarios con nuestro sitio web. Esto nos ayuda
                            a mejorar la experiencia del usuario e identificar problemas. </p>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div
                                class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
                                <div
                                    class="size-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center shrink-0">
                                    <span
                                        class="material-symbols-outlined text-slate-600 dark:text-slate-400">analytics</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white">Google Analytics</h4>
                                    <p class="text-xs text-slate-500">Análisis de tráfico y comportamiento del usuario.</p>
                                </div>
                            </div>
                            <div
                                class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
                                <div
                                    class="size-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center shrink-0">
                                    <span
                                        class="material-symbols-outlined text-slate-600 dark:text-slate-400">bug_report</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white">Sentry</h4>
                                    <p class="text-xs text-slate-500">Registro de errores y monitoreo de rendimiento.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="scroll-mt-24 pt-8 border-t border-slate-200 dark:border-slate-800" id="manage">
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Cómo administrar las cookies</h2>
                        <p class="text-slate-600 dark:text-slate-400 mb-6"> Puede cambiar sus preferencias de cookies en
                            cualquier momento haciendo clic en el botón 'Administrar preferencias' de arriba.
                            Alternativamente, la mayoría de los navegadores web permiten cierto control de la mayoría de las
                            cookies a través de la configuración del navegador. </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6"> <a
                                class="group block p-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 hover:border-primary/50 hover:shadow-lg hover:shadow-primary/5 transition-all"
                                href="#">
                                <div
                                    class="mb-4 size-12 bg-blue-50 dark:bg-slate-800 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-blue-600">public</span>
                                </div>
                                <h3 class="font-bold text-slate-900 dark:text-white mb-2">Google Chrome</h3>
                                <p class="text-sm text-slate-500">Aprenda a administrar las cookies en Chrome.</p>
                            </a> <a
                                class="group block p-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 hover:border-orange-500/50 hover:shadow-lg hover:shadow-orange-500/5 transition-all"
                                href="#">
                                <div
                                    class="mb-4 size-12 bg-orange-50 dark:bg-slate-800 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-orange-600">travel_explore</span>
                                </div>
                                <h3 class="font-bold text-slate-900 dark:text-white mb-2">Mozilla Firefox</h3>
                                <p class="text-sm text-slate-500">Aprenda a administrar las cookies en Firefox.</p>
                            </a> <a
                                class="group block p-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 hover:border-blue-400/50 hover:shadow-lg hover:shadow-blue-400/5 transition-all"
                                href="#">
                                <div
                                    class="mb-4 size-12 bg-blue-50 dark:bg-slate-800 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-blue-400">explore</span>
                                </div>
                                <h3 class="font-bold text-slate-900 dark:text-white mb-2">Safari</h3>
                                <p class="text-sm text-slate-500">Aprenda a administrar las cookies en Safari.</p>
                            </a> </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed inset-0 z-[100] flex items-center justify-center px-4 sm:px-6 hidden">
        <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity"></div>
        <div
            class="relative bg-white dark:bg-slate-900 rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] flex flex-col overflow-hidden border border-slate-200 dark:border-slate-800">
            <div
                class="flex items-center justify-between px-6 py-4 border-b border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900 z-10">
                <h3 class="text-xl font-bold text-slate-900 dark:text-white">Administrar preferencias de cookies</h3>
                <button
                    class="text-slate-400 hover:text-slate-500 dark:hover:text-slate-300 transition-colors rounded-full p-1 hover:bg-slate-100 dark:hover:bg-slate-800">
                    <span class="material-symbols-outlined">close</span> </button>
            </div>
            <div class="flex-1 overflow-y-auto p-6 space-y-4 bg-slate-50/50 dark:bg-slate-950/30">
                <p class="text-sm text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"> Cuando visita cualquier sitio
                    web, este puede almacenar o recuperar información en su navegador, principalmente en forma de cookies.
                    Puede elegir no permitir algunos tipos de cookies; sin embargo, el bloqueo de algunos tipos puede
                    afectar su experiencia. </p>
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-5 shadow-sm transition-all hover:shadow-md">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-bold text-slate-900 dark:text-white">Cookies esenciales</h4> <span
                                    class="px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider bg-primary/10 text-primary border border-primary/20">Obligatorio</span>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Necesarias para que el sitio web funcione
                                correctamente y no se pueden desactivar en nuestros sistemas.</p>
                        </div>
                        <div class="shrink-0 text-primary font-medium text-xs pt-1.5 flex items-center gap-1"> <span
                                class="material-symbols-outlined text-sm">lock</span> Siempre activas </div>
                    </div>
                </div>
                <details
                    class="group bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden transition-all hover:shadow-md open">
                    <summary class="flex items-start justify-between gap-4 p-5 cursor-pointer list-none select-none">
                        <div class="flex-1 pr-4">
                            <div class="flex items-center gap-2 mb-1">
                                <h4
                                    class="font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                    Cookies funcionales</h4> <span
                                    class="material-symbols-outlined text-slate-400 text-lg transition-transform duration-200 group-open:rotate-180">expand_more</span>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Permiten que el sitio web ofrezca una
                                funcionalidad mejorada y personalización, como recordar su idioma.</p>
                        </div>
                        <div class="relative inline-flex items-center cursor-pointer pt-1" onclick="event.preventDefault()">
                            <input checked="" class="sr-only peer" type="checkbox" />
                            <div
                                class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[6px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:shadow-sm after:transition-all peer-checked:bg-primary">
                            </div>
                        </div>
                    </summary>
                    <div
                        class="px-5 pb-5 pt-0 border-t border-slate-100 dark:border-slate-800 mt-2 bg-slate-50/50 dark:bg-slate-900/50">
                        <div
                            class="overflow-x-auto mt-4 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                            <table class="w-full text-xs text-left">
                                <thead class="text-slate-500 bg-slate-50 dark:bg-slate-800/50 uppercase font-semibold">
                                    <tr>
                                        <th class="px-4 py-3">Nombre</th>
                                        <th class="px-4 py-3">Proveedor</th>
                                        <th class="px-4 py-3">Duración</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                    <tr>
                                        <td class="px-4 py-3 font-medium text-slate-700 dark:text-slate-300">lang_pref </td>
                                        <td class="px-4 py-3 text-slate-500">tiktok-downloader.com</td>
                                        <td class="px-4 py-3 text-slate-500">1 año</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-medium text-slate-700 dark:text-slate-300">theme_mode
                                        </td>
                                        <td class="px-4 py-3 text-slate-500">tiktok-downloader.com</td>
                                        <td class="px-4 py-3 text-slate-500">Persistente</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </details>
                <details
                    class="group bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden transition-all hover:shadow-md">
                    <summary class="flex items-start justify-between gap-4 p-5 cursor-pointer list-none select-none">
                        <div class="flex-1 pr-4">
                            <div class="flex items-center gap-2 mb-1">
                                <h4
                                    class="font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                    Cookies de análisis</h4> <span
                                    class="material-symbols-outlined text-slate-400 text-lg transition-transform duration-200 group-open:rotate-180">expand_more</span>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Nos permiten contar las visitas y fuentes
                                de tráfico para que podamos medir y mejorar el rendimiento de nuestro sitio.</p>
                        </div>
                        <div class="relative inline-flex items-center cursor-pointer pt-1" onclick="event.preventDefault()">
                            <input class="sr-only peer" type="checkbox" />
                            <div
                                class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[6px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:shadow-sm after:transition-all peer-checked:bg-primary">
                            </div>
                        </div>
                    </summary>
                    <div
                        class="px-5 pb-5 pt-0 border-t border-slate-100 dark:border-slate-800 mt-2 bg-slate-50/50 dark:bg-slate-900/50">
                        <div
                            class="overflow-x-auto mt-4 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                            <table class="w-full text-xs text-left">
                                <thead class="text-slate-500 bg-slate-50 dark:bg-slate-800/50 uppercase font-semibold">
                                    <tr>
                                        <th class="px-4 py-3">Nombre</th>
                                        <th class="px-4 py-3">Proveedor</th>
                                        <th class="px-4 py-3">Duración</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                    <tr>
                                        <td class="px-4 py-3 font-medium text-slate-700 dark:text-slate-300">_ga</td>
                                        <td class="px-4 py-3 text-slate-500">Google Analytics</td>
                                        <td class="px-4 py-3 text-slate-500">2 años</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-medium text-slate-700 dark:text-slate-300">_gid</td>
                                        <td class="px-4 py-3 text-slate-500">Google Analytics</td>
                                        <td class="px-4 py-3 text-slate-500">24 horas</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </details>
                <details
                    class="group bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden transition-all hover:shadow-md">
                    <summary class="flex items-start justify-between gap-4 p-5 cursor-pointer list-none select-none">
                        <div class="flex-1 pr-4">
                            <div class="flex items-center gap-2 mb-1">
                                <h4
                                    class="font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                    Cookies de publicidad</h4> <span
                                    class="material-symbols-outlined text-slate-400 text-lg transition-transform duration-200 group-open:rotate-180">expand_more</span>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Utilizadas por nuestros socios
                                publicitarios para crear un perfil de sus intereses y mostrarle anuncios relevantes en otros
                                sitios.</p>
                        </div>
                        <div class="relative inline-flex items-center cursor-pointer pt-1" onclick="event.preventDefault()">
                            <input class="sr-only peer" type="checkbox" />
                            <div
                                class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[6px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:shadow-sm after:transition-all peer-checked:bg-primary">
                            </div>
                        </div>
                    </summary>
                    <div
                        class="px-5 pb-5 pt-0 border-t border-slate-100 dark:border-slate-800 mt-2 bg-slate-50/50 dark:bg-slate-900/50">
                        <div
                            class="overflow-x-auto mt-4 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                            <table class="w-full text-xs text-left">
                                <thead class="text-slate-500 bg-slate-50 dark:bg-slate-800/50 uppercase font-semibold">
                                    <tr>
                                        <th class="px-4 py-3">Nombre</th>
                                        <th class="px-4 py-3">Proveedor</th>
                                        <th class="px-4 py-3">Duración</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                    <tr>
                                        <td class="px-4 py-3 font-medium text-slate-700 dark:text-slate-300">_fbp</td>
                                        <td class="px-4 py-3 text-slate-500">Meta</td>
                                        <td class="px-4 py-3 text-slate-500">3 meses</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-medium text-slate-700 dark:text-slate-300">ads_prefs </td>
                                        <td class="px-4 py-3 text-slate-500">Google Ads</td>
                                        <td class="px-4 py-3 text-slate-500">1 año</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </details>
            </div>
            <div
                class="p-6 border-t border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900 z-10 flex flex-col sm:flex-row justify-between gap-4">
                <button
                    class="px-5 py-3 rounded-full border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 font-bold text-sm hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors w-full sm:w-auto">
                    Rechazar todo
                </button>
                <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                    <button
                        class="px-5 py-3 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white font-bold text-sm hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                        Guardar preferencias
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-primary hover:bg-blue-600 text-white font-bold text-sm shadow-lg shadow-blue-500/25 hover:shadow-blue-500/40 transition-all transform active:scale-95">
                        Aceptar todo
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection