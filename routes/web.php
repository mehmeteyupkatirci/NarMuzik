<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
Auth::routes();

Route::get('spotify/login', 'SpotifyController@login');
Route::get('spotify/me', 'SpotifyController@me');
Route::get('spotify/search', 'SpotifyController@search');
Route::get('spotify/artist/{id}', 'SpotifyController@artist');
Route::get('spotify/artist/{id}/related', 'SpotifyController@artistRelated');
Route::get('spotify/artists/{id}', 'SpotifyController@artists');
Route::get('spotify/artist/albums/{id}', 'SpotifyController@artistAlbums');
Route::get('spotify/album/{id}', 'SpotifyController@album');
Route::get('spotify/albums/{id}', 'SpotifyController@albums');
Route::get('spotify/album/{id}/tracks', 'SpotifyController@albumTracks');
Route::get('spotify/track/{id}', 'SpotifyController@track');
Route::get('spotify/tracks/{id}', 'SpotifyController@tracks');

Route::group(['middleware'=>['adjustLocale']],function(){
    Route::get('/artists', 'Artists@index');

    Route::get('/artists/artist_detail/{id}','Artists@artist_detail')->name('artist_detail');
    
    Route::get('/','Anasayfa@index');
    
    Route::get('/albums','Albums@index');
    
    Route::post('/changeLanguage',function(Request $request){
        $language = $request->input('language');
        session(['language'=>$language]);
    });

    Route::get('/album/detail/{id}','Albums@detail')->name('detail');
    
    Route::get('/track','Tracks@index');

    Route::get('/track/detail/{id}','Tracks@index')->name('track_detail');
});

Route::group(['middleware'=>['auth']],function(){
   Route::get('/playlist/create','Playlists@create');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{id}','UserController@profile')->name('user.profile');

Route::get('/playlist','Playlists@index');

Route::resource('playlist','Playlists');
?>
