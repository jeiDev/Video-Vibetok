<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;


Route::prefix('download')->group(function () {
    Route::post('/', [DownloadController::class, 'download'])->name('download');;
});