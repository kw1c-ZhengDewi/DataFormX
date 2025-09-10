<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArtikelController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

// Page Controllers

// / is the root of this file
Route::get('/home', [PageController::class, 'app']); // For All Pages -> app.blade.php file is hidden, /home is the first page
Route::get('/home', [PageController::class, 'home']); // Homepage
Route::get('/artikel', [PageController::class, 'artikel']); // Artikel
Route::get('/leverancier', [PageController::class, 'leverancier']); // Leverancier

// Add a Artikel 
Route::post('/AddArtikel', [ArtikelController::class, 'AddArtikel'])->name('artikels.add'); // Add Artikel