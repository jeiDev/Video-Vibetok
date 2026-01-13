@extends('layouts.app')

@section('title', 'Cómo utilizar')

@section('content')
    <div class="flex-1 flex flex-col items-center py-10 px-4 md:px-10 lg:px-40 gap-12 w-full max-w-7xl mx-auto">
        <section class="flex flex-col items-center text-center max-w-[800px] gap-6 animate-fade-in-up">
            <span
                class="bg-blue-100 dark:bg-blue-900/30 text-primary px-4 py-1.5 rounded-full text-sm font-bold tracking-wide uppercase">Guía del usuario</span>
            <h1
                class="text-4xl md:text-5xl lg:text-6xl font-black leading-[1.1] tracking-[-0.033em] text-slate-900 dark:text-white">
                Cómo descargar TikToks <span class="text-primary">sin marcas de agua</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-600 dark:text-slate-400 font-normal leading-relaxed max-w-[640px]">
                Nuestra herramienta es rápida, gratuita e increíblemente sencilla. Sigue esta guía para guardar videos MP4 de alta calidad en tu dispositivo en segundos.
            </p>
        </section>
        
        <div
            class="w-full max-w-[728px] h-[90px] bg-slate-200 dark:bg-slate-800 rounded-lg flex flex-col items-center justify-center border-2 border-dashed border-slate-300 dark:border-slate-700">
            <span
                class="text-xs font-bold uppercase tracking-widest text-slate-400 dark:text-slate-500 mb-1">Publicidad</span>
            <span class="text-sm text-slate-500 dark:text-slate-400">Anuncio de cabecera (728x90)</span>
        </div>
        
        <section class="w-full grid grid-cols-1 md:grid-cols-3 gap-8 relative mt-8">
            <div
                class="hidden md:block absolute top-[88px] left-[16%] right-[16%] h-[2px] bg-slate-200 dark:bg-slate-800 -z-10">
            </div>
            
            <div class="flex flex-col items-center text-center gap-6 group">
                <div class="relative">
                    <div
                        class="w-44 h-44 rounded-full bg-white dark:bg-[#1A2633] shadow-lg flex items-center justify-center border border-slate-100 dark:border-slate-800 z-10 transition-transform duration-300 group-hover:scale-105">
                        <span class="material-symbols-outlined text-primary text-[64px]">link</span>
                    </div>
                    <div
                        class="absolute -top-2 -right-2 bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg shadow-md border-4 border-background-light dark:border-background-dark">
                        1</div>
                </div>
                <div class="flex flex-col gap-2 px-4">
                    <h2 class="text-xl font-bold text-slate-900 dark:text-white">Copiar el enlace</h2>
                    <p class="text-slate-600 dark:text-slate-400 text-base leading-relaxed">
                        Abre la aplicación TikTok, busca el video que quieres guardar. Toca el botón "Compartir" y selecciona
                        <strong>"Copiar enlace"</strong>.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col items-center text-center gap-6 group">
                <div class="relative">
                    <div
                        class="w-44 h-44 rounded-full bg-white dark:bg-[#1A2633] shadow-lg flex items-center justify-center border border-slate-100 dark:border-slate-800 z-10 transition-transform duration-300 group-hover:scale-105">
                        <span class="material-symbols-outlined text-primary text-[64px]">content_paste_go</span>
                    </div>
                    <div
                        class="absolute -top-2 -right-2 bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg shadow-md border-4 border-background-light dark:border-background-dark">
                        2</div>
                </div>
                <div class="flex flex-col gap-2 px-4">
                    <h2 class="text-xl font-bold text-slate-900 dark:text-white">Pegar la URL</h2>
                    <p class="text-slate-600 dark:text-slate-400 text-base leading-relaxed">
                        Vuelve a SnapTik Clone, pega el enlace en el campo de texto en la parte superior de la página y pulsa el
                        <strong>"Botón"</strong> de descarga.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col items-center text-center gap-6 group">
                <div class="relative">
                    <div
                        class="w-44 h-44 rounded-full bg-white dark:bg-[#1A2633] shadow-lg flex items-center justify-center border border-slate-100 dark:border-slate-800 z-10 transition-transform duration-300 group-hover:scale-105">
                        <span class="material-symbols-outlined text-primary text-[64px]">download_for_offline</span>
                    </div>
                    <div
                        class="absolute -top-2 -right-2 bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg shadow-md border-4 border-background-light dark:border-background-dark">
                        3</div>
                </div>
                <div class="flex flex-col gap-2 px-4">
                    <h2 class="text-xl font-bold text-slate-900 dark:text-white">Guardar video</h2>
                    <p class="text-slate-600 dark:text-slate-400 text-base leading-relaxed">
                        Espera unos segundos para que nuestros servidores procesen el video. Luego, elige tu formato preferido para guardarlo al instante.
                    </p>
                </div>
            </div>
        </section>
        
        <div
            class="w-full max-w-[960px] h-[250px] bg-slate-200 dark:bg-slate-800 rounded-lg flex flex-col items-center justify-center border-2 border-dashed border-slate-300 dark:border-slate-700 my-8">
            <span
                class="text-xs font-bold uppercase tracking-widest text-slate-400 dark:text-slate-500 mb-1">Publicidad</span>
            <span class="text-sm text-slate-500 dark:text-slate-400">Anuncio Billboard (970x250)</span>
        </div>
        
        <section class="w-full max-w-4xl flex flex-col gap-12 text-left">
            <div
                class="bg-white dark:bg-[#1A2633] p-8 md:p-12 rounded-xl border border-slate-100 dark:border-slate-800 shadow-sm">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white mb-6">¿Por qué descargar TikToks sin marcas de agua?</h2>
                <div class="space-y-4 text-slate-600 dark:text-slate-400 text-lg leading-relaxed">
                    <p>
                        TikTok añade automáticamente una marca de agua que contiene el nombre de usuario del creador y el logo de TikTok a cada video descargado. Aunque esto ayuda con la atribución, puede ser molesto si quieres conservar una copia limpia de tu propio contenido, crear recopilaciones o compartir videos en otras plataformas que podrían penalizar el contenido reciclado con logos visibles.
                    </p>
                    <p>
                        Nuestra herramienta elimina esta marca de agua accediendo al archivo de origen del video original, ofreciéndote un archivo MP4 limpio y de alta definición que se ve exactamente como en la aplicación, pero sin distracciones.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="bg-white dark:bg-[#1A2633] p-8 rounded-xl border border-slate-100 dark:border-slate-800 shadow-sm">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="material-symbols-outlined text-primary">smartphone</span>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">Funciona en todos los dispositivos</h3>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                       Ya sea que estés usando un iPhone, Android, iPad, tableta o PC, nuestro descargador funciona directamente en tu navegador. No se requiere la instalación de ningún software.
                    </p>
                </div>
                <div
                    class="bg-white dark:bg-[#1A2633] p-8 rounded-xl border border-slate-100 dark:border-slate-800 shadow-sm">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="material-symbols-outlined text-primary">hd</span>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">Soporte de calidad HD</h3>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                       No comprimimos tus videos. Si el video original se subió en HD, proporcionamos el enlace de descarga para la máxima calidad disponible.
                    </p>
                </div>
            </div>
        </section>

        <section class="w-full max-w-4xl mt-4">
            <div
                class="bg-blue-50 dark:bg-blue-900/20 border border-blue-100 dark:border-blue-900/50 rounded-xl p-6 md:p-8 flex flex-col md:flex-row gap-6 items-start">
                <div class="shrink-0 bg-blue-100 dark:bg-blue-800 p-3 rounded-full text-primary dark:text-blue-200">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Política de Uso Responsable</h3>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                        Respeta los derechos de propiedad intelectual. Solo debes descargar videos que te pertenezcan, o videos que cumplan con la licencia "Creative Commons". No fomentamos la descarga de material con derechos de autor sin el permiso del propietario.
                    </p>
                </div>
            </div>
        </section>
        
        <section class="w-full py-10 flex flex-col items-center gap-6">
            <h2 class="text-2xl font-bold text-slate-900 dark:text-white text-center">¿Listo para empezar?</h2>
            <button
                class="bg-primary hover:bg-blue-600 text-white font-bold text-lg px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all flex items-center gap-2 group">
                <a 
                    href="{{ route('home') }}"
                >
                        <span>Ir al descargador</span>
                </a>
                
                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </button>
        </section>
    </div>
@endsection