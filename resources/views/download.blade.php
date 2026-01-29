@extends('layouts.app')

@section('title', 'Descarga tu Video de TikTok - MP4 Sin Marca de Agua')

@section('meta-description', 'Tu video de TikTok está listo para descargar. Obtén MP4 de alta calidad sin marca de agua en 1 clic. ¡Descarga ahora gratis!')

@section('meta-keywords', 'descargar tiktok, video descargado, tiktok mp4, sin marca de agua, descarga gratis')

@section('og-type', 'article')

@section('og-title', 'Descarga Completada - Tu Video de TikTok en MP4')

@section('og-description', 'Tu video de TikTok ha sido procesado exitosamente. Descargalo en alta calidad sin marca de agua.')

@section('og-image', url('/assets/img/og-image.png'))

@section('twitter-title', 'Descarga tu Video TikTok | Sin Marca de Agua')

@section('twitter-description', 'Tu video de TikTok está listo. Descargalo ahora en MP4 HD gratis.')

@section('twitter-image', url('/assets/img/twitter-image.png'))

@section('content')
    @php
        if (!function_exists('formatViews')) {
            function formatViews($number)
            {
                if ($number >= 1000000000) {
                    return round($number / 1000000000, 1) . 'B';
                } elseif ($number >= 1000000) {
                    return round($number / 1000000, 1) . 'M';
                } elseif ($number >= 1000) {
                    return round($number / 1000, 1) . 'K';
                }
                return $number;
            }
        }

        if (!function_exists('formatDuration')) {
            function formatDuration($seconds)
            {
                $hours = floor($seconds / 3600);
                $minutes = floor(($seconds % 3600) / 60);
                $secs = $seconds % 60;

                if ($hours > 0) {
                    return sprintf("%02d:%02d:%02d", $hours, $minutes, $secs);
                }
                return sprintf("%01d:%02d", $minutes, $secs);
            }
        }
    @endphp

    <div class="flex flex-1 justify-center py-8 px-4 md:px-6">
        <div class="flex flex-col max-w-[1080px] flex-1 gap-8">
            <!-- <div class="w-full flex justify-center">
                            <div
                                class="w-full max-w-[960px] h-24 bg-gray-200 dark:bg-gray-800 rounded-xl flex items-center justify-center relative overflow-hidden">
                                <span
                                    class="text-xs text-gray-400 absolute top-2 right-2 border border-gray-300 dark:border-gray-600 px-1 rounded">Ad</span>
                                <div class="w-full h-full bg-cover bg-center opacity-50"
                                    data-alt="abstract gray advertising banner pattern"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCMPFGKzL_c9Glb7Z74thgPiLhsHXrcizvo5Fk4dAxhLqHl3ErEVKWx2sfc1RpSLS4uOkP3MysOj530YcoXDcxXIMOUf3RT_o5LLJhtgQ605n3sA0JiVF0GbFIy-O3B3Md1jQ350rEbVm5YLwhb4mTL1-ioIRDLvdEIziGEFemI4dQTtlcNiuwDR8rMl3XHJmN1Yr4bH2fdQrO0YSvRYiUkxXSamPINNzn-1WY1V9lXe3fAAUJUGaPeICnWSezN_CZbdB1Y8AUvxdQ');">
                                </div>
                                <p class="absolute text-gray-500 dark:text-gray-400 font-medium">Espacio para anuncio de banner superior
                                </p>
                            </div>
                        </div> -->

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <div class="lg:col-span-5 flex flex-col gap-4">
                    <div
                        class="bg-white dark:bg-[#1a2632] p-4 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800">
                        <div class="flex flex-col gap-4">
                            <div
                                class="relative w-full aspect-[9/16] bg-gray-100 dark:bg-gray-900 rounded-xl overflow-hidden group">
                                <div id="videoThumb"
                                    class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-transform duration-700 group-hover:scale-105"
                                    data-alt="Vertical video thumbnail of a person dancing outdoors" style="
                                                      background-image: url('{{ route('download.thumbnail', ['id' => $id]) }}');

                                                        ">
                                </div>
                                <div class="absolute inset-0 bg-black/10"></div>
                                <div id="playButton"
                                    class="absolute center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm p-4 rounded-full cursor-pointer hover:bg-white/30 transition-all">
                                    <span class="material-symbols-outlined text-white text-4xl">play_arrow</span>
                                </div>
                                <div
                                    class="absolute bottom-3 right-3 bg-black/60 px-2 py-1 rounded-md text-white text-xs font-bold">
                                    {{ formatDuration($info['duration'] ?? 0) }}
                                </div>

                                <video id="videoPlayer" class="absolute inset-0 w-full h-full hidden rounded-xl" controls>
                                    <source src="{{ route('download.hd', ['id' => $id]) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="flex flex-col gap-2 px-1">
                                <h3
                                    class="text-[#111418] dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">
                                    {{$info['title']}}
                                </h3>
                                <div class="flex items-center justify-between text-[#60758a] dark:text-gray-400 text-sm">
                                    <div class="flex items-center gap-2">
                                        <div class="w-6 h-6 rounded-full bg-gray-200 dark:bg-gray-700 bg-cover bg-center"
                                            data-alt="User profile avatar"
                                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD1iiLQyZfrm9cb4jEgYZN4K5g4diyhO2I9iHHH56g7uuHkzpezS7Sz36ACXHX0hZ_pmHOYClVQtcGZVUBKmLWCgFQ1x4SGDP1-vJd8zF1szQysmDtKaaaLP6RanoPHePietwGiUhQdFKArUjji9F6TB8AHsbwGNqM7TSWIpb6Lh4w9ADR8a6wzSC8vSOVx-cmSZHqm2i88aoypBKFFOvPWUBvNmGysL13SROxuZzNmkLF_6KAcHq_dPdWD9DNOmQHGlnSl0gIWfKE')">
                                        </div>
                                        <a href={{$info['uploader']['profile']}} target="_blank">
                                            <span class="font-medium">{{ "@" }}{{$info['uploader']['name']}}</span>
                                        </a>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px]">visibility</span>
                                        <span>{{formatViews($info['stats']['views'] ?? 0)}} vistas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div
                                    class="lg:hidden w-full h-64 bg-gray-100 dark:bg-gray-800 rounded-xl flex items-center justify-center relative border border-dashed border-gray-300 dark:border-gray-700">
                                    <span
                                        class="text-xs text-gray-400 absolute top-2 right-2 bg-white dark:bg-black px-1 rounded">Ad</span>
                                    <p class="text-gray-400">Anuncio integrado para móviles</p>
                                </div> -->
                </div>

                <div class="lg:col-span-7 flex flex-col gap-6">

                    <div class="flex flex-col gap-2">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-green-500 text-3xl">check_circle</span>
                            <h1 class="text-[#111418] dark:text-white tracking-tight text-[32px] font-bold leading-tight">
                                ¡Tu Video de TikTok está Listo para Descargar!</h1>
                        </div>
                        <p class="text-[#60758a] dark:text-gray-400 text-base font-normal leading-normal">Elige el formato
                            que prefieres y comienza la descarga en <strong>alta calidad sin marca de agua</strong>.</p>
                    </div>

                    <div class="flex flex-col gap-4">
                        @if(!empty($info['files']['hd']))
                            <a href="{{ route('download.hd', ['id' => $id]) }}"
                                class="group relative flex w-full cursor-pointer items-center justify-between overflow-hidden rounded-full py-2 px-2 md:pr-6 bg-primary hover:bg-blue-600 transition-all text-white shadow-lg shadow-blue-500/30"
                                download>

                                <div class="flex items-center gap-2 md:gap-4 h-full">
                                    <div
                                        class="h-10 w-10 md:h-12 md:w-12 rounded-full bg-white/20 flex items-center justify-center ml-1 md:ml-2 shrink-0">
                                        <span
                                            class="material-symbols-outlined text-white text-xl md:text-2xl group-hover:animate-bounce">
                                            download
                                        </span>
                                    </div>

                                    <div class="flex flex-col items-start overflow-hidden">
                                        <span class="text-sm md:text-lg font-bold uppercase tracking-wide whitespace-nowrap">
                                            <span class="md:hidden">Descargar HD</span> <span class="hidden md:inline">⬇
                                                Descargar Video HD</span> </span>
                                        <span
                                            class="hidden sm:block text-[10px] md:text-sm text-blue-100 opacity-90 font-medium truncate">
                                            Mejor calidad • Sin marca de agua • MP4
                                        </span>
                                    </div>
                                </div>

                                <span
                                    class="text-[10px] md:text-sm font-bold bg-white/20 px-2 md:px-3 py-1 rounded-full text-white backdrop-blur-sm shrink-0 mr-2 md:mr-0">
                                    {{$info['files']['hd']['size']['mb']}} MB
                                </span>
                            </a>
                        @endif

                        @if(!empty($info['files']['sd']))
                            <a href="{{ route('download.sd', ['id' => $id]) }}"
                                class="group flex w-full cursor-pointer items-center justify-between overflow-hidden rounded-full h-14 px-2 md:pr-6 bg-white dark:bg-[#1a2632] border border-gray-200 dark:border-gray-700 hover:border-primary/50 hover:bg-blue-50 dark:hover:bg-blue-900/10 transition-all text-[#111418] dark:text-white"
                                download>
                                <div class="flex items-center gap-2 md:gap-4 h-full overflow-hidden">
                                    <div
                                        class="h-10 w-10 shrink-0 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center ml-1 md:ml-2 group-hover:bg-primary/10">
                                        <span
                                            class="material-symbols-outlined text-gray-600 dark:text-gray-300 group-hover:text-primary">sd</span>
                                    </div>
                                    <div class="flex flex-col items-start overflow-hidden">
                                        <span class="text-sm md:text-base font-bold whitespace-nowrap">
                                            <span class="md:hidden">Descargar SD</span>
                                            <span class="hidden md:inline">⬇ Descargar Video SD</span>
                                        </span>
                                        <span
                                            class="hidden sm:block text-[10px] md:text-xs text-gray-500 dark:text-gray-400 truncate">
                                            Archivo menor • MP4 • Sin marca
                                        </span>
                                    </div>
                                </div>
                                <span class="text-[10px] md:text-xs font-medium text-gray-500 dark:text-gray-400 shrink-0 ml-2">
                                    {{$info['files']['sd']['size']['mb']}} MB
                                </span>
                            </a>
                        @endif

                        @if(!empty($info['files']['mp3']))
                            <a href="{{ route('download.mp3', ['id' => $id]) }}"
                                class="group flex w-full cursor-pointer items-center justify-between overflow-hidden rounded-full h-14 px-2 md:pr-6 bg-white dark:bg-[#1a2632] border border-gray-200 dark:border-gray-700 hover:border-pink-400/50 hover:bg-pink-50 dark:hover:bg-pink-900/10 transition-all text-[#111418] dark:text-white"
                                download>
                                <div class="flex items-center gap-2 md:gap-4 h-full overflow-hidden">
                                    <div
                                        class="h-10 w-10 shrink-0 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center ml-1 md:ml-2 group-hover:bg-pink-100 dark:group-hover:bg-pink-900/30">
                                        <span
                                            class="material-symbols-outlined text-gray-600 dark:text-gray-300 group-hover:text-pink-500">headphones</span>
                                    </div>
                                    <div class="flex flex-col items-start overflow-hidden">
                                        <span class="text-sm md:text-base font-bold whitespace-nowrap">
                                            <span class="md:hidden">Audio MP3</span>
                                            <span class="hidden md:inline">♫ Descargar Solo Audio MP3</span>
                                        </span>
                                        <span
                                            class="hidden sm:block text-[10px] md:text-xs text-gray-500 dark:text-gray-400 truncate">
                                            Solo audio • TikTok
                                        </span>
                                    </div>
                                </div>
                                <span class="text-[10px] md:text-xs font-medium text-gray-500 dark:text-gray-400 shrink-0 ml-2">
                                    {{$info['files']['mp3']['size']['mb']}} MB
                                </span>
                            </a>
                        @endif

                    </div>

                    <!-- <div class="w-full mt-2">
                                    <div
                                        class="flex flex-col items-stretch justify-start rounded-xl shadow-sm bg-gray-50 dark:bg-[#1a2632] border border-gray-100 dark:border-gray-800 p-4 relative overflow-hidden">
                                        <span
                                            class="text-[10px] uppercase font-bold text-gray-400 absolute top-2 right-2 tracking-wider">Publicidad</span>
                                        <div class="flex flex-row items-center gap-4">
                                            <div class="w-24 h-24 bg-center bg-no-repeat bg-cover rounded-lg shrink-0"
                                                data-alt="Promotional graphic for a VPN service"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuApASqun83E4kKbtSWWpfSI9UllRsAmE41mH-u46Ai6wYOpdJBTuIC-IlIgh27r67EYGMeAsw5t3xV1-sYYVulVWqgDw_SuBff-sb-fGxw9ZtXhVPwFNUW2isvBmwKbRo20SRb9bAC3qx6y-OPIiOCAWo9h41t5zM30bM_UCAonc6c3xnaIFKg6L0w6URnZ_QfQfOw1X7GWR7gTR5QZNlU2UkI2CgHZF4dgCYyjomeHvCU5a1KWlQU5xF1ZlISEQCwleXU4fUHPifY");'>
                                            </div>
                                            <div class="flex flex-col gap-1 pr-8">
                                                <p class="text-[#111418] dark:text-white text-base font-bold leading-tight">
                                                    Asegura tus descargas con FastVPN</p>
                                                <p class="text-[#60758a] dark:text-gray-400 text-sm">Protege tu privacidad mientras
                                                    navegas. Obtén un 70% de descuento hoy.</p>
                                                <a class="text-primary text-sm font-bold mt-1 hover:underline" href="#">Instalar ahora
                                                    →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                    <div class="mt-4 flex flex-col items-center gap-6">
                        <div
                            class="w-full bg-blue-50 dark:bg-blue-900/10 border border-blue-100 dark:border-blue-800/30 rounded-lg p-4 flex gap-3 items-start">
                            <span class="material-symbols-outlined text-blue-400 text-xl shrink-0 mt-0.5">info</span>
                            <p class="text-xs text-blue-800 dark:text-blue-200 leading-relaxed">
                                <strong>Descargo de responsabilidad:</strong> {{ config('services.vars.appName') }} no está
                                afiliado a TikTok. No alojamos ningún video en nuestros servidores. Todos los derechos
                                pertenecen a sus respectivos propietarios. Por favor, respete las leyes de derechos de autor
                                y los términos de uso del creador.
                            </p>
                        </div>

                        <a class="flex items-center gap-2 text-[#60758a] dark:text-gray-400 hover:text-primary dark:hover:text-primary font-bold text-sm transition-colors py-2"
                            href="{{ route('home') }}">
                            <span class="material-symbols-outlined text-lg">arrow_back</span>
                            Descargar otro video
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-12 border-t border-gray-100 dark:border-gray-800 pt-10">
                <h2 class="text-2xl font-bold mb-6 text-[#111418] dark:text-white">¿Por qué Usar
                    {{ config('services.vars.appName') }} para Descargar de TikTok?
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        class="flex flex-col gap-2 p-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
                        <div
                            class="w-10 h-10 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-600 dark:text-green-400 mb-2">
                            <span class="material-symbols-outlined">bolt</span>
                        </div>
                        <h3 class="font-bold text-base">⚡ Más Rápido que el Rayo</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Nuestros servidores dedicados garantizan que tus
                            <strong>descargas de TikTok comiencen al instante</strong> sin colas ni esperas.
                        </p>
                    </div>
                    <div
                        class="flex flex-col gap-2 p-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
                        <div
                            class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-600 dark:text-purple-400 mb-2">
                            <span class="material-symbols-outlined">water_drop</span>
                        </div>
                        <h3 class="font-bold text-base">💧 Sin Marcas de Agua</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Obtén la <strong>calidad del video original de
                                forma limpia</strong> sin la superposición del logo saltarín de TikTok.</p>
                    </div>
                    <div
                        class="flex flex-col gap-2 p-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
                        <div
                            class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 mb-2">
                            <span class="material-symbols-outlined">devices</span>
                        </div>
                        <h3 class="font-bold text-base">🖥️ Todos los Dispositivos</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Funciona perfectamente en <strong>iPhone,
                                Android, MacOS, Windows y Linux</strong> sin necesidad de instalar nada.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const playButton = document.getElementById('playButton');
        const videoThumb = document.getElementById('videoThumb');
        const videoPlayer = document.getElementById('videoPlayer');

        playButton.addEventListener('click', () => {
            videoThumb.classList.add('hidden'); // Ocultar la miniatura
            playButton.classList.add('hidden'); // Ocultar el botón de play
            videoPlayer.classList.remove('hidden'); // Mostrar el video
            videoPlayer.play(); // Reproducir
        });
    </script>

@endsection