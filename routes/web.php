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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page/home');
});

// Auth::routes();
Route::get('/homeadmin', 'HomeController@indexadmin')->name('indexadmin');
Route::get('/aboutedit', 'HomeController@aboutedit')->name('aboutedit');
Route::post('aboutupdate', 'HomeController@aboutupdate')->name('aboutupdate');
Route::get('/productedit', 'HomeController@productedit')->name('productedit');
Route::get('/teamedit', 'HomeController@teamedit')->name('teamedit');
Route::get('/producttambah', 'HomeController@producttambah')->name('producttambah');
Route::get('/teamtambah', 'HomeController@teamtambah')->name('teamtambah');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/ourproduct', 'HomeController@ourproduct')->name('ourproduct');