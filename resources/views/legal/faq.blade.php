@extends('layouts.app')

@section('title', __('faq.meta_title'))

@section('meta_description')
{{ __('faq.meta_description') }}
@endsection

@section('meta_keywords', __('faq.meta_keywords'))

@section('og_title', __('faq.og_title'))
@section('og_description', __('faq.og_description'))
@section('og_image', asset('assets/img/og/faq-1200x630.png'))
@section('twitter_card', 'summary_large_image')

@section('content')

    <main class="flex-grow container mx-auto px-4 md:px-6 py-8 md:py-12 max-w-6xl">
        <!-- <div class="w-full flex justify-center mb-12">
            <div
                class="w-full max-w-[728px] h-[90px] bg-slate-200 dark:bg-slate-800 rounded-lg flex items-center justify-center text-slate-400 text-sm border border-slate-300 dark:border-slate-700 border-dashed">
                <span class="font-medium tracking-wider">ESPACIO PUBLICITARIO (728x90)</span>
            </div>
        </div> -->
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-16">
            <div class="flex-1 min-w-0">
                <div class="mb-8">
                    <h1
                        class="text-slate-900 dark:text-white text-3xl md:text-5xl font-black leading-tight tracking-[-0.033em] mb-4">
                        {{ __('faq.page_title') }}<span class="text-primary">{{ config('services.vars.appName') }}</span>
                    </h1>
                    <p class="text-slate-500 dark:text-slate-400 text-lg font-normal leading-relaxed max-w-2xl">{{ __('faq.page_intro') }}</p>
                </div>
                
                <div class="mb-8">
                    <label class="flex flex-col h-14 w-full shadow-sm">
                        <div
                            class="flex w-full flex-1 items-stretch rounded-full h-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 focus-within:border-primary focus-within:ring-2 focus-within:ring-primary/20 transition-all overflow-hidden">
                            <div class="text-slate-400 flex items-center justify-center pl-6">
                                <span class="material-symbols-outlined">search</span>
                            </div>
                            <input
                                class="flex w-full min-w-0 flex-1 resize-none bg-transparent border-none text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-0 h-full px-4 text-base font-normal leading-normal"
                                placeholder="{{ __('faq.search_placeholder') }}" />
                        </div>
                    </label>
                </div>
                
                <div class="flex gap-3 mb-8 flex-wrap">
                    @foreach($categories as $name => $key)
                        @php
                            $isActive = ($currentCategory === $key);
                            
                            $classActivo = "flex h-10 items-center justify-center rounded-full bg-primary text-white px-6 shadow-md shadow-primary/20 transition-transform active:scale-95";
                            
                            $classNoActivo = "flex h-10 items-center justify-center rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 px-6 transition-colors active:scale-95";
                        @endphp

                        <a href="{{ route('legal.faq', ['category' => $key]) }}">
                            <button 
                                type="button" 
                                class="{{ $isActive ? $classActivo : $classNoActivo }}"
                            >
                                <span class="text-sm font-bold leading-normal">{{ $name }}</span>
                            </button>
                        </a>
                    @endforeach

                </div>
                <div class="flex flex-col gap-4">
                    
                    @foreach($faqs as $faq)
                        <details
                            class="group rounded-2xl bg-white dark:bg-[#1A2633] border border-slate-200 dark:border-slate-800 overflow-hidden transition-all duration-300 hover:shadow-md dark:hover:shadow-none"
                            {{ $loop->first ? 'open' : '' }}>
                            <summary class="flex cursor-pointer items-center justify-between gap-6 p-6 list-none select-none">
                                <h3 class="text-slate-900 dark:text-white text-lg font-bold leading-tight">{{ $faq['q'] }}</h3>
                                <div
                                    class="flex items-center justify-center size-8 rounded-full bg-slate-100 dark:bg-slate-800 text-primary transition-transform duration-300 group-open:rotate-180 group-open:bg-primary group-open:text-white">
                                    <span class="material-symbols-outlined">expand_more</span>
                                </div>
                            </summary>
                            <div class="px-6 pb-6 pt-0">
                                <p
                                    class="text-slate-600 dark:text-slate-300 text-base font-normal leading-relaxed border-t border-slate-100 dark:border-slate-700/50 pt-4">
                                    {{ $faq['a'] }}
                                </p>
                            </div>
                        </details>
                    @endforeach
                </div>
            </div>
            
            <aside class="w-full lg:w-96 flex flex-col gap-8 shrink-0">
                
                <div
                    class="rounded-lg lg:rounded-[2rem] bg-white dark:bg-[#1A2633] border border-slate-200 dark:border-slate-800 p-8 shadow-lg shadow-slate-200/50 dark:shadow-none sticky top-28">
                    <div class="flex flex-col items-center text-center">
                        <div class="size-16 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">support_agent</span>
                        </div>
                        <h3 class="text-slate-900 dark:text-white text-xl font-bold mb-2">{{ __('faq.support_title') }}</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 leading-relaxed">
                            {{ __('faq.support_text') }}
                        </p>
                        <button
                            class="w-full h-12 rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-bold text-sm hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                            <span>{{ __('faq.support_button') }}</span>
                            <span class="material-symbols-outlined text-lg">{{ __('faq.support_button_icon') }}</span>
                        </button>
                    </div>
                    
                    <div class="w-full h-px bg-slate-100 dark:bg-slate-700 my-6"></div>
                    <div class="flex flex-col gap-3">
                        <a 
                            class="flex items-center gap-3 p-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group"
                            href="{{ route('legal.terms-conditions') }}"
                        >
                            <div
                                class="size-10 rounded-full bg-blue-50 dark:bg-slate-700 flex items-center justify-center text-primary group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-xl">description</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-slate-900 dark:text-white font-semibold text-sm">{{ __('faq.sidebar_terms_title') }}</span>
                                <span class="text-slate-400 text-xs">{{ __('faq.sidebar_terms_desc') }}</span>
                            </div>
                        </a>
                        <a 
                            class="flex items-center gap-3 p-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group"
                            href="{{ route('legal.privacy') }}"
                        >
                            <div
                                class="size-10 rounded-full bg-blue-50 dark:bg-slate-700 flex items-center justify-center text-primary group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-xl">security</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-slate-900 dark:text-white font-semibold text-sm">{{ __('faq.sidebar_privacy_title') }}</span>
                                <span class="text-slate-400 text-xs">{{ __('faq.sidebar_privacy_desc') }}</span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- <div class="hidden lg:flex w-full justify-center">
                    <div
                        class="w-[300px] h-[600px] bg-slate-200 dark:bg-slate-800 rounded-lg flex items-center justify-center text-slate-400 text-sm border border-slate-300 dark:border-slate-700 border-dashed text-center p-4">
                        <span class="font-medium tracking-wider">ESPACIO PUBLICITARIO<br />(300x600)</span>
                    </div>
                </div> -->
            </aside>
        </div>
    </main>
@endsection