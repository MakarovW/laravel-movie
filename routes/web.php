<?php

use App\Http\Controllers\MovieController;
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
    //return view('welcome');
    return redirect('/movies');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('movies', App\Http\Controllers\MovieController::class);
Route::resource('casts', App\Http\Controllers\CastController::class);
Route::resource('movies.comments', App\Http\Controllers\CommentController::class)->shallow();

Route::post('/movies/{movie:id}/cast_store', [MovieController::class, 'movie_cast_store'])->name('movie_cast_store');
Route::delete('/movies/{movie:id}/casts/{cast:id}', [MovieController::class, 'movie_cast_destroy'])->name('movie_cast_destroy');
