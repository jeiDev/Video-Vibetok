@extends('layouts.app')

@section('title', __('disclaimer.meta_title'))

@section('meta_description')
{{ __('disclaimer.meta_description') }}
@endsection

@section('meta_keywords', __('disclaimer.meta_keywords'))

@section('og_title', __('disclaimer.og_title'))
@section('og_description', __('disclaimer.og_description'))
@section('og_image', asset('assets/img/og/disclaimer-1200x630.png'))
@section('twitter_card', 'summary_large_image')

@section('content')
    <div class="layout-container flex h-full grow flex-col py-10">
        <div class="px-5 md:px-10 lg:px-40 flex flex-1 justify-center">
            <div class="layout-content-container flex flex-col max-w-[800px] flex-1 gap-8">
                <div class="flex flex-col gap-4 text-center items-center">
                    <div class="inline-flex items-center justify-center p-3 rounded-full bg-primary/10 text-primary mb-2">
                        <span class="material-symbols-outlined !text-3xl">gavel</span>
                    </div>
                    <h1
                        class="text-[#111418] dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">{{ __('disclaimer.page_title') }} <span class="text-primary">{{ config('services.vars.appName') }}</span></h1>
                    <p class="text-[#60758a] dark:text-gray-400 text-lg font-normal leading-normal max-w-[600px]">
                        {{ __('disclaimer.page_intro') }}
                    </p>
                </div>
                
                <div
                    class="rounded-xl bg-gradient-to-br from-primary/10 to-blue-50 dark:from-primary/20 dark:to-[#1a2c3d] p-8 border border-primary/20 shadow-sm relative overflow-hidden">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-primary/20 rounded-full blur-2xl"></div>
                    <div class="relative z-10 flex flex-col md:flex-row gap-6 items-start md:items-center">
                        <div
                            class="shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-white dark:bg-gray-800 text-primary shadow-sm">
                            <span class="material-symbols-outlined">{{ __('disclaimer.affiliation_icon') }}</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#111418] dark:text-white text-xl font-bold leading-tight">{{ __('disclaimer.affiliation_title') }}</h3>
                            <p class="text-[#111418]/80 dark:text-gray-200 text-base font-medium leading-relaxed">
                                {{ __('disclaimer.affiliation_content') }}
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
                                <span class="material-symbols-outlined text-primary">{{ __('disclaimer.section_1_icon') }}</span>
                                <p class="text-[#111418] dark:text-white text-lg font-bold leading-normal">{{ __('disclaimer.section_1_title') }}</p>
                            </div>
                            <div
                                class="text-[#111418] dark:text-white transition-transform duration-300 group-open:rotate-180 flex items-center">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </summary>
                        <div class="px-6 pb-6 pt-2">
                            <p class="text-[#60758a] dark:text-gray-400 text-base font-normal leading-relaxed">
                                {{ __('disclaimer.section_1_content') }}
                            </p>
                        </div>
                    </details>
                    
                    <details
                        class="group flex flex-col rounded-xl border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2633] overflow-hidden transition-all duration-300">
                        <summary
                            class="flex cursor-pointer items-center justify-between gap-6 p-6 select-none bg-white dark:bg-[#1a2633] transition-colors hover:bg-gray-50 dark:hover:bg-[#202e3d]">
                            <div class="flex items-center gap-4">
                                <span class="material-symbols-outlined text-primary">{{ __('disclaimer.section_2_icon') }}</span>
                                <p class="text-[#111418] dark:text-white text-lg font-bold leading-normal">{{ __('disclaimer.section_2_title') }}</p>
                            </div>
                            <div
                                class="text-[#111418] dark:text-white transition-transform duration-300 group-open:rotate-180 flex items-center">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </summary>
                        <div class="px-6 pb-6 pt-2">
                            <p class="text-[#60758a] dark:text-gray-400 text-base font-normal leading-relaxed">
                                {{ __('disclaimer.section_2_content') }}
                            </p>
                        </div>
                    </details>
                    
                    <details
                        class="group flex flex-col rounded-xl border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2633] overflow-hidden transition-all duration-300">
                        <summary
                            class="flex cursor-pointer items-center justify-between gap-6 p-6 select-none bg-white dark:bg-[#1a2633] transition-colors hover:bg-gray-50 dark:hover:bg-[#202e3d]">
                            <div class="flex items-center gap-4">
                                <span class="material-symbols-outlined text-primary">{{ __('disclaimer.section_3_icon') }}</span>
                                <p class="text-[#111418] dark:text-white text-lg font-bold leading-normal">{{ __('disclaimer.section_3_title') }}</p>
                            </div>
                            <div
                                class="text-[#111418] dark:text-white transition-transform duration-300 group-open:rotate-180 flex items-center">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </summary>
                        <div class="px-6 pb-6 pt-2">
                            <p class="text-[#60758a] dark:text-gray-400 text-base font-normal leading-relaxed">
                                {{ __('disclaimer.section_3_content') }}
                            </p>
                        </div>
                    </details>
                    
                    <details
                        class="group flex flex-col rounded-xl border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2633] overflow-hidden transition-all duration-300">
                        <summary
                            class="flex cursor-pointer items-center justify-between gap-6 p-6 select-none bg-white dark:bg-[#1a2633] transition-colors hover:bg-gray-50 dark:hover:bg-[#202e3d]">
                            <div class="flex items-center gap-4">
                                <span class="material-symbols-outlined text-primary">{{ __('disclaimer.section_4_icon') }}</span>
                                <p class="text-[#111418] dark:text-white text-lg font-bold leading-normal">{{ __('disclaimer.section_4_title') }}</p>
                            </div>
                            <div
                                class="text-[#111418] dark:text-white transition-transform duration-300 group-open:rotate-180 flex items-center">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </summary>
                        <div class="px-6 pb-6 pt-2">
                            <p class="text-[#60758a] dark:text-gray-400 text-base font-normal leading-relaxed">
                                {{ __('disclaimer.section_4_content') }}
                            </p>
                        </div>
                    </details>
                </div>
                
                <div class="w-full h-32 rounded-xl bg-cover bg-center overflow-hidden relative mt-4"
                    data-alt="Abstract blue gradient geometric pattern representing digital law"
                    style="background-image: linear-gradient(135deg, rgba(37, 140, 244, 0.1) 0%, rgba(37, 140, 244, 0.05) 100%);">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <p class="text-primary font-bold tracking-widest uppercase text-sm opacity-60">{{ __('disclaimer.footer_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection