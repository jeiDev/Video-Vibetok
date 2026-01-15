@extends('layouts.app')

@section('title', 'Aviso Legal')

@section('content')
    <div class="layout-container flex h-full grow flex-col py-10">
        <div class="px-5 md:px-10 lg:px-40 flex flex-1 justify-center">
            <div class="layout-content-container flex flex-col max-w-[800px] flex-1 gap-8">
                <div class="flex flex-col gap-4 text-center items-center">
                    <div class="inline-flex items-center justify-center p-3 rounded-full bg-primary/10 text-primary mb-2">
                        <span class="material-symbols-outlined !text-3xl">gavel</span>
                    </div>
                    <h1
                        class="text-[#111418] dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">Aviso Legal</h1>
                    <p class="text-[#60758a] dark:text-gray-400 text-lg font-normal leading-normal max-w-[600px]">
                       Por favor, lea cuidadosamente la siguiente información legal sobre el uso de nuestros servicios.
                        La transparencia y el cumplimiento son nuestras principales prioridades.
                    </p>
                </div>
                
                <div
                    class="rounded-xl bg-gradient-to-br from-primary/10 to-blue-50 dark:from-primary/20 dark:to-[#1a2c3d] p-8 border border-primary/20 shadow-sm relative overflow-hidden">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-primary/20 rounded-full blur-2xl"></div>
                    <div class="relative z-10 flex flex-col md:flex-row gap-6 items-start md:items-center">
                        <div
                            class="shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-white dark:bg-gray-800 text-primary shadow-sm">
                            <span class="material-symbols-outlined">link_off</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#111418] dark:text-white text-xl font-bold leading-tight">Aviso de No Afiliación</h3>
                            <p class="text-[#111418]/80 dark:text-gray-200 text-base font-medium leading-relaxed">
                                No estamos afiliados, asociados, autorizados, respaldados ni de ninguna manera conectados oficialmente con TikTok, ByteDance o cualquiera de sus subsidiarias o afiliadas. El sitio web oficial de TikTok se puede encontrar en tiktok.com.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col gap-4">
                    <!-- Item 1 -->
                    <details
                        class="group flex flex-col rounded-xl border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2633] overflow-hidden transition-all duration-300"
                        open="">
                        <summary
                            class="flex cursor-pointer items-center justify-between gap-6 p-6 select-none bg-white dark:bg-[#1a2633] transition-colors hover:bg-gray-50 dark:hover:bg-[#202e3d]">
                            <div class="flex items-center gap-4">
                                <span class="material-symbols-outlined text-primary">copyright</span>
                                <p class="text-[#111418] dark:text-white text-lg font-bold leading-normal">Derechos de Propiedad Intelectual</p>
                            </div>
                            <div
                                class="text-[#111418] dark:text-white transition-transform duration-300 group-open:rotate-180 flex items-center">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </summary>
                        <div class="px-6 pb-6 pt-2">
                            <p class="text-[#60758a] dark:text-gray-400 text-base font-normal leading-relaxed">
                                Todos los nombres de productos y empresas son marcas comerciales™ o marcas registradas® de sus respectivos propietarios.
                                El uso de los mismos no implica ninguna afiliación ni respaldo por parte de ellos.
                                Respetamos los derechos de propiedad intelectual de terceros.
                                Los usuarios son responsables de asegurarse de tener el derecho de descargar y utilizar el contenido al que acceden a través de nuestro servicio.
                            </p>
                        </div>
                    </details>
                    
                    <details
                        class="group flex flex-col rounded-xl border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2633] overflow-hidden transition-all duration-300">
                        <summary
                            class="flex cursor-pointer items-center justify-between gap-6 p-6 select-none bg-white dark:bg-[#1a2633] transition-colors hover:bg-gray-50 dark:hover:bg-[#202e3d]">
                            <div class="flex items-center gap-4">
                                <span class="material-symbols-outlined text-primary">verified_user</span>
                                <p class="text-[#111418] dark:text-white text-lg font-bold leading-normal">Responsabilidad &amp; Obligaciones del Usuario</p>
                            </div>
                            <div
                                class="text-[#111418] dark:text-white transition-transform duration-300 group-open:rotate-180 flex items-center">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </summary>
                        <div class="px-6 pb-6 pt-2">
                            <p class="text-[#60758a] dark:text-gray-400 text-base font-normal leading-relaxed">
                                Al utilizar este servicio, usted acepta que es el único responsable del uso que haga del contenido descargado.
                                El servicio se proporciona únicamente para uso personal y con fines educativos.
                                Cualquier uso comercial o redistribución del contenido descargado sin el permiso del titular de los derechos de autor está estrictamente prohibido y puede violar las leyes locales.
                            </p>
                        </div>
                    </details>
                    
                    <details
                        class="group flex flex-col rounded-xl border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2633] overflow-hidden transition-all duration-300">
                        <summary
                            class="flex cursor-pointer items-center justify-between gap-6 p-6 select-none bg-white dark:bg-[#1a2633] transition-colors hover:bg-gray-50 dark:hover:bg-[#202e3d]">
                            <div class="flex items-center gap-4">
                                <span class="material-symbols-outlined text-primary">rule</span>
                                <p class="text-[#111418] dark:text-white text-lg font-bold leading-normal">Uso del Servicio &amp; Limitaciones</p>
                            </div>
                            <div
                                class="text-[#111418] dark:text-white transition-transform duration-300 group-open:rotate-180 flex items-center">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </summary>
                        <div class="px-6 pb-6 pt-2">
                            <p class="text-[#60758a] dark:text-gray-400 text-base font-normal leading-relaxed">
                                No alojamos ningún contenido con derechos de autor en nuestros servidores.
                                Todas las descargas se obtienen directamente de los servidores CDN correspondientes de la plataforma original.
                                Nos reservamos el derecho de modificar, suspender o descontinuar el servicio en cualquier momento sin previo aviso.
                            </p>
                        </div>
                    </details>
                    
                    <details
                        class="group flex flex-col rounded-xl border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2633] overflow-hidden transition-all duration-300">
                        <summary
                            class="flex cursor-pointer items-center justify-between gap-6 p-6 select-none bg-white dark:bg-[#1a2633] transition-colors hover:bg-gray-50 dark:hover:bg-[#202e3d]">
                            <div class="flex items-center gap-4">
                                <span class="material-symbols-outlined text-primary">warning</span>
                                <p class="text-[#111418] dark:text-white text-lg font-bold leading-normal">Sin Garantía &amp; Límite de Responsabilidad</p>
                            </div>
                            <div
                                class="text-[#111418] dark:text-white transition-transform duration-300 group-open:rotate-180 flex items-center">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </summary>
                        <div class="px-6 pb-6 pt-2">
                            <p class="text-[#60758a] dark:text-gray-400 text-base font-normal leading-relaxed">
                                EL SERVICIO SE PROPORCIONA "TAL CUAL" Y "SEGÚN DISPONIBILIDAD".
                                No ofrecemos garantías, expresas ni implícitas, respecto a la fiabilidad, exactitud o disponibilidad del servicio.
                                En ningún caso seremos responsables de los daños que surjan del uso o la imposibilidad de usar el servicio.
                            </p>
                        </div>
                    </details>
                </div>
                
                <div class="w-full h-32 rounded-xl bg-cover bg-center overflow-hidden relative mt-4"
                    data-alt="Abstract blue gradient geometric pattern representing digital law"
                    style="background-image: linear-gradient(135deg, rgba(37, 140, 244, 0.1) 0%, rgba(37, 140, 244, 0.05) 100%);">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <p class="text-primary font-bold tracking-widest uppercase text-sm opacity-60">Transparencia • Seguridad • Privacidad</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection