<?php

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

# Home Page
Route::get('/', ['as' => 'beeflix.api.home.page', 'uses' => 'HomeController@home']);

Route::group(['prefix' => '/movies'], function () {
    # Movie Detail Page
    Route::get('/detail/{movieId}', ['as' => 'beeflix.api.movie-detail.page', 'uses' => 'DetailController@detail'])->where('movieId', '[0-9]+');
    # Movie By Genre Category Page
    Route::get('/category/{genreId}', ['as' => 'beeflix.api.movies-by-genre.page', 'uses' => 'CategoryController@category'])->where('genreId', '[0-9]+');
});




