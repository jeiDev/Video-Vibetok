@extends('layouts.app')

@section('title', __('cookie.meta_title'))

@section('meta_description')
{{ __('cookie.meta_description') }}
@endsection

@section('meta_keywords', __('cookie.meta_keywords'))

@section('og_title', __('cookie.og_title'))
@section('og_description', __('cookie.og_description'))
@section('og_image', asset('assets/img/og/cookies-1200x630.png'))
@section('twitter_card', 'summary_large_image')

@section('content')
    <div class="flex-1 w-full max-w-[1400px] mx-auto px-4 py-8 md:px-10 md:py-12">
        <div class="mb-12 max-w-[960px] mx-auto text-center md:text-left">
            <h1
                class="text-slate-900 dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em] mb-4">
                {{ __('cookie.page_title') }} <span class="text-primary">{{ config('services.vars.appName') }}</span>
            </h1>
            <p class="text-slate-500 dark:text-slate-400 text-base font-normal leading-normal">{!! __('cookie.page_intro') !!}</p>
        </div>
        <div class="flex flex-col lg:flex-row gap-12">
            <aside class="hidden lg:block w-64 flex-shrink-0">
                <div class="sticky top-24 space-y-8">
                    <div
                        class="bg-white dark:bg-slate-900 rounded-2xl p-6 border border-slate-200 dark:border-slate-800 shadow-sm">
                        <h3 class="text-slate-900 dark:text-white text-base font-bold mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">toc</span>
                            {{ __('cookie.sidebar_title') }}
                        </h3>
                        <nav class="flex flex-col gap-2">
                            <a class="flex items-center gap-3 px-3 py-2 rounded-full bg-primary/10 text-primary text-sm font-semibold transition-colors"
                                href="#overview">{{ __('cookie.sidebar_overview') }}</a> <a
                                class="flex items-center gap-3 px-3 py-2 rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-medium transition-colors"
                                href="#status">{{ __('cookie.sidebar_status') }}</a> <a
                                class="flex items-center gap-3 px-3 py-2 rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-medium transition-colors"
                                href="#essential">{{ __('cookie.sidebar_essential') }}</a> <a
                                class="flex items-center gap-3 px-3 py-2 rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-medium transition-colors"
                                href="#marketing">{{ __('cookie.sidebar_marketing') }}</a> <a
                                class="flex items-center gap-3 px-3 py-2 rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-medium transition-colors"
                                href="#third-party">{{ __('cookie.sidebar_third_party') }}</a> <a
                                class="flex items-center gap-3 px-3 py-2 rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-medium transition-colors"
                                href="#manage">{{ __('cookie.sidebar_manage') }}</a>
                        </nav>
                    </div>
                    <div class="bg-gradient-to-br from-primary to-blue-600 rounded-2xl p-6 text-white shadow-lg">
                        <span class="material-symbols-outlined text-4xl mb-3">security</span>
                        <h4 class="font-bold text-lg mb-2">{{ __('cookie.sidebar_privacy_title') }}</h4>
                        <p class="text-blue-100 text-sm mb-4">{{ __('cookie.sidebar_privacy_text') }}</p> <a
                            class="inline-block text-sm font-bold underline decoration-2 underline-offset-2 hover:text-white/90"
                            href="{{ route('legal.privacy') }}">{{ __('cookie.sidebar_privacy_link') }}</a>
                    </div>
                </div>
            </aside>
            <div class="flex-1 max-w-[800px]">
                <section class="mb-12" id="overview">
                    <p class="text-lg leading-relaxed text-slate-700 dark:text-slate-300 mb-6"> {{ __('cookie.overview_intro') }} </p>
                    <div class="bg-blue-50 dark:bg-blue-900/20 border-l-4 border-primary p-6 rounded-r-xl">
                        <p class="text-slate-700 dark:text-slate-200 font-medium"> <span
                                class="material-symbols-outlined align-bottom mr-1 text-primary">info</span>
                            <strong>{{ __('cookie.transparent_monetization_title') }}</strong> {{ __('cookie.transparent_monetization_text') }}
                        </p>
                    </div>
                </section>

                <section class="mb-12 scroll-mt-24" id="status">
                    <div
                        class="bg-white dark:bg-slate-900 rounded-2xl p-6 md:p-8 border border-slate-200 dark:border-slate-800 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)]">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-2"> <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-400">
                                        <span class="material-symbols-outlined text-xl">check_circle</span> </span>
                                    <h2 class="text-xl font-bold text-slate-900 dark:text-white">{{ __('cookie.consent_title') }} </h2>
                                </div>
                                <p class="text-slate-600 dark:text-slate-400 text-sm"> {{ __('cookie.consent_accepted') }} </p>
                                <p class="text-xs text-slate-400 mt-2">{{ __('cookie.consent_id') }} 8a7f9c...2b1</p>
                            </div> <button
                                class="shrink-0 flex items-center justify-center gap-2 rounded-full h-10 px-6 bg-slate-100 hover:bg-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700 text-slate-900 dark:text-white text-sm font-semibold transition-all">
                                <span class="material-symbols-outlined text-lg">tune</span> {{ __('cookie.manage_preferences_btn') }}
                            </button>
                        </div>
                    </div>
                </section>

                <div class="space-y-8">
                    <section class="scroll-mt-24" id="essential">
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2"> <span
                                class="material-symbols-outlined text-primary">{{ __('cookie.essential_icon') }}</span> {{ __('cookie.essential_title') }} </h2>
                        <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"> {{ __('cookie.essential_description') }} </p>
                        <div class="overflow-hidden rounded-xl border border-slate-200 dark:border-slate-800">
                            <table class="w-full text-sm text-left">
                                <thead class="bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white font-semibold">
                                    <tr>
                                        <th class="px-6 py-4">{{ __('cookie.table_header_name') }}</th>
                                        <th class="px-6 py-4">{{ __('cookie.table_header_provider') }}</th>
                                        <th class="px-6 py-4">{{ __('cookie.table_header_purpose') }}</th>
                                        <th class="px-6 py-4">{{ __('cookie.table_header_expiry') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 dark:divide-slate-800 bg-white dark:bg-slate-900">
                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">video_vibetok_session</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">videovibetok.com</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Mantiene el estado de la sesión del usuario (login, preferencias temporales).</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Sesión / 1 día</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">XSRF-TOKEN</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">videovibetok.com</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Protección contra ataques de falsificación de solicitudes entre sitios (seguridad).</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Sesión / 1 día</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">AEC</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Google</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Garantiza que las solicitudes sean enviadas por el usuario real y no por software malicioso.</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">6 meses</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">__Secure-1PSID, SID, HSID</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Google</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Autenticación de la cuenta de Google y protección contra el uso fraudulento de credenciales.</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">2 años</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">SEARCH_SAMESITE</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Google</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Gestión interna para el envío seguro de datos de búsqueda.</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">6 meses</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="scroll-mt-24" id="marketing">
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2"> <span
                                class="material-symbols-outlined text-primary">{{ __('cookie.marketing_icon') }}</span> {{ __('cookie.marketing_title') }} </h2>
                        <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"> {{ __('cookie.marketing_description') }} </p>
                        <div
                            class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-6 mb-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center shrink-0 text-orange-600 dark:text-orange-400">
                                    <span class="material-symbols-outlined">monetization_on</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white mb-1">{{ __('cookie.marketing_subtitle') }}</h4>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm"> {{ __('cookie.marketing_reason') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-hidden rounded-xl border border-slate-200 dark:border-slate-800">
                            <table class="w-full text-sm text-left">
                                <thead class="bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white font-semibold">
                                    <tr>
                                        <th class="px-6 py-4">{{ __('cookie.table_header_name') }}</th>
                                        <th class="px-6 py-4">{{ __('cookie.table_header_provider') }}</th>
                                        <th class="px-6 py-4">{{ __('cookie.table_header_purpose') }}</th>
                                        <th class="px-6 py-4">{{ __('cookie.table_header_expiry') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 dark:divide-slate-800 bg-white dark:bg-slate-900">
                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">IDE / DSID</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">DoubleClick (Google)</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Utilizada para registrar las acciones del usuario tras ver o hacer clic en un anuncio (conversión).</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">1 año</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">_ga, _ga_XXXX</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Google Analytics</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">ID anónimo utilizado para generar datos estadísticos sobre cómo el visitante utiliza el sitio web.</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">2 años</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">_gcl_au</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Google AdSense</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Utilizada para experimentar con la eficiencia publicitaria en sitios web que usan sus servicios.</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">3 meses</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">NID</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Google</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Registra un ID único que identifica el dispositivo del usuario para anuncios personalizados en servicios de Google.</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">6 meses</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">ADS_VISITOR_ID</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Google</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Identificador de visitante para la gestión de publicidad dirigida.</td>
                                        <td class="px-6 py-4 text-slate-600 dark:text-slate-400">3 meses</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="scroll-mt-24" id="third-party">
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2"> <span
                                class="material-symbols-outlined text-primary">{{ __('cookie.third_party_icon') }}</span> {{ __('cookie.third_party_title') }} </h2>
                        <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"> {{ __('cookie.third_party_description') }} </p>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div
                                class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
                                <div
                                    class="size-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center shrink-0">
                                    <span
                                        class="material-symbols-outlined text-slate-600 dark:text-slate-400">analytics</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white">{{ __('cookie.analytics_google') }}</h4>
                                    <p class="text-xs text-slate-500">{{ __('cookie.analytics_google_desc') }}</p>
                                </div>
                            </div>
                            <div
                                class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
                                <div
                                    class="size-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center shrink-0">
                                    <span
                                        class="material-symbols-outlined text-slate-600 dark:text-slate-400">bug_report</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white">{{ __('cookie.analytics_sentry') }}</h4>
                                    <p class="text-xs text-slate-500">{{ __('cookie.analytics_sentry_desc') }}</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="scroll-mt-24 pt-8 border-t border-slate-200 dark:border-slate-800" id="manage">
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">{{ __('cookie.manage_title') }}</h2>
                        <p class="text-slate-600 dark:text-slate-400 mb-6"> {{ __('cookie.manage_intro') }} </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6"> <a
                                class="group block p-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 hover:border-primary/50 hover:shadow-lg hover:shadow-primary/5 transition-all"
                                href="#">
                                <div
                                    class="mb-4 size-12 bg-blue-50 dark:bg-slate-800 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-blue-600">public</span>
                                </div>
                                <h3 class="font-bold text-slate-900 dark:text-white mb-2">{{ __('cookie.browser_chrome') }}</h3>
                                <p class="text-sm text-slate-500">{{ __('cookie.browser_chrome_desc') }}</p>
                            </a> <a
                                class="group block p-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 hover:border-orange-500/50 hover:shadow-lg hover:shadow-orange-500/5 transition-all"
                                href="#">
                                <div
                                    class="mb-4 size-12 bg-orange-50 dark:bg-slate-800 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-orange-600">travel_explore</span>
                                </div>
                                <h3 class="font-bold text-slate-900 dark:text-white mb-2">{{ __('cookie.browser_firefox') }}</h3>
                                <p class="text-sm text-slate-500">{{ __('cookie.browser_firefox_desc') }}</p>
                            </a> <a
                                class="group block p-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 hover:border-blue-400/50 hover:shadow-lg hover:shadow-blue-400/5 transition-all"
                                href="#">
                                <div
                                    class="mb-4 size-12 bg-blue-50 dark:bg-slate-800 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-blue-400">explore</span>
                                </div>
                                <h3 class="font-bold text-slate-900 dark:text-white mb-2">{{ __('cookie.browser_safari') }}</h3>
                                <p class="text-sm text-slate-500">{{ __('cookie.browser_safari_desc') }}</p>
                            </a> </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed inset-0 z-[100] flex items-center justify-center px-4 sm:px-6 hidden">
        <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity"></div>
        <div
            class="relative bg-white dark:bg-slate-900 rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] flex flex-col overflow-hidden border border-slate-200 dark:border-slate-800">
            <div
                class="flex items-center justify-between px-6 py-4 border-b border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900 z-10">
                <h3 class="text-xl font-bold text-slate-900 dark:text-white">{{ __('cookie.modal_title') }}</h3>
                <button
                    class="text-slate-400 hover:text-slate-500 dark:hover:text-slate-300 transition-colors rounded-full p-1 hover:bg-slate-100 dark:hover:bg-slate-800">
                    <span class="material-symbols-outlined">close</span> </button>
            </div>
            <div class="flex-1 overflow-y-auto p-6 space-y-4 bg-slate-50/50 dark:bg-slate-950/30">
                <p class="text-sm text-slate-600 dark:text-slate-400 mb-6 leading-relaxed"> {{ __('cookie.modal_intro') }} </p>
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-5 shadow-sm transition-all hover:shadow-md">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-bold text-slate-900 dark:text-white">{{ __('cookie.modal_essential_title') }}</h4> <span
                                    class="px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider bg-primary/10 text-primary border border-primary/20">{{ __('cookie.modal_essential_badge') }}</span>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">{{ __('cookie.modal_essential_desc') }}</p>
                        </div>
                        <div class="shrink-0 text-primary font-medium text-xs pt-1.5 flex items-center gap-1"> <span
                                class="material-symbols-outlined text-sm">lock</span> {{ __('cookie.modal_essential_status') }} </div>
                    </div>
                </div>
                <details
                    class="group bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden transition-all hover:shadow-md open">
                    <summary class="flex items-start justify-between gap-4 p-5 cursor-pointer list-none select-none">
                        <div class="flex-1 pr-4">
                            <div class="flex items-center gap-2 mb-1">
                                <h4
                                    class="font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                    {{ __('cookie.modal_functional_title') }}</h4> <span
                                    class="material-symbols-outlined text-slate-400 text-lg transition-transform duration-200 group-open:rotate-180">expand_more</span>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">{{ __('cookie.modal_functional_desc') }}</p>
                        </div>
                        <div class="relative inline-flex items-center cursor-pointer pt-1" onclick="event.preventDefault()">
                            <input checked="" class="sr-only peer" type="checkbox" />
                            <div
                                class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[6px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:shadow-sm after:transition-all peer-checked:bg-primary">
                            </div>
                        </div>
                    </summary>
                    <div
                        class="px-5 pb-5 pt-0 border-t border-slate-100 dark:border-slate-800 mt-2 bg-slate-50/50 dark:bg-slate-900/50">
                        <div
                            class="overflow-x-auto mt-4 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                            <table class="w-full text-xs text-left">
                                <thead class="text-slate-500 bg-slate-50 dark:bg-slate-800/50 uppercase font-semibold">
                                    <tr>
                                        <th class="px-4 py-3">{{ __('cookie.table_header_name') }}</th>
                                        <th class="px-4 py-3">{{ __('cookie.table_header_provider') }}</th>
                                        <th class="px-4 py-3">Duración</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                    <tr>
                                        <td class="px-4 py-3 font-medium text-slate-700 dark:text-slate-300">{{ __('cookie.modal_functional_table_lang_pref') }} </td>
                                        <td class="px-4 py-3 text-slate-500">{{ __('cookie.modal_functional_provider') }}</td>
                                        <td class="px-4 py-3 text-slate-500">{{ __('cookie.modal_functional_lang_pref_duration') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-medium text-slate-700 dark:text-slate-300">{{ __('cookie.modal_functional_table_theme') }}
                                        </td>
                                        <td class="px-4 py-3 text-slate-500">{{ __('cookie.modal_functional_provider') }}</td>
                                        <td class="px-4 py-3 text-slate-500">{{ __('cookie.modal_functional_theme_duration') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </details>
                <details
                    class="group bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden transition-all hover:shadow-md">
                    <summary class="flex items-start justify-between gap-4 p-5 cursor-pointer list-none select-none">
                        <div class="flex-1 pr-4">
                            <div class="flex items-center gap-2 mb-1">
                                <h4
                                    class="font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                    {{ __('cookie.modal_analytics_title') }}</h4> <span
                                    class="material-symbols-outlined text-slate-400 text-lg transition-transform duration-200 group-open:rotate-180">expand_more</span>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">{{ __('cookie.modal_analytics_desc') }}</p>
                        </div>
                        <div class="relative inline-flex items-center cursor-pointer pt-1" onclick="event.preventDefault()">
                            <input class="sr-only peer" type="checkbox" />
                            <div
                                class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[6px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:shadow-sm after:transition-all peer-checked:bg-primary">
                            </div>
                        </div>
                    </summary>
                    <div
                        class="px-5 pb-5 pt-0 border-t border-slate-100 dark:border-slate-800 mt-2 bg-slate-50/50 dark:bg-slate-900/50">
                        <div
                            class="overflow-x-auto mt-4 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                            <table class="w-full text-xs text-left">
                                <thead class="text-slate-500 bg-slate-50 dark:bg-slate-800/50 uppercase font-semibold">
                                    <tr>
                                        <th class="px-4 py-3">{{ __('cookie.table_header_name') }}</th>
                                        <th class="px-4 py-3">{{ __('cookie.table_header_provider') }}</th>
                                        <th class="px-4 py-3">Duración</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                    <tr>
                                        <td class="px-4 py-3 font-medium text-slate-700 dark:text-slate-300">{{ __('cookie.modal_analytics_ga') }}</td>
                                        <td class="px-4 py-3 text-slate-500">{{ __('cookie.modal_analytics_ga_provider') }}</td>
                                        <td class="px-4 py-3 text-slate-500">{{ __('cookie.modal_analytics_ga_duration') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-medium text-slate-700 dark:text-slate-300">{{ __('cookie.modal_analytics_gid') }}</td>
                                        <td class="px-4 py-3 text-slate-500">{{ __('cookie.modal_analytics_ga_provider') }}</td>
                                        <td class="px-4 py-3 text-slate-500">{{ __('cookie.modal_analytics_gid_duration') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </details>
                <details
                    class="group bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden transition-all hover:shadow-md">
                    <summary class="flex items-start justify-between gap-4 p-5 cursor-pointer list-none select-none">
                        <div class="flex-1 pr-4">
                            <div class="flex items-center gap-2 mb-1">
                                <h4
                                    class="font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                    {{ __('cookie.modal_advertising_title') }}</h4> <span
                                    class="material-symbols-outlined text-slate-400 text-lg transition-transform duration-200 group-open:rotate-180">expand_more</span>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">{{ __('cookie.modal_advertising_desc') }}</p>
                        </div>
                        <div class="relative inline-flex items-center cursor-pointer pt-1" onclick="event.preventDefault()">
                            <input class="sr-only peer" type="checkbox" />
                            <div
                                class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[6px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:shadow-sm after:transition-all peer-checked:bg-primary">
                            </div>
                        </div>
                    </summary>
                    <div
                        class="px-5 pb-5 pt-0 border-t border-slate-100 dark:border-slate-800 mt-2 bg-slate-50/50 dark:bg-slate-900/50">
                        <div
                            class="overflow-x-auto mt-4 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                            <table class="w-full text-xs text-left">
                                <thead class="text-slate-500 bg-slate-50 dark:bg-slate-800/50 uppercase font-semibold">
                                    <tr>
                                        <th class="px-4 py-3">{{ __('cookie.table_header_name') }}</th>
                                        <th class="px-4 py-3">{{ __('cookie.table_header_provider') }}</th>
                                        <th class="px-4 py-3">Duración</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                    <tr>
                                        <td class="px-4 py-3 font-medium text-slate-700 dark:text-slate-300">{{ __('cookie.modal_advertising_fbp') }}</td>
                                        <td class="px-4 py-3 text-slate-500">{{ __('cookie.modal_advertising_fbp_provider') }}</td>
                                        <td class="px-4 py-3 text-slate-500">{{ __('cookie.modal_advertising_fbp_duration') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 font-medium text-slate-700 dark:text-slate-300">{{ __('cookie.modal_advertising_ads_prefs') }} </td>
                                        <td class="px-4 py-3 text-slate-500">{{ __('cookie.modal_advertising_ads_prefs_provider') }}</td>
                                        <td class="px-4 py-3 text-slate-500">{{ __('cookie.modal_advertising_ads_prefs_duration') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </details>
            </div>
            <div
                class="p-6 border-t border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900 z-10 flex flex-col sm:flex-row justify-between gap-4">
                <button
                    class="px-5 py-3 rounded-full border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 font-bold text-sm hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors w-full sm:w-auto">
                    Rechazar todo
                </button>
                <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                    <button
                        class="px-5 py-3 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white font-bold text-sm hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                        Guardar preferencias
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-primary hover:bg-blue-600 text-white font-bold text-sm shadow-lg shadow-blue-500/25 hover:shadow-blue-500/40 transition-all transform active:scale-95">
                        Aceptar todo
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection