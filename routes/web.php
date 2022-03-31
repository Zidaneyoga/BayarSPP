<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/datasiswa',[EmployeeController::class, 'index'])->name('datasiswa');

Route::get('/tambahdata',[EmployeeController::class, 'tambahdata'])->name('tambahdata');

Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata');

Route::get('admin/tampildata{id}',[EmployeeController::class, 'tampildata'])->name('tampildata');

Route::get('admin/profilesiswa{id}',[EmployeeController::class, 'profilesiswa'])->name('profilesiswa');

Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete');

Route::get('admin/historypembayaran{id}',[EmployeeController::class, 'historypembayaran'])->name('historypembayaran');

Route::get('admin/profilesekolah{id}',[EmployeeController::class, 'profilesekolah'])->name('profilesekolah');

Route::post('/updateprofilesekolah/{id}',[EmployeeController::class, 'updateprofilesekolah'])->name('updateprofilesekolah');

Route::get('admin/editprofilesekolah{id}',[EmployeeController::class, 'editprofilesekolah'])->name('editprofilesekolah');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/filterdatasiswa', function () {
    return view('admin.filterdatasiswa');
});

Route::get('/admin/filterdatapembayaran', function () {
    return view('admin.filterdatapembayaran');
});

Route::get('admin/datapembayaran',[EmployeeController::class, 'datapembayaran'])->name('datapembayaran');

Route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete');

Route::get('admin/editdatapembayaran{id}',[EmployeeController::class, 'editdatapembayaran'])->name('editdatapembayaran');

Route::post('/updatedatapembayaran/{id}',[EmployeeController::class, 'updatedatapembayaran'])->name('updatedatapembayaran');

Route::get('/admin/kelas_x', function () {
    return view('admin.kelas_x');
});

Route::get('/admin/kelas_xi', function () {
    return view('admin.kelas_xi');
});

Route::get('/admin/kelas_xii', function () {
    return view('admin.kelas_xii');
});

Route::get('/admin/filterhistory', function () {
    return view('admin.filterhistory');
});


Route::get('/admin/editsandi', function () {
    return view('admin.editsandi');
});

Route::get('user/profilesiswa{id}',[EmployeeController::class, 'profileuser'])->name('profilesiswa');

Route::get('user/editprofilesiswa{id}',[EmployeeController::class, 'editprofilesiswa'])->name('editprofilesiswa');

Route::post('/updateprofilesiswa/{id}',[EmployeeController::class, 'updateprofilesiswa'])->name('updateprofilesiswa');

Route::get('user/dashboard{id}',[EmployeeController::class, 'dashboard'])->name('dashboard');


Route::get('user/profilesekolah{id}',[EmployeeController::class, 'profilesekolahuser'])->name('profilesekolah');

Route::get('/user/tagihanpembayaran', function () {
    return view('user.tagihanpembayaran');
});

Route::get('user/tagihanpembayaran{id}',[EmployeeController::class, 'tagihanpembayaran'])->name('tagihanpembayaran');

Route::get('user/bayarspp{id}',[EmployeeController::class, 'bayarspp'])->name('bayarspp');

Route::get('user/laporanpembayaran{id}',[EmployeeController::class, 'laporanpembayaran'])->name('laporanpembayaran');

Route::get('/user/editsandi', function () {
    return view('user.editsandi');
});