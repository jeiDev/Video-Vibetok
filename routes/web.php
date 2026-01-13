<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Legal\DMCAController;
use App\Http\Controllers\Legal\FaqController;
use App\Http\Controllers\Legal\HowUseController;
use App\Http\Controllers\Legal\PrivacyPolicyController;
use App\Http\Controllers\Legal\TermsConditionsController;
use App\Http\Controllers\LegalController;
use Illuminate\Support\Facades\Route;


// Ruta de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Ruta de descarga
Route::get('/download/{id}', [DownloadController::class, 'index'])->name('download');

// Cómo utilizar
Route::get('/how-use', [HowUseController::class, 'index'])->name('howToUse');

// Páginas Legales
Route::get('/dmca', [DMCAController::class, 'dmca'])->name('legal.dmca');
Route::get('/faq', [FaqController::class, 'index'])->name('legal.faq');

Route::prefix('terms-conditions')->controller(TermsConditionsController::class)->group(function () {
    Route::get('/', 'index')->name('legal.terms');
});

Route::prefix('privacy-policy')->controller(PrivacyPolicyController::class)->group(function () {
    Route::get('/', 'index')->name('legal.privacy');
});


// Página de Contacto
Route::get('/contact', [ContactController::class, 'index'])->name('contact');