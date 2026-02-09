@extends('layouts.app')

@section('title', __('contact.meta_title'))

@section('meta-description', __('contact.meta_description'))

@section('meta-keywords', __('contact.meta_keywords'))

@section('og-type', __('contact.og_type'))

@section('og-title', __('contact.og_title'))

@section('og-description', __('contact.og_description'))

@section('og-image', url(__('contact.og_image')))

@section('twitter-title', __('contact.twitter_title'))

@section('twitter-description', __('contact.twitter_description'))

@section('twitter-image', url(__('contact.twitter_image')))

@section('content')
    <div class="flex-grow flex flex-col items-center py-10 px-4 md:px-10">
        <div class="w-full max-w-[1000px] flex flex-col gap-10">
            <div class="text-center space-y-4">
                <h1 class="text-slate-900 dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-tight">
                    {{ __('contact.title') }} <span class="text-primary">{{ __('contact.title_highlight') }}</span>
                </h1>
                <p class="text-slate-500 dark:text-slate-400 text-lg md:text-xl font-normal max-w-2xl mx-auto">
                    {!! __('contact.subtitle') !!}
                </p>
            </div>

            <div class="bg-white dark:bg-slate-900 rounded-lg p-6 shadow-sm border border-slate-100 dark:border-slate-800">
                <h2
                    class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-tight mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">help</span>
                    {!! __('contact.faq_title') !!}
                </h2>
                <div class="flex flex-wrap gap-3">
                    <a class="group flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 dark:bg-slate-800 hover:bg-primary/10 dark:hover:bg-primary/20 hover:ring-1 ring-primary transition-all pl-4 pr-5 cursor-pointer"
                        href="{{ route('legal.faq') }}" title="Ver respuesta a descargas fallidas">
                        <p class="text-slate-700 dark:text-slate-300 text-sm font-medium group-hover:text-primary">
                            {{ __('contact.faq_failed_download') }}</p>
                    </a>
                    <a class="group flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 dark:bg-slate-800 hover:bg-primary/10 dark:hover:bg-primary/20 hover:ring-1 ring-primary transition-all pl-4 pr-5 cursor-pointer"
                        href="{{ route('legal.faq') }}" title="Ver soluciones para marcas de agua">
                        <p class="text-slate-700 dark:text-slate-300 text-sm font-medium group-hover:text-primary">
                            {{ __('contact.faq_watermark') }}</p>
                    </a>
                    <a class="group flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 dark:bg-slate-800 hover:bg-primary/10 dark:hover:bg-primary/20 hover:ring-1 ring-primary transition-all pl-4 pr-5 cursor-pointer"
                        href="{{ route('legal.faq') }}" title="Dónde se guardan tus descargas">
                        <p class="text-slate-700 dark:text-slate-300 text-sm font-medium group-hover:text-primary">
                            {{ __('contact.faq_save_location') }}</p>
                    </a>
                    <a class="group flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 dark:bg-slate-800 hover:bg-primary/10 dark:hover:bg-primary/20 hover:ring-1 ring-primary transition-all pl-4 pr-5 cursor-pointer"
                        href="{{ route('legal.faq') }}" title="Dispositivos compatibles">
                        <p class="text-slate-700 dark:text-slate-300 text-sm font-medium group-hover:text-primary">
                            {{ __('contact.faq_devices') }}</p>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div
                    class="lg:col-span-2 bg-white dark:bg-slate-900 rounded-lg p-8 shadow-lg shadow-slate-200/50 dark:shadow-black/20 border border-slate-100 dark:border-slate-800">

                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">{{ __('contact.form_title') }}</h2>

                    @if(session('success'))
                        <div
                            class="mb-4 w-full bg-green-50 border border-green-100 rounded-2xl p-4 flex flex-col sm:flex-row items-center justify-between gap-4 animate-in fade-in slide-in-from-top-2 duration-300">
                            <div class="flex items-center gap-3 text-left">
                                <div
                                    class="size-10 flex-shrink-0 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined">check</span>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-green-800 text-sm font-semibold" id="status-text"></p>
                                    <p class="text-green-700/80 text-xs">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(session('error'))
                        <div
                            class="mb-4 w-full bg-red-50 border border-red-100 rounded-2xl p-4 flex flex-col sm:flex-row items-center justify-between gap-4 animate-in fade-in slide-in-from-top-2 duration-300">
                            <div class="flex items-center gap-3 text-left">
                                <div
                                    class="size-10 flex-shrink-0 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined">error</span>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-red-800 text-sm font-semibold" id="status-text"></p>
                                    <p class="text-red-700/80 text-xs">{{ session('error') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    <form class="flex flex-col gap-6" action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <label class="flex flex-col gap-2">
                                <span class="text-slate-900 dark:text-white text-sm font-semibold ml-2">{{ __('contact.form_label_name') }}</span>
                                <div class="relative">
                                    <input name="name"
                                        class="w-full h-12 rounded-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-5 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                        placeholder="{{ __('contact.form_placeholder_name') }}" type="text" />
                                    <span
                                        class="material-symbols-outlined absolute right-4 top-3 text-slate-400 text-xl pointer-events-none">person</span>
                                </div>
                            </label>
                            <label class="flex flex-col gap-2">
                                <span class="text-slate-900 dark:text-white text-sm font-semibold ml-2">{{ __('contact.form_label_email') }}</span>
                                <div class="relative">
                                    <input name="email"
                                        class="w-full h-12 rounded-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-5 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                        placeholder="{{ __('contact.form_placeholder_email') }}" type="email" />
                                    <span
                                        class="material-symbols-outlined absolute right-4 top-3 text-slate-400 text-xl pointer-events-none">mail</span>
                                </div>
                            </label>
                        </div>
                        <label class="flex flex-col gap-2">
                            <span class="text-slate-900 dark:text-white text-sm font-semibold ml-2">{{ __('contact.form_label_subject') }}</span>
                            <div class="relative">
                                <select name="subject"
                                    class="w-full h-12 rounded-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-5 text-slate-900 dark:text-white appearance-none focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all cursor-pointer">
                                    <option>{{ __('contact.form_option_select') }}</option>
                                    <option>{{ __('contact.form_option_download_problem') }}</option>
                                    <option>{{ __('contact.form_option_feature_suggestion') }}</option>
                                    <option>{{ __('contact.form_option_bug_report') }}</option>
                                    <option>{{ __('contact.form_option_advertising') }}</option>
                                    <option>{{ __('contact.form_option_other') }}</option>
                                </select>
                                <span
                                    class="material-symbols-outlined absolute right-4 top-3 text-slate-400 text-xl pointer-events-none">expand_more</span>
                            </div>
                        </label>
                        <label class="flex flex-col gap-2">
                            <span class="text-slate-900 dark:text-white text-sm font-semibold ml-2">{{ __('contact.form_label_message') }}</span>
                            <textarea name="message"
                                class="w-full min-h-[160px] rounded-3xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 p-5 text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary resize-y transition-all"
                                placeholder="{{ __('contact.form_placeholder_message') }}"></textarea>
                            <div class="flex justify-end px-2">
                                <span class="text-xs text-slate-400 dark:text-slate-500" id="charCount">0 / 500 {{ __('contact.form_character_count_label') }}</span>
                            </div>
                        </label>

                        <button
                            class="mt-2 h-12 w-full md:w-auto self-start rounded-full bg-primary px-8 text-white font-bold text-sm hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 transition-all flex items-center justify-center gap-2 shadow-lg shadow-blue-500/30"
                            type="submit" title="Enviar formulario de contacto">
                            <span>{{ __('contact.form_button') }}</span>
                            <span class="material-symbols-outlined text-sm">send</span>
                        </button>
                    </form>
                </div>

                <div class="flex flex-col gap-6">
                    <div
                        class="bg-primary/5 dark:bg-slate-900 rounded-lg p-6 border border-primary/10 dark:border-slate-800">
                        <h2 class="text-slate-900 dark:text-white font-bold text-lg mb-4">{{ __('contact.other_contact_title') }}</h2>
                        <div class="flex flex-col gap-4">
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-white dark:bg-slate-800 flex items-center justify-center text-primary shadow-sm shrink-0">
                                    <span class="material-symbols-outlined">mail</span>
                                </div>
                                <div>
                                    <p
                                        class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-1">
                                        {{ __('contact.email_section_title') }}</p>
                                    <a class="text-slate-900 dark:text-white font-medium hover:text-primary transition-colors break-all"
                                        href="mailto:{{ __('contact.email_address') }}" title="Enviar correo a soporte">
                                        {{ __('contact.email_address') }}
                                    </a>
                                    <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">{{ __('contact.email_response_time') }}</p>
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
                                        {{ __('contact.response_time_section_title') }}</p>
                                    <p class="text-slate-900 dark:text-white font-medium">{!! __('contact.response_time_24_7') !!}</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">{{ __('contact.response_time_description') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div
                        class="flex-1 min-h-[300px] bg-slate-200 dark:bg-slate-800 rounded-lg flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 border-2 border-dashed border-slate-300 dark:border-slate-700 p-4 relative overflow-hidden group">
                        <div
                            class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-gray-100 to-transparent">
                        </div>
                        <span class="material-symbols-outlined text-4xl mb-2">ads_click</span>
                        <span class="text-sm font-medium uppercase tracking-widest">Anuncio</span>
                        <span class="text-xs mt-2 text-center opacity-70">Apóyenos desactivando el bloqueador de
                            anuncios</span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection