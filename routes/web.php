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
// Route::get('/', function () {
// 	return view('landing.home');
// })->name('Home');

Route::get('/', 'HomeController@home')
->name('Home');

Route::get('/about', 'HomeController@about')
->name('HomeAbout');

Route::get('/artikel', 'HomeController@artikel')
->name('HomeArtikel');

Route::get('/artikel-detail/{id}', 'HomeController@artikel_detail')
->name('HomeArtikelDetail');

Route::get('/paket/sd', 'HomeController@paket_sd')
->name('HomePaketSD');

Route::get('/paket/smp', 'HomeController@paket_smp')
->name('HomePaketSMP');

Route::get('/paket/sma', 'HomeController@paket_sma')
->name('HomePaketSMA');

Route::get('/paket/detail/{id}', 'HomeController@paket_detail')
->name('HomePaketDetail');

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

Route::get('admin/pengajar', 'AdminController@show_pengajar')
->name('AdminShowPengajar')->middleware('auth:admin');

/////////////////////////////////////////////////////////////////////// Add
Route::get('admin/tambah-paket', 'AdminController@show_add_paket')
->name('AdminAddPaket')->middleware('auth:admin');
Route::post('admin/tambah-paket', 'AdminActionsController@addpaket')
->name('PostAddPaket')->middleware('auth:admin');

Route::get('admin/tambah-artikel', 'AdminController@show_add_artikel')
->name('AdminAddArtikel')->middleware('auth:admin');
Route::post('admin/tambah-artikel', 'AdminActionsController@addartikel')
->name('PostAddArtikel')->middleware('auth:admin');

Route::get('admin/tambah-user', 'AdminController@show_add_user')
->name('AdminAddUser')->middleware('auth:admin');

Route::get('admin/tambah-pengajar', 'AdminController@show_add_pengajar')
->name('AdminAddPengajar')->middleware('auth:admin');
Route::post('admin/tambah-pengajar', 'AdminActionsController@addpengajar')
->name('PostAddPengajar')->middleware('auth:admin');

Route::get('admin/tambah-about', 'AdminController@show_add_about')
->name('AdminAddAbout')->middleware('auth:admin');

Route::get('admin/tambah-contact', 'AdminController@show_add_contact')
->name('AdminAddContact')->middleware('auth:admin');

//////////////////////////////////////////////////////////////////////////////////////// Siswa
Route::get('user/dashboard', 'SiswaController@dashboard')
->name('SiswaDashboard')->middleware('auth:user');

Route::get('user/edit-profile', 'SiswaController@show_edit_profile')
->name('SiswaEditProfile')->middleware('auth:user');

Route::get('user/paket', 'SiswaController@show_paket')
->name('SiswaShowPaket')->middleware('auth:user');
Route::post('user/bimbel', 'UserActionsController@daftarbimbel')
->name('daftarbimbel')->middleware('auth:user');

Route::get('user/detail-paket/{id}', 'SiswaController@detail_paket')
->name('SiswaDetailPaket')->middleware('auth:user');
Route::post('user/feedback', 'UserActionsController@feedback')
->name('feedback')->middleware('auth:user');
Route::post('user/edit', 'UserActionsController@editprofile')
->name('editprofil')->middleware('auth:user');

//edit admin
Route::post('admin/edit-paket', 'AdminCrudController@editpaket')
->name('editpaket')->middleware('auth:admin');
Route::post('admin/edit-artikel', 'AdminCrudController@editartikel')
->name('editartikel')->middleware('auth:admin');
Route::post('admin/edit-pengajar', 'AdminCrudController@editpengajar')
->name('editpengajar')->middleware('auth:admin');
Route::post('admin/edit-user', 'AdminCrudController@edituser')
->name('edituser')->middleware('auth:admin');
//hapus
Route::get('admin/hapus-paket/{id}', 'AdminCrudController@hapuspaket')
->name('hapuspaket')->middleware('auth:admin');
Route::get('admin/hapus-artikel/{id}', 'AdminCrudController@hapusartikel')
->name('hapusartikel')->middleware('auth:admin');
Route::get('admin/hapus-pengajar/{id}', 'AdminCrudController@hapuspengajar')
->name('hapuspengajar')->middleware('auth:admin');
Route::get('admin/hapus-user/{id}', 'AdminCrudController@hapususer')
->name('hapususer')->middleware('auth:admin');
Route::get('admin/hapus-feedback/{id}', 'AdminCrudController@hapusfeedback')
->name('hapusfeedback')->middleware('auth:admin');


