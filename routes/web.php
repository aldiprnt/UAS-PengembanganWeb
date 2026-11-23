<?php

use App\Http\Controllers\BiodataControllerWeda;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', [BiodataControllerWeda::class, 'index'])->name('biodata.index');