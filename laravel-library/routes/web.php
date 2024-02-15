<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliothequeController;
use App\Http\Controllers\LivreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rechercher/{id}', [BibliothequeController::class, 'rechercher'])->name('rechercher');
Route::get('/editer/{id}', [BibliothequeController::class, 'editer'])->name('editer');
Route::post('/modifier/{id}', [BibliothequeController::class, 'modifier'])->name('modifier');
Route::get('/livres', [LivreController::class, 'index']);
Route::get('/livre/{id}', [BibliothequeController::class, 'show'])->name('livre.show');
