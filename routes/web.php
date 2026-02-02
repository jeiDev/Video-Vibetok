<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Legal\CookiePolicyController;
use App\Http\Controllers\Legal\DisclaimerController;
use App\Http\Controllers\Legal\FaqController;
use App\Http\Controllers\Legal\HowUseController;
use App\Http\Controllers\Legal\PrivacyPolicyController;
use App\Http\Controllers\Legal\TermsConditionsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;


Route::get('/', function (Request $request) {
    $allowedLocales = ['es', 'en', 'pt', 'fr'];
    $browserLocale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
    $locale = in_array($browserLocale, $allowedLocales) ? $browserLocale : 'en';
    return redirect()->to("/$locale");
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'es|en|pt|fr']], function () {
    // Ruta de inicio
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Ruta de descarga
    Route::prefix('download')->group(function () {
        Route::get('/{id}', [DownloadController::class, 'index'])->name('view-download');
        Route::get('/{id}/hd', [DownloadController::class, 'downloadHD'])->name('download.hd');
        Route::get('/{id}/sd', [DownloadController::class, 'downloadSD'])->name('download.sd');
        Route::get('/{id}/mp3', [DownloadController::class, 'downloadMP3'])->name('download.mp3');
        Route::get('/{id}/thumbnail', [DownloadController::class, 'thumbnail'])->name('download.thumbnail');
    });

    // Cómo utilizar
    Route::get('/how-use', [HowUseController::class, 'index'])->name('howToUse');

    // Páginas Legales
    Route::get('/disclaimer', [DisclaimerController::class, 'index'])->name('legal.disclaimer');
    Route::get('/faq', [FaqController::class, 'index'])->name('legal.faq');
    Route::get('/cookie-policy', [CookiePolicyController::class, 'index'])->name('legal.cookie-policy');
    Route::get('/terms-conditions', [TermsConditionsController::class, 'index'])->name('legal.terms-conditions');
    Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('legal.privacy');

    // Página de Contacto
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
});
