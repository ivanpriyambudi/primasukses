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


//////////////////////////////////////////////////////////////////////////////////////// Admin
Route::get('admin/dashboard', 'AdminController@dashboard')
->name('AdminDashboard')->middleware('auth:admin');

//////////////////////////////////////////////////////////////////////////////////////// Siswa
Route::get('siswa/dashboard', 'SiswaController@dashboard')
->name('SiswaDashboard')->middleware('auth:user');


