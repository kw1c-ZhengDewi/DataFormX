<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
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

// Root -> app
Route::get('/', [PageController::class, 'app'])->name('app'); 
// Pagina /app is steeds zichtbaar
Route::get('/app', [PageController::class, 'app']); 

// Andere pagina's
Route::get('/home', [PageController::class, 'home']); // Homepage
Route::get('/artikel', [PageController::class, 'artikel']); // Artikel
Route::get('/gebruiker', [PageController::class, 'gebruiker']); // Gebruiker

// Voeg een Artikel 
Route::post('/AddArtikel', [ArtikelController::class, 'AddArtikel'])->name('artikels.add'); // Voeg Artikels in je Database

// Loop een Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index'); //Loop de artikelen op de pagina Articlepage

// Zoekopdracht 
Route::get('/my_search', [SearchController::class, 'my_search'])->name('my_search');

// Gebruiker page:
// Gebruikers en wachtwoord registreren, inloggen en uitloggen 
Route::post('/register', [UserController::class, 'register'])->name('register');
// Route::post('/login', [UserController::class,'login'])->name('login');
// Route::post('/logout', [UserController::class,'logout'])->name('logout');

// Loop Gebuikers
Route::get('/gebruiker', [UserController::class,'index'])->name('gebruiker.index'); //Loop alle gebuikers in het gebruiker pagina
