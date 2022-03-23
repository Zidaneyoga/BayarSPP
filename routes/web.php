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
    return view('auth.login');
// });

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::get('/user', function () {
    return view('sb-admin1.user');
});

Route::get('/tables', function () {
    return view('sb-admin1.tables');
});

Route::get('/login', function () {
    return view('sb-admin1.login');
});

Route::get('/register', function () {
    return view('sb-admin1.register');
});

Route::get('/profile_sekolah', function () {
    return view('sb-admin1.profile_sekolah');
});

Route::get('/myprofile', function () {
    return view('sb-admin1.myprofile');
});

Route::get('/laporan', function () {
    return view('sb-admin1.laporan');
});

Route::get('/konfirmasi', function () {
    return view('sb-admin1.konfirmasi');
});

Route::get('/invoice', function () {
    return view('sb-admin1.invoice');
});

Route::get('/forgot-password', function () {
    return view('sb-admin1.forgot-password');
});

Route::get('/editsandi', function () {
    return view('sb-admin1.editsandi');
});

Route::get('/editprofil', function () {
    return view('sb-admin1.editprofil');
});

Route::get('/atur', function () {
    return view('sb-admin1.atur');
});

Route::get('/bayar', function () {
    return view('sb-admin1.bayar');
});

Route::get('/admin', function () {
    return view('sb-admin2.admin');
});

Route::get('/tabless', function () {
    return view('sb-admin2.tabless');
});

Route::get('/aturr', function () {
    return view('sb-admin2.aturr');
});

Route::resource('/dashboard/data-siswa', 'SiswaController');

Route::get('/dataspp', function () {
    return view('sb-admin2.dataspp');
});

Route::get('/dataspp2', function () {
    return view('sb-admin2.dataspp2');
});

Route::get('/edit_siswa', function () {
    return view('sb-admin2.edit_siswa');
});

Route::get('/editbayar', function () {
    return view('sb-admin2.editbayar');
});

Route::get('/editprofile', function () {
    return view('sb-admin2.editprofile');
});

Route::get('/editsandii', function () {
    return view('sb-admin2.editsandii');
});

Route::get('/forgot-passwordd', function () {
    return view('sb-admin2.forgot-passwordd');
});

Route::get('/history', function () {
    return view('sb-admin2.history');
});

Route::get('/historypembayaran', function () {
    return view('sb-admin2.historypembayaran');
});

Route::get('/kelas_X', function () {
    return view('sb-admin2.kelas_X');
});

Route::get('/kelas_XI', function () {
    return view('sb-admin2.kelas_XI');
});

Route::get('/kelas_XII', function () {
    return view('sb-admin2.kelas_XII');
});

Route::get('/kelas_xrpl', function () {
    return view('sb-admin2.kelas_xrpl');
});

Route::get('/loginn', function () {
    return view('sb-admin2.loginn');
});

Route::get('/myprofilee', function () {
    return view('sb-admin2.myprofilee');
});

Route::get('/profile_siswa', function () {
    return view('sb-admin2.profile_siswa');
});

Route::get('/registerr', function () {
    return view('sb-admin2.registerr');
});

Route::get('/setting_pembayaran', function () {
    return view('sb-admin2.setting_pembayaran');
});