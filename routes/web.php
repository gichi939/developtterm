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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('develop/create', 'Admin\DevelopController@add');
     Route::post('develop/create', 'Admin\DevelopController@create'); 
     Route::get('develop', 'Admin\DevelopController@index');
     Route::get('develop/edit', 'Admin\DevelopController@edit');
     Route::post('develop/edit', 'Admin\DevelopController@update');
     Route::get('develop/delete', 'Admin\DevelopController@delete');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'NewsController@index');

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'movies/{id}'],function(){
       Route::post('favorite','FavoriteController@store')->name('favorites.favorite');
       Route::delete('unfavorite','FavoriteController@destroy')->name('favorites.unfavorite');
    });
});

