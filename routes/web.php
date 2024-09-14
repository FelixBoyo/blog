<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
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
// Route for displaying articles
Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');

// Route for storing a new article (or post)
Route::post('/article', [PostController::class, 'store'])->name('article.store');


Route::get('/', function () {
    return view('welcome');
});


