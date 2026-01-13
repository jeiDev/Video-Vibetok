@extends('layouts.app')

@section('title', 'Términos & Condiciones')

@section('content')
    <div class="flex-grow w-full max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
        <div class="text-center mb-16 space-y-4">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wide">
                <span class="material-symbols-outlined text-[16px]">gavel</span>
                Información legal
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-[#111418] text-[#111418] dark:text-white tracking-tight">
                Términos y condiciones
            </h1>
            <p class="text-text-sub dark:text-gray-400 text-lg max-w-2xl mx-auto"> Por favor, lea estos términos atentamente antes de utilizar nuestros servicios. Última actualización el <span class="font-medium text-[#111418] dark:text-white">01 de enero de 2026</span>. </p>
        </div>
        <div class="flex flex-col lg:flex-row gap-12 relative">
            
            <aside class="hidden lg:block w-64 shrink-0">
                <div class="sticky top-28 space-y-6">
                    <div
                        class="p-6 bg-white dark:bg-[#1a2632] rounded-xl shadow-sm border border-gray-100 dark:border-gray-800">
                        <h3 class="text-sm font-bold text-text-sub dark:text-gray-400 uppercase tracking-wider mb-4">Tabla de contenidos</h3>
                        <nav class="flex flex-col space-y-1">
                            <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-primary bg-primary/5 rounded-lg border-l-2 border-primary"
                                href="#intro">
                                <span>01.</span> Introducción
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-text-sub dark:text-gray-400 hover:text-[#111418] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-white/5 rounded-lg border-l-2 border-transparent transition-all"
                                href="#user-responsibility">
                                <span>02.</span> Responsabilidad del usuario
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-text-sub dark:text-gray-400 hover:text-[#111418] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-white/5 rounded-lg border-l-2 border-transparent transition-all"
                                href="#intellectual-property">
                                <span>03.</span> Propiedad intelectual
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-text-sub dark:text-gray-400 hover:text-[#111418] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-white/5 rounded-lg border-l-2 border-transparent transition-all"
                                href="#service-availability">
                                <span>04.</span> Disponibilidad del servicio
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-text-sub dark:text-gray-400 hover:text-[#111418] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-white/5 rounded-lg border-l-2 border-transparent transition-all"
                                href="#limitation-liability">
                                <span>05.</span> Limitación de responsabilidad
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-text-sub dark:text-gray-400 hover:text-[#111418] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-white/5 rounded-lg border-l-2 border-transparent transition-all"
                                href="#third-party">
                                <span>06.</span> Enlaces de terceros
                            </a>
                        </nav>
                    </div>
                </div>
            </aside>
            
            <article class="flex-1 max-w-3xl mx-auto lg:mx-0">
                <div class="space-y-12">
                    
                    <section class="scroll-mt-28" id="intro">
                        <div
                            class="bg-white dark:bg-[#1a2632] p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-800">
                            <h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center size-8 rounded-full bg-gray-100 dark:bg-gray-700 text-sm">1</span>
                                Introducción
                            </h2>
                            <p class="text-text-sub dark:text-gray-300 leading-relaxed">
                                Bienvenido a {{ config('services.vars.appName') }}. Al acceder o utilizar nuestro sitio web, servicios o herramientas, usted acepta estar sujeto a estos Términos y condiciones. Si no está de acuerdo con alguna parte de estos términos, tiene prohibido utilizar nuestros servicios. Nos reservamos el derecho de revisar y enmendar cualquiera de estos Términos y condiciones a nuestra entera discreción.
                            </p>
                        </div>
                    </section>

                    <section class="scroll-mt-28" id="user-responsibility">
                        <div
                            class="bg-white dark:bg-[#1a2632] p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-800 relative overflow-hidden group">
                            <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                                <span class="material-symbols-outlined text-8xl text-primary">person_check</span>
                            </div>
                            <h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center size-8 rounded-full bg-gray-100 dark:bg-gray-700 text-sm">2</span>
                                Responsabilidad del usuario
                            </h2>
                            <p class="text-text-sub dark:text-gray-300 leading-relaxed mb-6">
                                Usted acepta utilizar el servicio únicamente para los fines permitidos por estos Términos y cualquier ley, reglamento o práctica o directriz generalmente aceptada en las jurisdicciones pertinentes.
                            </p>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3 text-text-sub dark:text-gray-300">
                                    <span class="material-symbols-outlined text-primary mt-0.5 text-lg">check_circle</span>
                                    <span>Usted es el único responsable de cualquier contenido que descargue utilizando nuestra herramienta.</span>
                                </li>
                                <li class="flex items-start gap-3 text-text-sub dark:text-gray-300">
                                    <span class="material-symbols-outlined text-primary mt-0.5 text-lg">check_circle</span>
                                    <span>Usted acepta no utilizar el contenido descargado para fines ilegales, infracción de derechos de autor o distribución comercial sin el consentimiento explícito del creador.</span>
                                </li>
                                <li class="flex items-start gap-3 text-text-sub dark:text-gray-300">
                                    <span class="material-symbols-outlined text-primary mt-0.5 text-lg">check_circle</span>
                                    <span>Usted no debe utilizar este servicio para descargar contenido que represente actos ilegales, violencia o abuso.</span>
                                </li>
                            </ul>
                        </div>
                    </section>
                    
                    <section class="scroll-mt-28" id="intellectual-property">
                        <div
                            class="bg-white dark:bg-[#1a2632] p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-800">
                            <h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center size-8 rounded-full bg-gray-100 dark:bg-gray-700 text-sm">3</span>
                                Derechos de propiedad intelectual
                            </h2>
                            <p class="text-text-sub dark:text-gray-300 leading-relaxed mb-4">
                                No reclamamos la propiedad de ningún contenido descargado a través de nuestra plataforma. Todos los derechos, incluidos los derechos de autor y los derechos de propiedad intelectual, pertenecen a sus respectivos propietarios (los creadores de contenido y TikTok/ByteDance).
                            </p>
                            <div
                                class="p-4 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-100 dark:border-yellow-800/30 rounded-xl">
                                <p class="text-yellow-800 dark:text-yellow-200 text-sm font-medium flex items-center gap-2">
                                    <span class="material-symbols-outlined">warning</span>
                                    Importante: Esta herramienta es estrictamente para uso personal.
                                </p>
                            </div>
                        </div>
                    </section>
                    
                    <section class="scroll-mt-28" id="service-availability">
                        <div
                            class="bg-white dark:bg-[#1a2632] p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-800">
                            <h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center size-8 rounded-full bg-gray-100 dark:bg-gray-700 text-sm">4</span>
                                Disponibilidad del servicio
                            </h2>
                            <p class="text-text-sub dark:text-gray-300 leading-relaxed">
                                Nos esforzamos por ofrecer un servicio ininterrumpido, pero no garantizamos que nuestro servicio esté disponible en todo momento. Nos reservamos el derecho de modificar, suspender o interrumpir cualquier parte del servicio en cualquier momento sin previo aviso. No somos responsables de ninguna pérdida causada por interrupciones o errores del servicio.
                            </p>
                        </div>
                    </section>
                    
                    <section class="scroll-mt-28" id="limitation-liability">
                        <div
                            class="bg-red-50/50 dark:bg-red-900/10 p-8 rounded-2xl border border-red-100 dark:border-red-900/30">
                            <h2 class="text-2xl font-bold text-red-900 dark:text-red-200 mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center size-8 rounded-full bg-red-100 dark:bg-red-900/40 text-sm">5</span>
                                Limitación de responsabilidad
                            </h2>
                            <p class="text-[#111418] dark:text-gray-200 leading-relaxed font-medium">
                                En la medida máxima permitida por la ley, {{ config('services.vars.appName') }} no será responsable de ningún daño indirecto, incidental, especial, consecuente o punitivo, ni de ninguna pérdida de beneficios o ingresos, ya sea incurrida directa o indirectamente, ni de ninguna pérdida de datos, uso, fondo de comercio u otras pérdidas intangibles, que resulten de:
                            </p>
                            <ul class="mt-4 space-y-2 list-disc list-inside text-text-sub dark:text-gray-400">
                                <li>Su acceso o uso, o la imposibilidad de acceder o utilizar los servicios.</li>
                                <li>Cualquier conducta o contenido de cualquier tercero en los servicios.</li>
                                <li>Cualquier contenido obtenido de los servicios.</li>
                            </ul>
                        </div>
                    </section>
                    
                    <section class="scroll-mt-28" id="third-party">
                        <div
                            class="bg-white dark:bg-[#1a2632] p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-800">
                            <h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center size-8 rounded-full bg-gray-100 dark:bg-gray-700 text-sm">6</span>
                                Enlace de terceros &amp; Ads
                            </h2>
                            <p class="text-text-sub dark:text-gray-300 leading-relaxed">
                               Nuestro Servicio puede contener enlaces a sitios web o servicios de terceros que no son propiedad ni están controlados por {{ config('services.vars.appName') }}. No tenemos control sobre, ni asumimos ninguna responsabilidad por, el contenido, las políticas de privacidad o las prácticas de los sitios web o servicios de terceros. Usted reconoce y acepta que no seremos responsables, directa o indirectamente, por cualquier daño o pérdida causada por o en relación con el uso de dicho contenido, bienes o servicios disponibles en o a través de dichos sitios web o servicios.
                            </p>
                        </div>
                    </section>
                </div>
            </article>
        </div>
    </div>
@endsection