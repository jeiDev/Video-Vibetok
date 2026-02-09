@extends('layouts.app')

@section('title', __('privacypolicy.meta_title'))

@section('meta_description')
{{ __('privacypolicy.meta_description') }}
@endsection

@section('meta_keywords', __('privacypolicy.meta_keywords'))

@section('og_title', __('privacypolicy.og_title'))
@section('og_description', __('privacypolicy.og_description'))
@section('og_image', asset('assets/img/og/privacy-1200x630.png'))
@section('twitter_card', 'summary_large_image')

@section('content')
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <div class="flex flex-1 justify-center py-10 px-4 md:px-10">
                <div class="layout-content-container flex flex-col lg:flex-row gap-12 max-w-[1200px] flex-1">

                    <aside class="hidden lg:flex flex-col w-64 shrink-0">
                        <div class="sticky top-28 max-h-[calc(100vh-120px)] overflow-y-auto no-scrollbar py-2">
                            <p
                                class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-4 px-4">
                                {{ __('privacypolicy.nav_label') }}</p>
                            <nav class="flex flex-col gap-1">
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-primary/10 text-primary font-bold border-l-4 border-primary transition-all"
                                    href="#introduction">
                                    <span class="material-symbols-outlined text-[20px]">info</span>
                                    <span class="text-sm">{{ __('privacypolicy.nav_introduction') }}</span>
                                </a>
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-all border-l-4 border-transparent"
                                    href="#data-collection">
                                    <span class="material-symbols-outlined text-[20px]">database</span>
                                    <span class="text-sm">{{ __('privacypolicy.nav_data_collection') }}</span>
                                </a>
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-all border-l-4 border-transparent"
                                    href="#cookies">
                                    <span class="material-symbols-outlined text-[20px]">cookie</span>
                                    <span class="text-sm">{{ __('privacypolicy.nav_cookies') }}</span>
                                </a>
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-all border-l-4 border-transparent"
                                    href="#ads">
                                    <span class="material-symbols-outlined text-[20px]">ad_units</span>
                                    <span class="text-sm">{{ __('privacypolicy.nav_ads') }}</span>
                                </a>
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-all border-l-4 border-transparent"
                                    href="#gdpr">
                                    <span class="material-symbols-outlined text-[20px]">gavel</span>
                                    <span class="text-sm">{{ __('privacypolicy.nav_gdpr') }}</span>
                                </a>
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-all border-l-4 border-transparent"
                                    href="#ccpa">
                                    <span class="material-symbols-outlined text-[20px]">security</span>
                                    <span class="text-sm">{{ __('privacypolicy.nav_ccpa') }}</span>
                                </a>
                                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-all border-l-4 border-transparent"
                                    href="#contact">
                                    <span class="material-symbols-outlined text-[20px]">mail</span>
                                    <span class="text-sm">{{ __('privacypolicy.nav_contact') }}</span>
                                </a>
                            </nav>
                        </div>
                    </aside>

                    <main class="flex flex-col flex-1 min-w-0">
                        <div class="flex flex-col gap-4 mb-10 border-b border-gray-200 dark:border-gray-800 pb-8">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 rounded-full bg-primary/10 dark:bg-primary/20 text-primary text-xs font-bold uppercase tracking-wider">{{ __('privacypolicy.header_legal') }}</span>
                                <span class="flex items-center gap-1 text-gray-500 dark:text-gray-400 text-xs font-medium">
                                    <span class="material-symbols-outlined text-[16px]">schedule</span>
                                    {{ __('privacypolicy.header_effective') }}
                                </span>
                            </div>
                            <h1
                                class="text-[#111418] dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                                {{ __('privacypolicy.header_title_part1') }}<span class="text-primary">{{ config('services.vars.appName') }}</span>
                            </h1>
                            <p class="text-[#60758a] dark:text-gray-400 text-lg font-normal leading-normal max-w-2xl">
                                {{ __('privacypolicy.header_intro') }}
                            </p>
                        </div>

                        <section class="mb-12 scroll-mt-28" id="introduction">
                            <h2
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-primary text-white text-sm font-bold">1</span>
                                {{ __('privacypolicy.section1_title') }}
                            </h2>
                            <div class="prose prose-lg dark:prose-invert text-gray-600 dark:text-gray-300">
                                <p class="mb-4">
                                    {{ __('privacypolicy.section1_paragraph1') }}
                                </p>
                                <p>
                                    {{ __('privacypolicy.section1_paragraph2') }}
                                </p>
                            </div>
                        </section>

                        <section class="mb-12 scroll-mt-28" id="data-collection">
                            <h2
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm font-bold">2</span>
                                {{ __('privacypolicy.section2_title') }}
                            </h2>
                            <div
                                class="bg-white dark:bg-[#1a2632] rounded-xl p-6 border border-gray-100 dark:border-gray-800 shadow-sm mb-6">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-3">{{ __('privacypolicy.section2_logdata_title') }}</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">
                                    {{ __('privacypolicy.section2_logdata_text') }}
                                </p>
                                <ul class="grid md:grid-cols-2 gap-4">
                                    <li class="flex items-center gap-3 p-3 rounded-lg bg-gray-50 dark:bg-gray-800/50">
                                        <span class="material-symbols-outlined text-primary">dns</span>
                                        <span class="text-sm font-medium">{{ __('privacypolicy.section2_logdata_ip') }}</span>
                                    </li>
                                    <li class="flex items-center gap-3 p-3 rounded-lg bg-gray-50 dark:bg-gray-800/50">
                                        <span class="material-symbols-outlined text-primary">devices</span>
                                        <span class="text-sm font-medium">{{ __('privacypolicy.section2_logdata_browser') }}</span>
                                    </li>
                                    <li class="flex items-center gap-3 p-3 rounded-lg bg-gray-50 dark:bg-gray-800/50">
                                        <span class="material-symbols-outlined text-primary">schedule</span>
                                        <span class="text-sm font-medium">{{ __('privacypolicy.section2_logdata_time') }}</span>
                                    </li>
                                    <li class="flex items-center gap-3 p-3 rounded-lg bg-gray-50 dark:bg-gray-800/50">
                                        <span class="material-symbols-outlined text-primary">link</span>
                                        <span class="text-sm font-medium">{{ __('privacypolicy.section2_logdata_referrer') }}</span>
                                    </li>
                                </ul>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                {{ __('privacypolicy.section2_video_storage') }}
                            </p>
                        </section>

                        <section class="mb-12 scroll-mt-28" id="cookies">
                            <h2
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm font-bold">3</span>
                                {{ __('privacypolicy.section3_title') }}
                            </h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">
                                {{ __('privacypolicy.section3_description') }}
                            </p>
                            <div class="space-y-4">
                                <div
                                    class="flex gap-4 items-start p-4 rounded-xl border border-dashed border-gray-300 dark:border-gray-700">
                                    <div class="bg-blue-100 dark:bg-blue-900/30 p-2 rounded-lg text-primary shrink-0">
                                        <span class="material-symbols-outlined">analytics</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 dark:text-white text-sm">{{ __('privacypolicy.section3_analytics_title') }}
                                        </h4>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">{{ __('privacypolicy.section3_analytics_desc') }}</p>
                                    </div>
                                </div>
                                <div
                                    class="flex gap-4 items-start p-4 rounded-xl border border-dashed border-gray-300 dark:border-gray-700">
                                    <div
                                        class="bg-purple-100 dark:bg-purple-900/30 p-2 rounded-lg text-purple-600 dark:text-purple-400 shrink-0">
                                        <span class="material-symbols-outlined">ads_click</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 dark:text-white text-sm">{{ __('privacypolicy.section3_advertising_title') }}
                                        </h4>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">{{ __('privacypolicy.section3_advertising_desc') }}</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="mb-12 scroll-mt-28" id="ads">
                            <h2
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm font-bold">4</span>
                                {{ __('privacypolicy.section4_title') }}
                            </h2>
                            <div class="bg-orange-50 dark:bg-orange-900/10 border-l-4 border-orange-500 p-5 rounded-r-lg">
                                <p class="text-gray-700 dark:text-gray-300 text-sm leading-relaxed">
                                    {{ __('privacypolicy.section4_description') }}
                                </p>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 mt-4 text-sm">
                                {{ __('privacypolicy.section4_disclaimer') }}
                            </p>
                        </section>
                        
                        <section class="mb-12 scroll-mt-28" id="gdpr">
                            <h2
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm font-bold">5</span>
                                {{ __('privacypolicy.section5_title') }}
                            </h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">
                                {{ __('privacypolicy.section5_description') }}
                            </p>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div
                                    class="p-5 rounded-xl bg-white dark:bg-[#1a2632] border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-2 flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary text-xl">visibility</span>
                                        {{ __('privacypolicy.section5_access_title') }}
                                    </h4>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('privacypolicy.section5_access_desc') }}</p>
                                </div>
                                <div
                                    class="p-5 rounded-xl bg-white dark:bg-[#1a2632] border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-2 flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary text-xl">edit_note</span>
                                       {{ __('privacypolicy.section5_rectification_title') }}
                                    </h4>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('privacypolicy.section5_rectification_desc') }}</p>
                                </div>
                                <div
                                    class="p-5 rounded-xl bg-white dark:bg-[#1a2632] border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-2 flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary text-xl">delete_forever</span>
                                        {{ __('privacypolicy.section5_deletion_title') }}
                                    </h4>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('privacypolicy.section5_deletion_desc') }}</p>
                                </div>
                                <div
                                    class="p-5 rounded-xl bg-white dark:bg-[#1a2632] border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-2 flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary text-xl">block</span>
                                        {{ __('privacypolicy.section5_limitation_title') }}
                                    </h4>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('privacypolicy.section5_limitation_desc') }}</p>
                                </div>
                            </div>
                        </section>
                        
                        <section class="mb-12 scroll-mt-28" id="ccpa">
                            <h2
                                class="text-[#111418] dark:text-white text-2xl font-bold leading-tight mb-4 flex items-center gap-3">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm font-bold">6</span>
                                {{ __('privacypolicy.section6_title') }}
                            </h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                {{ __('privacypolicy.section6_description') }}
                            </p>
                            <ul class="list-disc pl-5 space-y-2 text-gray-600 dark:text-gray-300 marker:text-primary">
                                <li>{{ __('privacypolicy.section6_point1') }}</li>
                                <li>{{ __('privacypolicy.section6_point2') }}</li>
                                <li>{{ __('privacypolicy.section6_point3') }}</li>
                            </ul>
                            <div class="mt-6">
                                <button
                                    class="inline-flex items-center gap-2 text-sm font-bold text-primary hover:underline">
                                    {{ __('privacypolicy.section6_optout') }}
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
                                    <h2 class="text-white text-2xl md:text-3xl font-bold mb-4">{{ __('privacypolicy.section7_title') }}</h2>
                                    <p class="text-gray-300 mb-8 max-w-md mx-auto">
                                        {{ __('privacypolicy.section7_description') }}
                                    </p>
                                    <div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
                                        <button
                                            class="bg-primary hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-full transition-all transform hover:scale-105 shadow-lg shadow-blue-500/25 flex items-center justify-center gap-2">
                                            <span class="material-symbols-outlined text-lg">send</span>
                                            {{ __('privacypolicy.section7_dpo_button') }}
                                        </button>
                                        <button
                                            class="bg-white/10 hover:bg-white/20 text-white font-bold py-3 px-8 rounded-full backdrop-blur-sm transition-all flex items-center justify-center gap-2">
                                            {{ __('privacypolicy.section7_delete_button') }}
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