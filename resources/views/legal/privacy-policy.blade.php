@extends('layouts.app')

@section('title', 'Política de privacidad')

@section('content')
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <div class="flex flex-1 justify-center py-10 px-4 md:px-10">
                <div class="layout-content-container flex flex-col lg:flex-row gap-12 max-w-[1200px] flex-1">

                    <aside class="hidden lg:flex flex-col w-64 shrink-0">
                        <div class="sticky top-28 max-h-[calc(100vh-120px)] overflow-y-auto no-scrollbar py-2">
                            <p
                                class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-4 px-4">
                                En esta página</p>
                            <nav class="flex flex-col gap-1">
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-primary/10 text-primary font-bold border-l-4 border-primary transition-all"
                                    href="#introduction">
                                    <span class="material-symbols-outlined text-[20px]">info</span>
                                    <span class="text-sm">Introducción</span>
                                </a>
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-all border-l-4 border-transparent"
                                    href="#data-collection">
                                    <span class="material-symbols-outlined text-[20px]">database</span>
                                    <span class="text-sm">Recopilación de Datos</span>
                                </a>
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-all border-l-4 border-transparent"
                                    href="#cookies">
                                    <span class="material-symbols-outlined text-[20px]">cookie</span>
                                    <span class="text-sm">Cookies &amp; Seguimiento</span>
                                </a>
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-all border-l-4 border-transparent"
                                    href="#ads">
                                    <span class="material-symbols-outlined text-[20px]">ad_units</span>
                                    <span class="text-sm">Anuncios de terceros</span>
                                </a>
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-all border-l-4 border-transparent"
                                    href="#gdpr">
                                    <span class="material-symbols-outlined text-[20px]">gavel</span>
                                    <span class="text-sm">Derechos del RGPD</span>
                                </a>
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-all border-l-4 border-transparent"
                                    href="#ccpa">
                                    <span class="material-symbols-outlined text-[20px]">security</span>
                                    <span class="text-sm">Cumplimiento de la CCPA</span>
                                </a>
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-all border-l-4 border-transparent"
                                    href="#contact">
                                    <span class="material-symbols-outlined text-[20px]">mail</span>
                                    <span class="text-sm">Contáctanos</span>
                                </a>
                            </nav>
                        </div>
                    </aside>

                    <main class="flex flex-col flex-1 min-w-0">
                        <div class="flex flex-col gap-4 mb-10 border-b border-gray-200 dark:border-gray-800 pb-8">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 rounded-full bg-primary/10 dark:bg-primary/20 text-primary text-xs font-bold uppercase tracking-wider">Documento
                                    Legal</span>
                                <span class="flex items-center gap-1 text-gray-500 dark:text-gray-400 text-xs font-medium">
                                    <span class="material-symbols-outlined text-[16px]">schedule</span>
                                    Vigencia: 24 de enero de 2026
                                </span>
                            </div>
                            <h1
                                class="text-[#111418] dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                                Política de Privacidad</h1>
                            <p class="text-[#60758a] dark:text-gray-400 text-lg font-normal leading-normal max-w-2xl">
                                Estamos comprometidos a proteger su privacidad. Este documento describe cómo recopilamos,
                                utilizamos y salvaguardamos sus datos al utilizar nuestro servicio de descarga de videos de
                                TikTok.
                            </p>
                        </div>

                        <section class="mb-12 scroll-mt-28" id="introduction">
                            <h2
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-primary text-white text-sm font-bold">1</span>
                                Introducción
                            </h2>
                            <div class="prose prose-lg dark:prose-invert text-gray-600 dark:text-gray-300">
                                <p class="mb-4">
                                    Bienvenido a {{ config('services.vars.appName') }} ("nosotros", "nuestro" o "nos").
                                    Respetamos su privacidad y estamos comprometidos a proteger sus datos personales. Esta
                                    política de privacidad le informará sobre cómo cuidamos sus datos personales cuando
                                    visita nuestro sitio web y le informará sobre sus derechos de privacidad y cómo la ley
                                    le protege.
                                </p>
                                <p>
                                    Al utilizar nuestro servicio para descargar videos sin marcas de agua, usted acepta la
                                    recopilación y el uso de información de acuerdo con esta política. Nuestra plataforma
                                    está diseñada para ser consciente de la privacidad, minimizando los datos que
                                    almacenamos sobre nuestros usuarios.
                                </p>
                            </div>
                        </section>

                        <section class="mb-12 scroll-mt-28" id="data-collection">
                            <h2
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm font-bold">2</span>
                                Recopilación de Datos
                            </h2>
                            <div
                                class="bg-white dark:bg-[#1a2632] rounded-xl p-6 border border-gray-100 dark:border-gray-800 shadow-sm mb-6">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-3">Datos de Registro</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">
                                    Al igual que la mayoría de los sitios web, recopilamos información que su navegador
                                    envía cada vez que visita nuestro Servicio ("Datos de Registro"). Estos Datos de
                                    Registro pueden incluir información como:
                                </p>
                                <ul class="grid md:grid-cols-2 gap-4">
                                    <li class="flex items-center gap-3 p-3 rounded-lg bg-gray-50 dark:bg-gray-800/50">
                                        <span class="material-symbols-outlined text-primary">dns</span>
                                        <span class="text-sm font-medium">Dirección IP</span>
                                    </li>
                                    <li class="flex items-center gap-3 p-3 rounded-lg bg-gray-50 dark:bg-gray-800/50">
                                        <span class="material-symbols-outlined text-primary">devices</span>
                                        <span class="text-sm font-medium">Tipo &amp; versión del navegador</span>
                                    </li>
                                    <li class="flex items-center gap-3 p-3 rounded-lg bg-gray-50 dark:bg-gray-800/50">
                                        <span class="material-symbols-outlined text-primary">schedule</span>
                                        <span class="text-sm font-medium">Hora y fecha de la visita</span>
                                    </li>
                                    <li class="flex items-center gap-3 p-3 rounded-lg bg-gray-50 dark:bg-gray-800/50">
                                        <span class="material-symbols-outlined text-primary">link</span>
                                        <span class="text-sm font-medium">URL de procedencia</span>
                                    </li>
                                </ul>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                No almacenamos los videos que descargas. Todos los videos se procesan directamente desde el
                                CDN de TikTok a tu dispositivo. Es posible que almacenemos en caché los enlaces de descarga
                                por un breve periodo para mejorar el rendimiento, pero estos no están vinculados a su
                                identidad personal.
                            </p>
                        </section>

                        <section class="mb-12 scroll-mt-28" id="cookies">
                            <h2
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm font-bold">3</span>
                                Cookies &amp; Tecnologías de Seguimiento
                            </h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">
                                Utilizamos cookies y tecnologías de seguimiento similares para rastrear la actividad en
                                nuestro Servicio y mantener cierta información. Las cookies son archivos con una pequeña
                                cantidad de datos que pueden incluir un identificador único anónimo.
                            </p>
                            <div class="space-y-4">
                                <div
                                    class="flex gap-4 items-start p-4 rounded-xl border border-dashed border-gray-300 dark:border-gray-700">
                                    <div class="bg-blue-100 dark:bg-blue-900/30 p-2 rounded-lg text-primary shrink-0">
                                        <span class="material-symbols-outlined">analytics</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 dark:text-white text-sm">Cookies de análisis
                                        </h4>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Utilizamos Google Analytics
                                            para entender cómo se utiliza nuestro servicio. Estos datos son anónimos y
                                            agregados.</p>
                                    </div>
                                </div>
                                <div
                                    class="flex gap-4 items-start p-4 rounded-xl border border-dashed border-gray-300 dark:border-gray-700">
                                    <div
                                        class="bg-purple-100 dark:bg-purple-900/30 p-2 rounded-lg text-purple-600 dark:text-purple-400 shrink-0">
                                        <span class="material-symbols-outlined">ads_click</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 dark:text-white text-sm">Cookies de publicidad
                                        </h4>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Nuestros socios
                                            publicitarios externos (como Google AdSense) pueden colocar cookies para mostrar
                                            anuncios basados en sus visitas anteriores a nuestro sitio web.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="mb-12 scroll-mt-28" id="ads">
                            <h2
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm font-bold">4</span>
                                Anunciantes externos
                            </h2>
                            <div class="bg-orange-50 dark:bg-orange-900/10 border-l-4 border-orange-500 p-5 rounded-r-lg">
                                <p class="text-gray-700 dark:text-gray-300 text-sm leading-relaxed">
                                    Nuestro Servicio se sustenta mediante publicidad. Estos servidores de anuncios o redes
                                    publicitarias de terceros utilizan tecnología para que los anuncios y enlaces que
                                    aparecen en TikTok Downloader se envíen directamente a su navegador. Ellos reciben
                                    automáticamente su dirección IP cuando esto ocurre. Otras tecnologías (como cookies,
                                    JavaScript o Web Beacons) también pueden ser utilizadas por las redes publicitarias de
                                    terceros para medir la efectividad de sus anuncios y/o para personalizar el contenido
                                    publicitario que usted ve.
                                </p>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 mt-4 text-sm">
                                TikTok Downloader no tiene acceso ni control sobre estas cookies que son utilizadas por anunciantes externos. Usted debe consultar las políticas de privacidad respectivas de estos servidores de anuncios de terceros para obtener información más detallada sobre sus prácticas.
                            </p>
                        </section>
                        
                        <section class="mb-12 scroll-mt-28" id="gdpr">
                            <h2
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm font-bold">5</span>
                                Derechos de Protección de Datos del RGPD
                            </h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">
                                Nos gustaría asegurarnos de que usted conoce plenamente todos sus derechos de protección de datos. Todo usuario en el EEE tiene derecho a lo siguiente:
                            </p>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div
                                    class="p-5 rounded-xl bg-white dark:bg-[#1a2632] border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-2 flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary text-xl">visibility</span>
                                        Derecho de acceso
                                    </h4>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Usted tiene derecho a solicitar copias de sus datos personales.</p>
                                </div>
                                <div
                                    class="p-5 rounded-xl bg-white dark:bg-[#1a2632] border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-2 flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary text-xl">edit_note</span>
                                       Derecho de rectificación
                                    </h4>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Solicitar que corrijamos cualquier información que usted considere inexacta.</p>
                                </div>
                                <div
                                    class="p-5 rounded-xl bg-white dark:bg-[#1a2632] border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-2 flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary text-xl">delete_forever</span>
                                        Derecho de supresión
                                    </h4>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Solicitar que eliminemos sus datos personales, bajo ciertas condiciones.</p>
                                </div>
                                <div
                                    class="p-5 rounded-xl bg-white dark:bg-[#1a2632] border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-2 flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary text-xl">block</span>
                                        Derecho a la limitación
                                    </h4>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Solicitar que limitemos el tratamiento de sus datos personales.</p>
                                </div>
                            </div>
                        </section>
                        
                        <section class="mb-12 scroll-mt-28" id="ccpa">
                            <h2
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm font-bold">6</span>
                                Cumplimiento de la CCPA
                            </h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                Bajo la CCPA, entre otros derechos, los consumidores de California tienen derecho a:
                            </p>
                            <ul class="list-disc pl-5 space-y-2 text-gray-600 dark:text-gray-300 marker:text-primary">
                                <li>Solicitar que una empresa que recopila datos personales de un consumidor divulgue las categorías y piezas específicas de datos personales que una empresa ha recopilado sobre los consumidores.</li>
                                <li>Solicitar que una empresa elimine cualquier dato personal sobre el consumidor que una empresa haya recopilado.</li>
                                <li>Solicitar que una empresa que vende los datos personales de un consumidor, no venda los datos personales del consumidor.</li>
                            </ul>
                            <div class="mt-6">
                                <button
                                    class="inline-flex items-center gap-2 text-sm font-bold text-primary hover:underline">
                                    No vender mi información personal
                                    <span class="material-symbols-outlined text-lg">arrow_forward</span>
                                </button>
                            </div>
                        </section>
                        
                        <section class="scroll-mt-28" id="contact">
                            <div
                                class="bg-gray-900 dark:bg-[#1a2632] rounded-2xl p-8 md:p-10 text-center relative overflow-hidden group">
                                <div
                                    class="absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 group-hover:bg-primary/30 transition-all duration-700">
                                </div>
                                <div
                                    class="absolute bottom-0 left-0 w-64 h-64 bg-blue-600/20 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 group-hover:bg-blue-600/30 transition-all duration-700">
                                </div>
                                <div class="relative z-10 flex flex-col items-center">
                                    <div
                                        class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center mb-6 backdrop-blur-sm">
                                        <span class="material-symbols-outlined text-white text-3xl">mail_lock</span>
                                    </div>
                                    <h2 class="text-white text-2xl md:text-3xl font-bold mb-4">¿Tiene preguntas sobre su privacidad?</h2>
                                    <p class="text-gray-300 mb-8 max-w-md mx-auto">
                                        Si tiene alguna pregunta sobre esta Política de privacidad, póngase en contacto con nuestro Delegado de protección de datos.
                                    </p>
                                    <div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
                                        <button
                                            class="bg-primary hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-full transition-all transform hover:scale-105 shadow-lg shadow-blue-500/25 flex items-center justify-center gap-2">
                                            <span class="material-symbols-outlined text-lg">send</span>
                                            Contactar con el DPO
                                        </button>
                                        <button
                                            class="bg-white/10 hover:bg-white/20 text-white font-bold py-3 px-8 rounded-full backdrop-blur-sm transition-all flex items-center justify-center gap-2">
                                            Solicitar eliminación de datos
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection