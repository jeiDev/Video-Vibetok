@extends('layouts.app')

@section('title', 'Descargar Videos de TikTok Gratis y Rápido - Sin Marca de Agua')

@section('meta-description', 'Descarga videos de TikTok gratis y rápido sin marca de agua. Obtén MP4 de alta calidad en segundos. Herramienta gratuita y segura para descargar contenido de TikTok sin registro.')

@section('meta-keywords', 'descargar videos tiktok gratis, descarga rapida tiktok, tiktok downloader, videos tiktok sin marca de agua, descargar mp4 tiktok, downloader tiktok gratis, tiktok video download, descargar tiktok hd')

@section('content')
    <div class="flex flex-1 justify-center py-10 px-4 bg-gradient-to-b from-white to-[#f0f9ff]" id="container-download">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1 items-center text-center gap-8">
            <div class="flex flex-col gap-4 max-w-[720px]">
                <h1 class="text-[#111418] text-4xl font-black leading-tight tracking-[-0.033em] md:text-5xl lg:text-6xl">
                    Descargar videos de TikTok sin marca de agua
                </h1>
                <h2 class="text-[#60758a] text-lg font-normal leading-normal md:text-xl">
                    Descargas de MP4 rápidas, gratuitas y de alta calidad. Solo pega el enlace abajo.
                </h2>
            </div>

            <div class="w-full max-w-[600px] mt-4">
                <label class="flex flex-col w-full relative group">
                    <div
                        class="flex w-full items-center rounded-full bg-white shadow-lg border border-[#dbe0e6] p-2 focus-within:border-primary focus-within:ring-4 focus-within:ring-primary/20 transition-all duration-300">
                        <div class="text-[#60758a] pl-4 flex items-center justify-center">
                            <span class="material-symbols-outlined">link</span>
                        </div>
                        <input id="tiktok-url"
                            class="flex w-full min-w-0 flex-1 resize-none bg-transparent border-none text-[#111418] focus:outline-none focus:ring-0 h-14 placeholder:text-[#9ca3af] px-4 text-base font-normal leading-normal"
                            placeholder="Pega el enlace de TikTok aquí..." value="" />

                        <button
                            class="btn-download flex min-w-[120px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-6 bg-[#22c55e] hover:bg-[#16a34a] text-white text-base font-bold leading-normal tracking-[0.015em] shadow-md hover:shadow-lg transition-all transform active:scale-95">
                            <span class="truncate mr-2">Descargar</span>
                            <span class="material-symbols-outlined text-[20px]">download</span>
                        </button>
                    </div>
                </label>
                <div id="container-message"
                    class="hidden w-full bg-red-50 border border-red-100 rounded-2xl p-4 flex flex-col sm:flex-row items-center justify-between gap-4 animate-in fade-in slide-in-from-top-2 duration-300">
                    <div class="flex items-center gap-3 text-left">
                        <div
                            class="size-10 flex-shrink-0 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined">error</span>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-red-800 text-sm font-semibold" id="status-text"></p>
                            <p class="text-red-700/80 text-xs">Por favor, comprueba la URL e inténtalo de nuevo.</p>
                        </div>
                    </div>
                    <button
                        class="btn-download flex items-center justify-center gap-2 px-4 py-2 bg-white border border-red-200 text-red-700 hover:bg-red-50 text-sm font-bold rounded-full transition-colors shadow-sm whitespace-nowrap">
                        <span class="material-symbols-outlined text-lg">refresh</span>
                        <span>Intentar de nuevo</span>
                    </button>
                </div>
                <div class="flex items-center justify-center gap-2 mt-3 text-sm text-[#60758a]">
                    <span class="material-symbols-outlined text-[16px] text-[#22c55e]">check_circle</span>
                    <span>100% Seguro &amp; Gratuito</span>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-1 justify-center py-20 px-4 bg-gradient-to-b from-white to-[#f0f9ff] hidden"
        id="container-loading">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1 items-center text-center gap-12">
            <div class="flex flex-col gap-4 max-w-[720px]">
                <h1 class="text-[#111418] text-4xl font-black leading-tight tracking-[-0.033em] md:text-5xl lg:text-6xl">
                    Obteniendo tu video
                </h1>
            </div>
            <div class="flex flex-col items-center justify-center gap-8 py-10">
                <div class="relative flex items-center justify-center">
                    <div class="absolute size-32 rounded-full bg-accent-green/20 blur-xl"></div>
                    <div class="relative size-32 rounded-full border-4 border-gray-100 flex items-center justify-center">
                        <span class="material-symbols-outlined text-accent-green text-5xl">movie</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-[#111418] text-2xl font-bold tracking-tight">Procesando tu video...</p>
                    <p class="text-[#60758a] text-lg">Por favor espera un momento mientras eliminamos la marca de agua.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="flex justify-center w-full bg-white py-8 px-4">
        <div
            class="w-full max-w-[960px] h-[90px] bg-[#f0f2f5] border border-[#dbe0e6] border-dashed rounded-xl flex items-center justify-center relative overflow-hidden">
            <div class="absolute inset-0 flex items-center justify-center">
                <p class="text-[#9ca3af] text-sm font-medium tracking-wider uppercase">Espacio publicitario (728x90)</p>
            </div>
        </div>
    </div> -->

    <div class="flex justify-center bg-white py-12 px-4 border-t border-[#f0f2f5]">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-col gap-10">
                <div class="text-center">
                    <h2 class="text-[#111418] text-3xl font-bold leading-tight tracking-tight mb-2">Cómo Descargar</h2>
                    <p class="text-[#60758a] text-base">Obtén tu video en 3 simples pasos</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        class="flex flex-col items-center text-center gap-4 p-6 rounded-2xl bg-[#f8fafc] border border-[#f0f2f5] hover:border-primary/30 transition-colors">
                        <div
                            class="size-14 rounded-full bg-white border border-[#e5e7eb] flex items-center justify-center shadow-sm text-primary">
                            <span class="material-symbols-outlined text-[28px]">content_copy</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#111418] text-lg font-bold">1. Copiar enlace</h3>
                            <p class="text-[#60758a] text-sm leading-relaxed">Encuentra el video de TikTok que quieres
                                guardar y copia su URL desde el menú de compartir.</p>
                        </div>
                    </div>

                    <div
                        class="flex flex-col items-center text-center gap-4 p-6 rounded-2xl bg-[#f8fafc] border border-[#f0f2f5] hover:border-primary/30 transition-colors">
                        <div
                            class="size-14 rounded-full bg-white border border-[#e5e7eb] flex items-center justify-center shadow-sm text-primary">
                            <span class="material-symbols-outlined text-[28px]">input</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#111418] text-lg font-bold">2. Pegar enlace</h3>
                            <p class="text-[#60758a] text-sm leading-relaxed">Pega el enlace en el campo de entrada en la
                                parte superior de esta página.</p>
                        </div>
                    </div>

                    <div
                        class="flex flex-col items-center text-center gap-4 p-6 rounded-2xl bg-[#f8fafc] border border-[#f0f2f5] hover:border-primary/30 transition-colors">
                        <div
                            class="size-14 rounded-full bg-white border border-[#e5e7eb] flex items-center justify-center shadow-sm text-primary">
                            <span class="material-symbols-outlined text-[28px]">download_for_offline</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#111418] text-lg font-bold">3. Descargar</h3>
                            <p class="text-[#60758a] text-sm leading-relaxed">Haz clic en el botón de descarga y elige tu
                                formato preferido.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center bg-[#f9fafb] py-16 px-4">
        <div class="layout-content-container flex flex-col lg:flex-row gap-8 max-w-[960px] flex-1">
            <div class="flex-1 flex flex-col gap-8">
                <h2 class="text-[#111418] text-2xl font-bold leading-tight">¿Por qué usar nuestro Descargador?</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex gap-4 p-4 rounded-xl bg-white border border-[#e5e7eb] shadow-sm">
                        <div class="text-primary mt-1">
                            <span class="material-symbols-outlined text-[24px]">water_drop</span>
                        </div>
                        <div>
                            <h3 class="text-[#111418] font-bold text-base mb-1">Sin marca de agua</h3>
                            <p class="text-[#60758a] text-sm">Videos limpios sin el logo de TikTok o la superposición del
                                nombre de usuario.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 p-4 rounded-xl bg-white border border-[#e5e7eb] shadow-sm">
                        <div class="text-primary mt-1">
                            <span class="material-symbols-outlined text-[24px]">hd</span>
                        </div>
                        <div>
                            <h3 class="text-[#111418] font-bold text-base mb-1">Calidad HD</h3>
                            <p class="text-[#60758a] text-sm">Preservamos la calidad original del video subido.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 p-4 rounded-xl bg-white border border-[#e5e7eb] shadow-sm">
                        <div class="text-primary mt-1">
                            <span class="material-symbols-outlined text-[24px]">block</span>
                        </div>
                        <div>
                            <h3 class="text-[#111418] font-bold text-base mb-1">Sin registro</h3>
                            <p class="text-[#60758a] text-sm">Completamente gratis para usar sin necesidad de registro o
                                inicio de sesión.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 p-4 rounded-xl bg-white border border-[#e5e7eb] shadow-sm">
                        <div class="text-primary mt-1">
                            <span class="material-symbols-outlined text-[24px]">all_inclusive</span>
                        </div>
                        <div>
                            <h3 class="text-[#111418] font-bold text-base mb-1">Ilimitado</h3>
                            <p class="text-[#60758a] text-sm">Descarga tantos videos como quieras, cuando quieras.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="w-full lg:w-[300px] flex-shrink-0 flex flex-col gap-4">
                <div
                    class="w-full aspect-square bg-white border border-[#dbe0e6] rounded-xl flex items-center justify-center relative overflow-hidden shadow-sm">
                    <div class="absolute inset-0 bg-gray-50 flex flex-col items-center justify-center p-4 text-center">
                        <span class="material-symbols-outlined text-[#cbd5e1] text-[48px] mb-2">ads_click</span>
                        <p class="text-[#9ca3af] text-xs font-medium uppercase tracking-widest">Patrocinado</p>
                    </div>

                    <div class="absolute bottom-2 right-2 px-2 py-0.5 bg-gray-200 text-[10px] text-gray-500 rounded">
                        Ad</div>
                </div>
                <div class="p-4 bg-primary/5 rounded-xl border border-primary/10">
                    <h4 class="font-bold text-sm text-[#111418] mb-1">Consejo profesional</h4>
                    <p class="text-xs text-[#60758a]">También puedes descargar solo el audio MP3 si solo quieres la música!
                    </p>
                </div>
            </div> -->
        </div>
    </div>
@endsection

@push('scripts')
    <script type="module">
        document.addEventListener('DOMContentLoaded', () => {
            const input = document.getElementById('tiktok-url');
            const btnDownload = document.getElementById('btn-download');
            const statusText = document.getElementById('status-text');
            const containerDownload = document.getElementById('container-download');
            const containerLoading = document.getElementById('container-loading')
            const containerMessage = document.getElementById('container-message');

            Array.from(document.querySelectorAll(".btn-download") || []).forEach(btnDownload => {

                btnDownload.addEventListener('click', async () => {
                    const videoUrl = input.value.trim();
                    if (!videoUrl) return alert("Pega una URL válida");

                    containerMessage.classList.add("hidden")
                    statusText.innerText = ''
                    containerDownload.classList.add("hidden")
                    containerLoading.classList.remove("hidden")


                    try {
                        const response = await fetch("{{ route('download') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                video_url: videoUrl
                            })
                        });

                        const data = await response.json();

                        if (!response.ok) throw new Error(data.message);

                        const taskId = data.task_id;

                        if (window.Echo) {
                            statusText.innerText = "Video en cola. Esperando respuesta del servidor...";

                            window.Echo.channel(`download.${taskId}`)
                                .listen('.status.updated', (e) => {
                                    if (e.status === 'completed') {
                                        location.href = "{{ route('view-download', ':id') }}".replace(':id', e.taskId);
                                    } else {
                                        containerLoading.classList.add("hidden")
                                        containerDownload.classList.remove("hidden")
                                        containerMessage.classList.remove("hidden")
                                        statusText.innerText = "Error al procesar el video.";
                                    }
                                });
                        }
                    } catch (error) {
                        containerLoading.classList.add("hidden")
                        containerDownload.classList.remove("hidden")
                        containerMessage.classList.remove("hidden")
                        statusText.innerText = `${error.message || ""}`.split("(")[0];
                    }
                });
            })
        });
    </script>
@endpush