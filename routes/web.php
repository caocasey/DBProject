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

//render views
Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/createPlaylist', function () {
    return view('createPlaylist');
});
Route::any('users/signup', function () {
    return view('signup');
});
Route::any('users/login', function () {
    return view('login');
});
Route::any('forgot', function () {
    return view('forgot');
});

//user related routers
Route::any('mymusic', 'UsersController@mymusic');
Route::any('playlist/follow/{uname}', 'UsersController@follow');
Route::any('playlist/unfollow/{uname}', 'UsersController@unfollow');
Route::any('users/account', 'UsersController@info');
Route::any('users/log_in', 'UsersController@login');
Route::any('/logout', 'UsersController@logout');
Route::any('users/sign_up', 'UsersController@signup');
Route::any('users/forgot', 'UsersController@forgot');
Route::any('users/rate', 'UsersController@rate');
Route::get('users/find_playlist', 'UsersController@findPlaylist');
Route::any('users/likes', 'UsersController@likes');
Route::any('users/follow', 'UsersController@follow');

//playlist related routers
Route::any('create_Playlist', 'PlaylistController@createPlaylist');
Route::any('addtoplaylist/{tid}', 'PlaylistController@addTrack');
Route::any('adding', 'PlaylistController@adding');
Route::any('playlist/{pid}', 'PlaylistController@list');
Route::any('playlistplay/{pid}', 'PlaylistController@playlistplay');

//artist related routers
Route::any('artist/info/{aid}', 'ArtistController@info');
Route::get('artist/lists', 'ArtistController@list');
Route::get('artist/lists_with_genre', 'ArtistController@listWithGenre');
Route::get('artist/common_funs', 'ArtistController@commonFuns');
Route::any('artist/like/{aid}', 'ArtistController@like');
Route::any('artist/unlike/{aid}', 'ArtistController@unlike');


//track related router
Route::any('search', 'TrackController@search');
Route::get('index', 'TrackController@numbers');
Route::any('trackplay/{tid}', 'TrackController@trackplay');
Route::any('albumplay/{alid}', 'AlbumController@albumplay');
Route::any('rate/{tid}', 'TrackController@prerate');
Route::any('tracks/rate', 'TrackController@rate');




