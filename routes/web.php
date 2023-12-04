<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::group(['middleware' => ['auth']],function(){

    Route::get('/article', [ArticleController::class, 'index'])->name('getarticle');
Route::post('/article', [ArticleController::class, 'store'])->name('postarticle');
Route::get('/tabarticle', [ArticleController::class, 'tab']);
Route::get('/editarticle/{id}', [ArticleController::class, 'edit']);
Route::post('/updatearticle', [ArticleController::class, 'update']);
Route::get('/deletearticle/{id}', [ArticleController::class, 'destroy']);
Route::get('/viewarticle/{id}', [ArticleController::class, 'show'])->name('getviewarticle');;



Route::get('/vendeur', [vendeurController::class, 'index'])->name('getvendeur');
Route::get('/tabvendeur', [vendeurController::class, 'tab'])->name('enregistrerr.vendeur');
Route::post('/vendeur', [vendeurController::class, 'store'])->name('postvendeur');
Route::get('/editvendeur/{id}', [vendeurController::class, 'edit']);
Route::post('/updatevendeur', [vendeurController::class, 'update']);
Route::get('/deletevendeur/{id}', [vendeurController::class, 'destroy']);
Route::get('/viewvendeur/{id}', [vendeurController::class, 'show']);
});


