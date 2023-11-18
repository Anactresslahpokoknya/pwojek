<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//siswa
Route::get('LS', function () {return view('Siswa.Login');});
Route::get('IndexSiswa', function () {return view('Siswa.IndexSiswa');});
Route::get('siswa', [SiswaController::class, 'login']);
Route::post('siswa', [SiswaController::class, 'ceklogin']);

//admin
Route::get('LA', function () {return view('Admin.Login');});
Route::get('IndexAdmin', function () {return view('Admin.IndexAdmin');});
Route::get('datasiswa', function () {return view('Admin.DataSiswa');});
Route::get('admin', [AdminController::class, 'LoginAdmin']);
Route::post('admin', [AdminController::class, 'LoginAdminCek']);
Route::get('pp', function () {return view('Admin.EntriTransaksiPembayaran');});
Route::get('jk', [AdminController::class, 'lk']);
Route::get('ppo', [AdminController::class, 'Entry']);
Route::get('jjk', [AdminController::class, 'validasi']);
Route::get('jokowi', [AdminController::class, 'dtspp']);
Route::get('megawatichan', [AdminController::class, 'dtptgs']);
Route::get('luhut', [AdminController::class, 'dtkls']);
Route::get('mahfud', [AdminController::class, 'laporan']);
Route::get('ln', [AdminController::class, 'LandoNorris']);
Route::get('mx', [AdminController::class, 'pk']);
Route::get('max', [AdminController::class, 'MaxVerstappen']);
Route::get('vv', [AdminController::class, 'gf']);
Route::get('alphatauri', [AdminController::class, 'Grussel']);
Route::get('mercedes', [AdminController::class, 'hamilton']);
Route::get('mclaren', [AdminController::class, 'OscarPiastri']);
Route::get('laren', [AdminController::class, 'norris']);
Route::get('siswa/hapus/{nisn}',[AdminController::class,'hapus']);
Route::get('petugas/hapus/{id_petugas}',[AdminController::class,'hapus1']);
Route::get('kelas/hapus/{id_kelas}',[AdminController::class,'hapus2']);
Route::get('spp/hapus/{id_spp}',[AdminController::class,'hapus3']);
Route::get('bayarh/hapus/{id_pembayaran}',[AdminController::class,'hapus4']);
Route::get('siswa/edit/{nisn}',[AdminController::class,'edit']);