@extends('layouts.app')

@section('title', __('termsconditions.meta_title'))

@section('meta_description')
{{ __('termsconditions.meta_description') }}
@endsection

@section('meta_keywords', __('termsconditions.meta_keywords'))

@section('og_title', __('termsconditions.meta_og_title'))
@section('og_description', __('termsconditions.meta_og_description'))
@section('og_image', asset('assets/img/og/terms-1200x630.png'))
@section('twitter_card', __('termsconditions.meta_twitter_card'))

@section('content')
    <div class="flex-grow w-full max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
        <div class="text-center mb-16 space-y-4">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wide">
                <span class="material-symbols-outlined text-[16px]">gavel</span>
                {{ __('termsconditions.header_badge') }}
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-[#111418] text-[#111418] dark:text-white tracking-tight">
                {{ __('termsconditions.header_title_part1') }} <span class="text-primary">{{ config('services.vars.appName') }}</span>
            </h1>
            <p class="text-text-sub dark:text-gray-400 text-lg max-w-2xl mx-auto">{{ __('termsconditions.header_intro') }}</p>
        </div>
        <div class="flex flex-col lg:flex-row gap-12 relative">
            
            <aside class="hidden lg:block w-64 shrink-0">
                <div class="sticky top-28 space-y-6">
                    <div
                        class="p-6 bg-white dark:bg-[#1a2632] rounded-xl shadow-sm border border-gray-100 dark:border-gray-800">
                        <h3 class="text-sm font-bold text-text-sub dark:text-gray-400 uppercase tracking-wider mb-4">{{ __('termsconditions.nav_label') }}</h3>
                        <nav class="flex flex-col space-y-1">
                            <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-primary bg-primary/5 rounded-lg border-l-2 border-primary"
                                href="#intro">
                                <span>01.</span> {{ __('termsconditions.nav_1') }}
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-text-sub dark:text-gray-400 hover:text-[#111418] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-white/5 rounded-lg border-l-2 border-transparent transition-all"
                                href="#user-responsibility">
                                <span>02.</span> {{ __('termsconditions.nav_2') }}
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-text-sub dark:text-gray-400 hover:text-[#111418] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-white/5 rounded-lg border-l-2 border-transparent transition-all"
                                href="#intellectual-property">
                                <span>03.</span> {{ __('termsconditions.nav_3') }}
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-text-sub dark:text-gray-400 hover:text-[#111418] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-white/5 rounded-lg border-l-2 border-transparent transition-all"
                                href="#service-availability">
                                <span>04.</span> {{ __('termsconditions.nav_4') }}
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-text-sub dark:text-gray-400 hover:text-[#111418] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-white/5 rounded-lg border-l-2 border-transparent transition-all"
                                href="#limitation-liability">
                                <span>05.</span> {{ __('termsconditions.nav_5') }}
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-text-sub dark:text-gray-400 hover:text-[#111418] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-white/5 rounded-lg border-l-2 border-transparent transition-all"
                                href="#third-party">
                                <span>06.</span> {{ __('termsconditions.nav_6') }}
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
                                {{ __('termsconditions.section1_title') }}
                            </h2>
                            <p class="text-text-sub dark:text-gray-300 leading-relaxed">
                                {{ __('termsconditions.section1_text') }}
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
                                {{ __('termsconditions.section2_title') }}
                            </h2>
                            <p class="text-text-sub dark:text-gray-300 leading-relaxed mb-6">
                                {{ __('termsconditions.section2_intro') }}
                            </p>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3 text-text-sub dark:text-gray-300">
                                    <span class="material-symbols-outlined text-primary mt-0.5 text-lg">check_circle</span>
                                    <span>{{ __('termsconditions.section2_item1') }}</span>
                                </li>
                                <li class="flex items-start gap-3 text-text-sub dark:text-gray-300">
                                    <span class="material-symbols-outlined text-primary mt-0.5 text-lg">check_circle</span>
                                    <span>{{ __('termsconditions.section2_item2') }}</span>
                                </li>
                                <li class="flex items-start gap-3 text-text-sub dark:text-gray-300">
                                    <span class="material-symbols-outlined text-primary mt-0.5 text-lg">check_circle</span>
                                    <span>{{ __('termsconditions.section2_item3') }}</span>
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
                                {{ __('termsconditions.section3_title') }}
                            </h2>
                            <p class="text-text-sub dark:text-gray-300 leading-relaxed mb-4">
                                {{ __('termsconditions.section3_text') }}
                            </p>
                            <div
                                class="p-4 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-100 dark:border-yellow-800/30 rounded-xl">
                                <p class="text-yellow-800 dark:text-yellow-200 text-sm font-medium flex items-center gap-2">
                                    <span class="material-symbols-outlined">warning</span>
                                    {{ __('termsconditions.section3_warning') }}
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
                                {{ __('termsconditions.section4_title') }}
                            </h2>
                            <p class="text-text-sub dark:text-gray-300 leading-relaxed">
                                {{ __('termsconditions.section4_text') }}
                            </p>
                        </div>
                    </section>
                    
                    <section class="scroll-mt-28" id="limitation-liability">
                        <div
                            class="bg-red-50/50 dark:bg-red-900/10 p-8 rounded-2xl border border-red-100 dark:border-red-900/30">
                            <h2 class="text-2xl font-bold text-red-900 dark:text-red-200 mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center size-8 rounded-full bg-red-100 dark:bg-red-900/40 text-sm">5</span>
                                {{ __('termsconditions.section5_title') }}
                            </h2>
                            <p class="text-[#111418] dark:text-gray-200 leading-relaxed font-medium">
                                {{ __('termsconditions.section5_intro') }}
                            </p>
                            <ul class="mt-4 space-y-2 list-disc list-inside text-text-sub dark:text-gray-400">
                                <li>{{ __('termsconditions.section5_item1') }}</li>
                                <li>{{ __('termsconditions.section5_item2') }}</li>
                                <li>{{ __('termsconditions.section5_item3') }}</li>
                            </ul>
                        </div>
                    </section>
                    
                    <section class="scroll-mt-28" id="third-party">
                        <div
                            class="bg-white dark:bg-[#1a2632] p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-800">
                            <h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center size-8 rounded-full bg-gray-100 dark:bg-gray-700 text-sm">6</span>
                                {{ __('termsconditions.section6_title') }}
                            </h2>
                            <p class="text-text-sub dark:text-gray-300 leading-relaxed">
                               {{ __('termsconditions.section6_text') }}
                            </p>
                        </div>
                    </section>
                </div>
            </article>
        </div>
    </div>
@endsection