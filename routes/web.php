<?php

use App\Models\Inscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ArticleController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route pour Articles
Route::get('/all_articles',[ArticleController::class, 'affiche'])->name('article.affiche');
Route::get('article_detail/{article}', [ArticleController::class, 'detail'])->name('article.detail');

Route::group(['middleware' => ['auth']], function () {

    Route::resource('article', ArticleController::class);

});

