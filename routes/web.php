<?php

use App\Http\Controllers\ComicPageController;
use App\Http\Controllers\ComicController;

// Rotte per le pagine statiche
Route::get('/', [ComicPageController::class, 'home'])->name('home');
Route::get('/about', [ComicPageController::class, 'about'])->name('about');
Route::get('/contact', [ComicPageController::class, 'contact'])->name('contact');

// Rotte resource per i fumetti
Route::resource('comics', ComicController::class);

