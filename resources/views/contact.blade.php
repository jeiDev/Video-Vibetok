@extends('layouts.app')

@section('title', 'Contactanos')

@section('content')
    <div class="flex-grow flex flex-col items-center py-10 px-4 md:px-10">
        <div class="w-full max-w-[1000px] flex flex-col gap-10">
            <div class="text-center space-y-4">
                <h1 class="text-slate-900 dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-tight">
                    Contactar con soporte
                </h1>
                <p class="text-slate-500 dark:text-slate-400 text-lg md:text-xl font-normal max-w-2xl mx-auto">
                    ¿Tiene algún problema? Estamos aquí para ayudarle. <br class="hidden md:block" /> Nuestro equipo suele responder en menos de
                    within <span class="text-primary font-semibold">24 horas</span>.
                </p>
            </div>
            
            <div class="bg-white dark:bg-slate-900 rounded-lg p-6 shadow-sm border border-slate-100 dark:border-slate-800">
                <h2
                    class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-tight mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">help</span>
                    Consulte nuestras preguntas frecuentes para obtener respuestas al instante
                </h2>
                <div class="flex flex-wrap gap-3">
                    <a class="group flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 dark:bg-slate-800 hover:bg-primary/10 dark:hover:bg-primary/20 hover:ring-1 ring-primary transition-all pl-4 pr-5 cursor-pointer"
                        href="#">
                        <span
                            class="material-symbols-outlined text-base text-slate-500 dark:text-slate-400 group-hover:text-primary">error</span>
                        <p class="text-slate-700 dark:text-slate-300 text-sm font-medium group-hover:text-primary">
                            Descarga fallida</p>
                    </a>
                    <a class="group flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 dark:bg-slate-800 hover:bg-primary/10 dark:hover:bg-primary/20 hover:ring-1 ring-primary transition-all pl-4 pr-5 cursor-pointer"
                        href="#">
                        <span
                            class="material-symbols-outlined text-base text-slate-500 dark:text-slate-400 group-hover:text-primary">branding_watermark</span>
                        <p class="text-slate-700 dark:text-slate-300 text-sm font-medium group-hover:text-primary">
                            Problemas con la marca de agua</p>
                    </a>
                    <a class="group flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 dark:bg-slate-800 hover:bg-primary/10 dark:hover:bg-primary/20 hover:ring-1 ring-primary transition-all pl-4 pr-5 cursor-pointer"
                        href="#">
                        <span
                            class="material-symbols-outlined text-base text-slate-500 dark:text-slate-400 group-hover:text-primary">folder_open</span>
                        <p class="text-slate-700 dark:text-slate-300 text-sm font-medium group-hover:text-primary">
                            Ubicación de guardado</p>
                    </a>
                    <a class="group flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 dark:bg-slate-800 hover:bg-primary/10 dark:hover:bg-primary/20 hover:ring-1 ring-primary transition-all pl-4 pr-5 cursor-pointer"
                        href="#">
                        <span
                            class="material-symbols-outlined text-base text-slate-500 dark:text-slate-400 group-hover:text-primary">devices</span>
                        <p class="text-slate-700 dark:text-slate-300 text-sm font-medium group-hover:text-primary">
                            Dispositivos compatibles</p>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div
                    class="lg:col-span-2 bg-white dark:bg-slate-900 rounded-lg p-8 shadow-lg shadow-slate-200/50 dark:shadow-black/20 border border-slate-100 dark:border-slate-800">
                    <form class="flex flex-col gap-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <label class="flex flex-col gap-2">
                                <span class="text-slate-900 dark:text-white text-sm font-semibold ml-2">Nombre completo</span>
                                <div class="relative">
                                    <input
                                        class="w-full h-12 rounded-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-5 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                        placeholder="Ingrese su nombre completo" type="text" />
                                    <span
                                        class="material-symbols-outlined absolute right-4 top-3 text-slate-400 text-xl pointer-events-none">person</span>
                                </div>
                            </label>
                            <label class="flex flex-col gap-2">
                                <span class="text-slate-900 dark:text-white text-sm font-semibold ml-2">Correo electrónico</span>
                                <div class="relative">
                                    <input
                                        class="w-full h-12 rounded-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-5 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                        placeholder="you@example.com" type="email" />
                                    <span
                                        class="material-symbols-outlined absolute right-4 top-3 text-slate-400 text-xl pointer-events-none">mail</span>
                                </div>
                            </label>
                        </div>
                        <label class="flex flex-col gap-2">
                            <span class="text-slate-900 dark:text-white text-sm font-semibold ml-2">Asunto</span>
                            <div class="relative">
                                <select
                                    class="w-full h-12 rounded-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-5 text-slate-900 dark:text-white appearance-none focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all cursor-pointer">
                                    <option>Seleccione un tema...</option>
                                    <option>Problema de descarga</option>
                                    <option>Sugerencia de función</option>
                                    <option>Reporte de error</option>
                                    <option>Otro</option>
                                </select>
                                <span
                                    class="material-symbols-outlined absolute right-4 top-3 text-slate-400 text-xl pointer-events-none">expand_more</span>
                            </div>
                        </label>
                        <label class="flex flex-col gap-2">
                            <span class="text-slate-900 dark:text-white text-sm font-semibold ml-2">Mensaje</span>
                            <textarea
                                class="w-full min-h-[160px] rounded-3xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 p-5 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary resize-y transition-all"
                                placeholder="Describa su problema en detalle..."></textarea>
                            <div class="flex justify-end px-2">
                                <span class="text-xs text-slate-400 dark:text-slate-500">0 / 500 caracteres</span>
                            </div>
                        </label>
                        
                        <div
                            class="flex items-center gap-3 p-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl max-w-xs self-start">
                            <div
                                class="w-5 h-5 border-2 border-slate-300 dark:border-slate-600 rounded bg-white dark:bg-slate-900 cursor-pointer hover:border-primary transition-colors">
                            </div>
                            <span class="text-sm text-slate-600 dark:text-slate-300 select-none">No soy un robot</span>
                            <span class="material-symbols-outlined text-slate-400 ml-auto"
                                style="font-size: 20px;">security</span>
                        </div>
                        <button
                            class="mt-2 h-12 w-full md:w-auto self-start rounded-full bg-primary px-8 text-white font-bold text-sm hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 transition-all flex items-center justify-center gap-2 shadow-lg shadow-blue-500/30"
                            type="submit">
                            <span>Enviar mensaje</span>
                            <span class="material-symbols-outlined text-sm">send</span>
                        </button>
                    </form>
                </div>
                
                <div class="flex flex-col gap-6">
                    <div
                        class="bg-primary/5 dark:bg-slate-900 rounded-lg p-6 border border-primary/10 dark:border-slate-800">
                        <h3 class="text-slate-900 dark:text-white font-bold text-lg mb-4">Otras formas de conectar</h3>
                        <div class="flex flex-col gap-4">
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-white dark:bg-slate-800 flex items-center justify-center text-primary shadow-sm shrink-0">
                                    <span class="material-symbols-outlined">mail</span>
                                </div>
                                <div>
                                    <p
                                        class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-1">Envíenos un correo electrónico directamente</p>
                                    <a class="text-slate-900 dark:text-white font-medium hover:text-primary transition-colors break-all"
                                        href="mailto:support@tiktokdownloader.com">
                                        support@tiktokdownloader.com
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-white dark:bg-slate-800 flex items-center justify-center text-primary shadow-sm shrink-0">
                                    <span class="material-symbols-outlined">schedule</span>
                                </div>
                                <div>
                                    <p
                                        class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-1">
                                        Tiempo de respuesta</p>
                                    <p class="text-slate-900 dark:text-white font-medium">En un plazo de 24 horas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div
                        class="flex-1 min-h-[300px] bg-slate-200 dark:bg-slate-800 rounded-lg flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 border-2 border-dashed border-slate-300 dark:border-slate-700 p-4 relative overflow-hidden group">
                        <div
                            class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-gray-100 to-transparent">
                        </div>
                        <span class="material-symbols-outlined text-4xl mb-2">ads_click</span>
                        <span class="text-sm font-medium uppercase tracking-widest">Anuncio</span>
                        <span class="text-xs mt-2 text-center opacity-70">Apóyenos desactivando el bloqueador de anuncios</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection