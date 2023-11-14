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
Route::get('/', function () {return view('Siswa.Login');});
Route::get('IndexSiswa', function () {return view('Siswa.IndexSiswa');});
Route::get('siswa', [SiswaController::class, 'login']);
Route::post('siswa', [SiswaController::class, 'ceklogin']);

//admin
Route::get('/', function () {return view('Admin.Login');});
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