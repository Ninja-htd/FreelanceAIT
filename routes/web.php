<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/Dashbord', [App\Http\Controllers\HomeController::class, 'index'])->name('Dashbord');
