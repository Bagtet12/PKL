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

// Route::get('/', function () {
//     return view('page/home');
// });

Route::get('/', 'HomeUserController@home')->name('home');
Route::get('/homeadmin', 'HomeadminController@indexadmin')->name('indexadmin');
Route::get('/aboutedit', 'HomeadminController@aboutedit')->name('aboutedit');
Route::post('aboutupdate', 'HomeadminController@aboutupdate')->name('aboutupdate');

Route::post('/producttambah', 'HomeadminController@create')->name('postproduct');
Route::get('/productedit/{id}', 'HomeadminController@productedit')->name('productedit');
Route::post('/saveedit/{id}', 'HomeadminController@saveedit')->name('saveproductedit');
Route::get('/producttambah', 'HomeadminController@producttambah')->name('producttambah');
Route::get('/productdelete/{id}', 'HomeadminController@productdelete')->name('productdelete');

Route::get('/teamtambah', 'HomeadminController@teamtambah')->name('teamtambah');
Route::post('/teampost', 'HomeadminController@create_team')->name('postteam');
Route::get('/teamedit/{id}', 'HomeadminController@teamedit')->name('teamedit');
Route::post('/teamsave/{id}', 'HomeadminController@teamsave')->name('teamsave');
Route::get('/teamdelete/{id}', 'HomeadminController@teamdelete')->name('teamdelete');


Route::get('/portfolio', 'HomeadminController@portfolio')->name('portfolio');
Route::get('/ourproduct', 'HomeadminController@ourproduct')->name('ourproduct');
Auth::routes();
// Route::get('/homeadmin', 'HomeadminController@indexadmin')->name('indexadmin');
