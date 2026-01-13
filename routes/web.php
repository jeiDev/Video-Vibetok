<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalController;
use Illuminate\Support\Facades\Route;


// Ruta de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Ruta de descarga
Route::get('/download/{id}', [DownloadController::class, 'index'])->name('download');

// Cómo utilizar
Route::get('/how-use', [LegalController::class, 'howToUse'])->name('howToUse');

// Páginas Legales
Route::get('/terms', [LegalController::class, 'terms'])->name('legal.terms');
Route::get('/privacy', [LegalController::class, 'privacy'])->name('legal.privacy');
Route::get('/dmca', [LegalController::class, 'dmca'])->name('legal.dmca');

// Página de Contacto
Route::get('/contact', [ContactController::class, 'index'])->name('contact');