<?php

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

use App\Http\Controllers\BlogPostController;

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< Updated upstream
=======

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', [\App\Http\Controllers\BlogPostController::class, 'index']);
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);
Route::get('/admin/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);
Route::get('/create', [\App\Http\Controllers\BlogPostController::class, 'create']); //shows create post form
Route::post('create', [\App\Http\Controllers\BlogPostController::class, 'store']); //shows create post form
Route::get('/admin/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit']); //shows edit post form
Route::put('/admin/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'update']); //commits edited post to the database
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']); //deletes post from the database

//Route::post('/games/{game}/reviews', 'ReviewsController@store');
>>>>>>> Stashed changes
