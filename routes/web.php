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

//////////////////////////////////////////////////////////////////////////////////////// Landing Page
Route::get('/', function () {
	return view('landing.home');
})->name('Home');

Route::get('/about', 'HomeController@about')
->name('HomeAbout');

Route::get('/artikel', 'HomeController@artikel')
->name('HomeArtikel');

Route::get('/artikel-detail', 'HomeController@artikel_detail')
->name('HomeArtikelDetail');

Route::get('/paket', 'HomeController@paket')
->name('HomePaket');

Route::get('/contact', 'HomeController@contact')
->name('HomeContact');

Route::get('/join-us', 'HomeController@join')
->name('HomeJoin')->middleware('guest');
Route::post('/login', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::post('/regis', 'LoginController@register');


//////////////////////////////////////////////////////////////////////////////////////// Admin

/////////////////////////////////////////////////////////////////////// Show
Route::get('admin/dashboard', 'AdminController@dashboard')
->name('AdminDashboard')->middleware('auth:admin');

Route::get('admin/paket', 'AdminController@show_paket')
->name('AdminShowPaket')->middleware('auth:admin');

Route::get('admin/artikel', 'AdminController@show_artikel')
->name('AdminShowArtikel')->middleware('auth:admin');

Route::get('admin/user', 'AdminController@show_user')
->name('AdminShowUser')->middleware('auth:admin');

Route::get('admin/feedback', 'AdminController@show_feedback')
->name('AdminShowfFedback')->middleware('auth:admin');

/////////////////////////////////////////////////////////////////////// Add
Route::get('admin/tambah-paket', 'AdminController@show_add_paket')
->name('AdminAddPaket')->middleware('auth:admin');

Route::get('admin/tambah-artikel', 'AdminController@show_add_artikel')
->name('AdminAddArtikel')->middleware('auth:admin');

Route::get('admin/tambah-user', 'AdminController@show_add_user')
->name('AdminAddUser')->middleware('auth:admin');

//////////////////////////////////////////////////////////////////////////////////////// Siswa
Route::get('user/dashboard', 'SiswaController@dashboard')
->name('SiswaDashboard')->middleware('auth:user');


