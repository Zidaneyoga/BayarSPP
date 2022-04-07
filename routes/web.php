<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DataPembayaranController;
use App\Http\Controllers\DatabayarController;


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

// profile admin

Route::get('admin/profilesekolah{id}',[EmployeeController::class, 'profilesekolah'])->name('profilesekolah');
Route::post('/updateprofilesekolah/{id}',[EmployeeController::class, 'updateprofilesekolah'])->name('updateprofilesekolah');
Route::get('admin/editprofilesekolah{id}',[EmployeeController::class, 'editprofilesekolah'])->name('editprofilesekolah');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});


// data siswa admin

Route::get('admin/datasiswa',[EmployeeController::class, 'index'])->name('datasiswa');
Route::get('/tambahdata',[EmployeeController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata');
Route::get('admin/tampildata{id}',[EmployeeController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete');
Route::get('admin/profilesiswa{id}',[EmployeeController::class, 'profilesiswa'])->name('profilesiswa');

Route::get('/admin/filterdatasiswa', function () {
    return view('admin.filterdatasiswa');
});


// data bayar 

Route::get('admin/datapembayaran',[DataPembayaranController::class, 'datapembayaran'])->name('datapembayaran');
Route::get('/deletedata/{id}',[DataPembayaranController::class, 'deletedata'])->name('deletedata');
Route::get('admin/editdatapembayaran{id}',[DataPembayaranController::class, 'editdatapembayaran'])->name('editdatapembayaran');
Route::post('/updatedatapembayaran/{id}',[DataPembayaranController::class, 'updatedatapembayaran'])->name('updatedatapembayaran');

Route::get('/admin/filterdatapembayaran', function () {
    return view('admin.filterdatapembayaran');
});


// setting kelas X

Route::get('admin/kelas_x',[EmployeeController::class, 'kelas_x'])->name('kelas_x');
Route::get('admin/editdatakelas_x{id}',[EmployeeController::class, 'editdatakelasx'])->name('editdatakelasx');
Route::post('/updatekelas_x/{id}',[EmployeeController::class, 'updatekelas_x'])->name('updatekelas_x');
Route::get('/delete/{id}',[EmployeeController::class, 'deletedatakelas_x'])->name('delete');


// setting kelas XI

Route::get('admin/kelas_xi',[EmployeeController::class, 'kelas_xi'])->name('kelas_xi');
Route::get('admin/editdatakelas_XI{id}',[EmployeeController::class, 'editdatakelasxi'])->name('editdatakelasxi');
Route::post('/updatekelas_xi/{id}',[EmployeeController::class, 'updatekelas_xi'])->name('updatekelas_xi');
Route::get('/delete/{id}',[EmployeeController::class, 'deletedatakelas_xi'])->name('delete');


// setting kelas XI

Route::get('admin/kelas_xii',[EmployeeController::class, 'kelas_xii'])->name('kelas_xii');
Route::get('admin/editdatakelas_Xll{id}',[EmployeeController::class, 'editdatakelasxii'])->name('editdatakelasxii');
Route::post('/updatekelas_xii/{id}',[EmployeeController::class, 'updatekelas_xii'])->name('updatekelas_xii');
Route::get('/delete/{id}',[EmployeeController::class, 'deletedatakelas_xii'])->name('deletedata');


// history admin

Route::get('admin/historypembayaran{id}',[EmployeeController::class, 'historypembayaran'])->name('historypembayaran');
Route::get('/admin/filterhistory', function () {
    return view('admin.filterhistory');
});


// admin editsandi

Route::get('/admin/editsandi', function () {
    return view('admin.editsandi');
});


// user dashboard

Route::get('user/dashboard{id}',[EmployeeController::class, 'dashboard'])->name('dashboard');


// profile user

Route::get('user/profilesiswa{id}',[EmployeeController::class, 'profileuser'])->name('profilesiswa');
Route::get('user/editprofilesiswa{id}',[EmployeeController::class, 'editprofilesiswa'])->name('editprofilesiswa');
Route::post('/updateprofilesiswa/{id}',[EmployeeController::class, 'updateprofilesiswa'])->name('updateprofilesiswa');
Route::get('user/profilesekolah{id}',[EmployeeController::class, 'profilesekolahuser'])->name('profilesekolah');


// tagihan pembayaran user

Route::get('user/tagihanpembayaran{id}',[EmployeeController::class, 'tagihanpembayaran'])->name('tagihanpembayaran');
Route::get('user/bayarspp{id}',[EmployeeController::class, 'bayarspp'])->name('bayarspp');
Route::get('user/laporanpembayaran{id}',[EmployeeController::class, 'laporanpembayaran'])->name('laporanpembayaran');

Route::get('/user/tagihanpembayaran', function () {
    return view('user.tagihanpembayaran');
});


// user editsandi

Route::get('/user/editsandi', function () {
    return view('user.editsandi');
});



