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

// Route::get('/', function () {
//     return view('page/home');
// });
Route::get('/', 'HomeUserController@home')->name('home');
Route::post('/producttambah', 'HomeController@create')->name('postproduct');
Route::get('/homeadmin', 'HomeController@indexadmin')->name('indexadmin');
Route::get('/aboutedit', 'HomeController@aboutedit')->name('aboutedit');
Route::get('/productedit', 'HomeController@productedit')->name('productedit');
Route::get('/teamedit', 'HomeController@teamedit')->name('teamedit');
Route::get('/producttambah', 'HomeController@producttambah')->name('producttambah');
Route::get('/teamtambah', 'HomeController@teamtambah')->name('teamtambah');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/ourproduct', 'ourproduct_controller@index')->name('ourproduct');