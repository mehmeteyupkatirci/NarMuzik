<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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


Route::group(['middleware'=>['adjustLocale']],function(){
    Route::get('/artists', 'Artists@index');

    Route::get('/artists/artist_detail/{id}','Artists@artist_detail')->name('artist_detail');
    
    Route::get('/','Anasayfa@index');
    
    Route::get('/albums','Albums@index');
    
    Route::post('/changeLanguage',function(Request $request){

        print_r($request->all());
    });

    Route::get('/album/detail/{id}','Albums@detail')->name('detail');
    
    Route::get('/track','Tracks@index');

    Route::get('/track/detail/{id}','Tracks@index')->name('track_detail');
});

Route::group(['middleware'=>['auth']],function(){
   
    //playlist ve takip ve like işlemleri bu grup altında olacak
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{id}','UserController@profile')->name('user.profile');

?>
