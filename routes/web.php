<?php

use App\Models\Galerie;
use App\Models\Inscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ArticleImageController;

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


Route::get('/',[AcceuilController::class, 'index'])->name('acceuil'); 
Route::resource('inscription', InscriptionController::class);



Auth::routes();



//Route pour Articles
Route::get('/all_articles',[ArticleController::class, 'affiche'])->name('article.affiche');
Route::get('article_detail/{article}', [ArticleController::class, 'detail'])->name('article.detail');
//Routes pour la galerie
Route::get('/all_galerie_images',[GalerieController::class, 'affiche'])->name('galerie.affiche');
Route::get('/galerie_images_detail/{galerie}',[GalerieController::class, 'detail'])->name('galerie.detail');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('article', ArticleController::class);
    Route::resource('galerie', GalerieController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

