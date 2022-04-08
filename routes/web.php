<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DataPembayaranController;
use App\Http\Controllers\DatabayarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


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
    return view('index');
});

//Route Login Register
Route::get('/login',[LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate'])->name('login');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/registerr',[RegisterController::class, 'registerr'])->name('registerr')->middleware('guest');
Route::post('/registerr',[RegisterController::class, 'store'])->name('registerr');

Route::get('/register',[RegisterController::class, 'register'])->name('register');


// profile admin

Route::get('/profil/profilesekolah{id}',[EmployeeController::class, 'profilesekolah'])->name('profilesekolah');
Route::post('/updateprofilesekolah/{id}',[EmployeeController::class, 'updateprofilesekolah'])->name('updateprofilesekolah');
Route::get('/profil/editprofilesekolah{id}',[EmployeeController::class, 'editprofilesekolah'])->name('editprofilesekolah');

Route::get('/admin/dashboard',[DashboardController::class, 'admin'])->name('admin')->middleware('auth');


// data siswa admin

Route::get('/datas/datasiswa',[EmployeeController::class, 'index'])->name('datasiswa');
Route::get('/tambahdata',[EmployeeController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata');
Route::get('/datas/tampildata{id}',[EmployeeController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete');
Route::get('/datas/profilesiswa{id}',[EmployeeController::class, 'profilesiswa'])->name('profilesiswa');

Route::get('/datas/filterdatasiswa', function () {
    return view('admin.datas.filterdatasiswa');
});


// data bayar 

Route::get('/pembayaran/datapembayaran',[DataPembayaranController::class, 'datapembayaran'])->name('datapembayaran');
Route::get('/deletedata/{id}',[DataPembayaranController::class, 'deletedata'])->name('deletedata');
Route::get('/pembayaran/editdatapembayaran{id}',[DataPembayaranController::class, 'editdatapembayaran'])->name('editdatapembayaran');
Route::post('/updatedatapembayaran/{id}',[DataPembayaranController::class, 'updatedatapembayaran'])->name('updatedatapembayaran');

Route::get('/pembayaran/filterdatapembayaran', function () {
    return view('admin.pembayaran.filterdatapembayaran');
});


// setting kelas X

Route::get('/settingg/kelas_x',[EmployeeController::class, 'kelas_x'])->name('kelas_x');
Route::get('/settingg/editdatakelas_x{id}',[EmployeeController::class, 'editdatakelasx'])->name('editdatakelasx');
Route::post('/updatekelas_x/{id}',[EmployeeController::class, 'updatekelas_x'])->name('updatekelas_x');
Route::get('/delete/{id}',[EmployeeController::class, 'deletedatakelas_x'])->name('delete');


// setting kelas XI

Route::get('/settingg/kelas_xi',[EmployeeController::class, 'kelas_xi'])->name('kelas_xi');
Route::get('/settingg/editdatakelas_XI{id}',[EmployeeController::class, 'editdatakelasxi'])->name('editdatakelasxi');
Route::post('/updatekelas_xi/{id}',[EmployeeController::class, 'updatekelas_xi'])->name('updatekelas_xi');
Route::get('/delete/{id}',[EmployeeController::class, 'deletedatakelas_xi'])->name('delete');


// setting kelas XI

Route::get('/settingg/kelas_xii',[EmployeeController::class, 'kelas_xii'])->name('kelas_xii');
Route::get('/settingg/editdatakelas_Xll{id}',[EmployeeController::class, 'editdatakelasxii'])->name('editdatakelasxii');
Route::post('/updatekelas_xii/{id}',[EmployeeController::class, 'updatekelas_xii'])->name('updatekelas_xii');
Route::get('/delete/{id}',[EmployeeController::class, 'deletedatakelas_xii'])->name('deletedata');


// history admin

Route::get('/history/historypembayaran{id}',[EmployeeController::class, 'historypembayaran'])->name('historypembayaran');
Route::get('/history/filterhistory', function () {
    return view('admin.history.filterhistory');
});


// admin editsandi

Route::get('/admin/profil/editsandi', function () {
    return view('admin.profil.editsandi');
});


// user dashboard

Route::get('user/dashboard{id}',[EmployeeController::class, 'dashboard'])->name('dashboard');


// profile user

Route::get('user/profil/profilesiswa{id}',[EmployeeController::class, 'profileuser'])->name('profilesiswa');
Route::get('user/profil/editprofilesiswa{id}',[EmployeeController::class, 'editprofilesiswa'])->name('editprofilesiswa');
Route::post('/updateprofilesiswa/{id}',[EmployeeController::class, 'updateprofilesiswa'])->name('updateprofilesiswa');
Route::get('user/profil/profilesekolah{id}',[EmployeeController::class, 'profilesekolahuser'])->name('profilesekolah');


// tagihan pembayaran user

Route::get('user/bayar/tagihanpembayaran{id}',[EmployeeController::class, 'tagihanpembayaran'])->name('tagihanpembayaran');
Route::get('user/bayar/bayarspp{id}',[EmployeeController::class, 'bayarspp'])->name('bayarspp');
Route::get('user/laporan/laporanpembayaran{id}',[EmployeeController::class, 'laporanpembayaran'])->name('laporanpembayaran');
Route::get('user/bayar/konfirmasi{id}',[EmployeeController::class, 'konfirmasi'])->name('konfirmasi');

Route::get('/user/bayar/tagihanpembayaran', function () {
    return view('user.bayar.tagihanpembayaran');
});


// user editsandi

Route::get('/user/profil/editsandi', function () {
    return view('user.profil.editsandi');
});



