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

Route::get('/', function () {
    return view('welcome');
});


Route::get('artist/lists', 'ArtistController@list');
Route::get('artist/lists_with_genre', 'ArtistController@listWithGenre');
Route::get('artist/common_funs', 'ArtistController@commonFuns');

Route::any('users/signup', function () {
    return view('signup');
});
Route::any('users/sign_up', 'UsersController@signup');

Route::any('users/login', function () {
    return view('login');
});
Route::any('users/log_in', 'UsersController@login');
Route::any('users/logout', 'UsersController@logout');

Route::any('users/rate', 'UsersController@rate');
Route::get('users/find_playlist', 'UsersController@findPlaylist');

Route::get('track/search', 'TrackController@search');





