<?php

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/artists', 'Artists@index');

Route::get('/artists/artist_detail/{id}','Artists@artist_detail')->name('artist_detail');

Route::get('/','Anasayfa@index');

Route::get('/albums','Albums@index');

Route::get('/album/detail/{id}','Albums@detail')->name('detail');
?>
