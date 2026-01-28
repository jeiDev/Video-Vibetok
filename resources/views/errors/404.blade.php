@extends('layouts.app')

@section('title', 'Contactanos')

@section('content')
    <div class="flex-1 flex flex-col items-center justify-center px-4 py-20 text-center">
        <div class="max-w-2xl w-full flex flex-col items-center gap-8">
            <div class="relative mb-4">
                <div class="absolute -inset-4 bg-primary/5 blur-3xl rounded-full"></div>
                <div class="relative flex flex-col items-center justify-center">
                    <span class="material-symbols-outlined broken-player-icon text-gray-300">
                        videocam_off
                    </span>
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-40">
                        <span
                            class="material-symbols-outlined text-[140px] translate-x-1.5 translate-y-1 text-[#ff0050]/40">videocam_off</span>
                        <span
                            class="material-symbols-outlined text-[140px] -translate-x-1.5 -translate-y-1 text-[#258cf4]/40 absolute">videocam_off</span>
                    </div>
                </div>
                <div class="mt-4 text-6xl font-black italic tracking-tighter text-gray-200 select-none">404 ERROR
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class="text-3xl md:text-5xl font-bold leading-tight text-[var(--dark-charcoal)] glitch-effect">
                   ¡Uy! Este video ha sido eliminado...<br class="hidden md:block" /> o nunca existió
                </h1>
                <p class="text-gray-500 text-lg max-w-lg mx-auto leading-relaxed">
                    El enlace que has seguido podría estar roto, o el video ha sido eliminado por el propietario. ¡No te preocupes, aún puedes descargar otros videos populares!
                </p>
            </div>
            <div class="flex flex-col items-center gap-6 mt-4">
                <a class="group relative flex min-w-[220px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-14 px-10 bg-neon-green text-white hover:scale-105 transition-all text-base font-black uppercase tracking-wider shadow-[0_8px_20px_rgba(34,197,94,0.3)]"
                    href="{{ route('home') }}">
                    Volver al Inicio
                </a>
                <a class="text-gray-400 hover:text-[var(--dark-charcoal)] text-sm font-medium transition-colors flex items-center gap-2"
                    href="{{ route('contact') }}">
                    <span class="material-symbols-outlined text-lg">flag</span>
                    Informar de un error
                </a>
            </div>
            <div
                class="mt-12 w-full max-w-[728px] h-24 bg-white border border-gray-200 shadow-sm rounded-xl flex items-center justify-center relative overflow-hidden group">
                <span
                    class="text-[10px] text-gray-400 absolute top-2 right-3 font-bold tracking-widest uppercase">Sponsored</span>
                <p class="text-gray-400 font-medium italic">Space for Promotional Content</p>
            </div>
        </div>
    </div>
@endsection