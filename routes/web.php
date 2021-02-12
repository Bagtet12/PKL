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

Route::post('/producttambah', 'HomeController@create')->name('postproduct');
Route::get('/productedit/{id}', 'HomeController@productedit')->name('productedit');
Route::post('/saveedit/{id}', 'HomeController@saveedit')->name('saveproductedit');
Route::get('/producttambah', 'HomeController@producttambah')->name('producttambah');

Route::get('/teamtambah', 'HomeController@teamtambah')->name('teamtambah');
Route::post('/teampost', 'HomeController@create_team')->name('postteam');
Route::get('/teamedit/{id}', 'HomeController@teamedit')->name('teamedit');
Route::post('/teamsave/{id}', 'HomeController@teamsave')->name('teamsave');

Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/ourproduct', 'HomeController@ourproduct')->name('ourproduct');