<?php

use App\Http\Controllers\BiodataControllerWeda;
use App\Http\Controllers\AldiController;
use App\Http\Controllers\DwiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', [BiodataControllerWeda::class, 'index'])->name('biodata.index');
Route::get('/aldi', [AldiController::class, 'index'])->name('aldi.index');
Route::get('/dwi', [DwiController::class, 'index'])->name('dwi.index');