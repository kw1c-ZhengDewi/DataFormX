<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

// Page Controllers

// Root -> app
Route::get('/', [PageController::class, 'app'])->name('app'); 
// If you still want to keep /app available, leave this line:
Route::get('/app', [PageController::class, 'app']); 

// Other pages
Route::get('/home', [PageController::class, 'home']); // Homepage
Route::get('/artikel', [PageController::class, 'artikel']); // Artikel
Route::get('/leverancier', [PageController::class, 'leverancier']); // Leverancier

// Add a Artikel 
Route::post('/AddArtikel', [ArtikelController::class, 'AddArtikel'])->name('artikels.add'); // Voeg Artikels in je Database
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index'); //Loop the artikels in the page Artikelpage

// Zoekopdracht 
Route::get('/my_search', [SearchController::class, 'my_search'])->name('my_search');