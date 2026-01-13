<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalController;
use Illuminate\Support\Facades\Route;


// Ruta de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Ruta de descarga
Route::get('/download', [DownloadController::class, 'index'])->name('download');

// Páginas Legales
Route::get('/terms', [LegalController::class, 'terms'])->name('legal.terms');
Route::get('/privacy', [LegalController::class, 'privacy'])->name('legal.privacy');
Route::get('/dmca', [LegalController::class, 'dmca'])->name('legal.dmca');

// Página de Contacto
Route::get('/contact', [ContactController::class, 'index'])->name('contact');