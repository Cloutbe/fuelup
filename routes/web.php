<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/beranda', function() {
    return view('beranda');
})->name('beranda');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');