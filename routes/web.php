<?php

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

// Route::get('/', function () {
   // return view('auth.login');
// });

// Auth::routes();

// Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/', function () {
    return view('index');
});

Route::get('/user', function () {
    return view('User.user');
});

Route::get('/tables', function () {
    return view('User.pembayaran.tables');
});

Route::get('/login', function () {
    return view('auth.login_user.login');
});

Route::get('/register', function () {
    return view('auth.login_user.register');
});

Route::get('/profile_sekolah', function () {
    return view('User.profil.profile_sekolah');
});

Route::get('/myprofile', function () {
    return view('User.profil.myprofile');
});

Route::get('/laporan', function () {
    return view('User.pembayaran.laporan');
});

Route::get('/konfirmasi', function () {
    return view('User.pembayaran.konfirmasi');
});

Route::get('/invoice', function () {
    return view('User.pembayaran.invoice');
});

Route::get('/forgot-password', function () {
    return view('User.profil.forgot-password');
});

Route::get('/editsandi', function () {
    return view('User.profil.editsandi');
});

Route::get('/editprofil', function () {
    return view('User.profil.editprofil');
});

Route::get('/atur', function () {
    return view('User.atur');
});

Route::get('/bayar', function () {
    return view('User.pembayaran.bayar');
});

Route::get('/admin', function () {
    return view('Admin.admin');
});

Route::get('/tabless', function () {
    return view('Admin.pembayaran.tabless');
});

Route::get('/aturr', function () {
    return view('auth.login_admin.aturr');
});

Route::resource('/dashboard/data-siswa', 'SiswaController');

Route::get('/dataspp', function () {
    return view('Admin.dataspp.dataspp');
});

Route::get('/dataspp2', function () {
    return view('Admin.dataspp.dataspp2');
});

Route::get('/edit_siswa', function () {
    return view('Admin.datasiswa.edit_siswa');
});

Route::get('/editbayar', function () {
    return view('Admin.pembayaran.editbayar');
});

Route::get('/editprofile', function () {
    return view('Admin.profil.editprofile');
});

Route::get('/editsandii', function () {
    return view('Admin.profil.editsandii');
});

Route::get('/forgot-passwordd', function () {
    return view('auth.login_admin.forgot-passwordd');
});

Route::get('/history', function () {
    return view('Admin.pembayaran.history');
});

Route::get('/historypembayaran', function () {
    return view('Admin.pembayaran.historypembayaran');
});

Route::get('/kelas_X', function () {
    return view('Admin.setting.kelas_X');
});

Route::get('/kelas_XI', function () {
    return view('Admin.setting.kelas_XI');
});

Route::get('/kelas_XII', function () {
    return view('Admin.setting.kelas_XII');
});

Route::get('/kelas_xrpl', function () {
    return view('Admin.kelas_xrpl');
});

Route::get('/loginn', function () {
    return view('auth.login_admin.loginn');
});

Route::get('/myprofilee', function () {
    return view('Admin.profil.myprofilee');
});

Route::get('/profile_siswa', function () {
    return view('Admin.profil.profile_siswa');
});

Route::get('/registerr', function () {
    return view('auth.login_admin.registerr');
});

Route::get('/setting_pembayaran', function () {
    return view('Admin.setting.setting_pembayaran');
});