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

Route::get('/ourproduct_page_admin', 'ourproduct_page_admin_controller@c_ourproduct_page_admin')->name('ourproduct_page_admin');
Route::post('/eventtambah', 'ourproduct_page_admin_controller@create_event')->name('eventtambah');
Route::get('/eventmanagementtambah', 'ourproduct_page_admin_controller@eventmanagement_tambah')->name('eventmanagementtambah');
Route::get('/eventmanagementedit/{id}', 'ourproduct_page_admin_controller@eventmanagement_edit')->name('eventmanagementedit');
Route::post('/eventsave/{id}', 'ourproduct_page_admin_controller@saveevent')->name('eventsave');
Route::get('/eventdelete/{id}', 'ourproduct_page_admin_controller@eventdelete')->name('eventdelete');

Route::post('/influencer_tambah', 'ourproduct_page_admin_controller@create_influencer')->name('influencer_tambah');
Route::get('/influencertambah', 'ourproduct_page_admin_controller@influencertambah')->name('influencertambah');
Route::get('/influenceredit/{id}', 'ourproduct_page_admin_controller@influencer_edit')->name('influenceredit');
Route::post('/influencersave/{id}', 'ourproduct_page_admin_controller@saveinfluencer')->name('influencersave');
Route::get('/influencerdelete/{id}', 'ourproduct_page_admin_controller@influencerdelete')->name('influencerdelete');

Route::get('/teamtambah', 'HomeadminController@teamtambah')->name('teamtambah');
Route::post('/teampost', 'HomeadminController@create_team')->name('postteam');
Route::get('/teamedit/{id}', 'HomeadminController@teamedit')->name('teamedit');
Route::post('/teamsave/{id}', 'HomeadminController@teamsave')->name('teamsave');
Route::get('/teamdelete/{id}', 'HomeadminController@teamdelete')->name('teamdelete');


Route::get('/portfolio', 'HomeUserController@portfolio')->name('portfolio');
Route::get('/ourproduct', 'HomeadminController@ourproduct')->name('ourproduct');


Route::get('/ourproduct_page', 'HomeUserController@ourproduct_page')->name('page_product');
Route::post('/ourproduct_page_post', 'HomeUserController@ourproduct_page')->name('post_page_product');


Auth::routes();
// Route::get('/homeadmin', 'HomeadminController@indexadmin')->name('indexadmin');
