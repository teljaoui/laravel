<?php

use App\Http\Controllers\PensionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PensionController::class, 'home']);
Route::post('/pensions/search', [PensionController::class, 'search'])->name('pensions.search');
