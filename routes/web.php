<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PegawaiController;
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

Route::get('/',[DashboardController::class,'index']);

//route barang
Route::get('/daftar-barang', [BarangController::class, 'index'])->name('barang');
Route::post('/daftar-barang/baru', [BarangController::class, 'tambah']);
Route::get('/daftar-barang/edit/{product}', [BarangController::class, 'edit']);
Route::post('/daftar-barang/edit/{product}', [BarangController::class, 'editJadi']);
Route::get('/daftar-barang/hapus/{product}', [BarangController::class, 'hapus']);
Route::post('/daftar-barang/hapus/{product}', [BarangController::class, 'hapusJadi']);
Route::get('/barang-deleted', [BarangController::class, 'deletedBarang']);

//route kategori
Route::get('/kategori-barang', [KategoriController::class, 'index']);
Route::post('/kategori-barang/tambah', [KategoriController::class, 'tambah']); 
Route::get('/kategori-barang/edit/{category}', [KategoriController::class, 'edit']);
Route::post('/kategori-barang/edit/{category}', [KategoriController::class, 'editJadi']);
Route::get('/kategori-barang/hapus/{category}', [KategoriController::class, 'hapus']);
Route::post('/kategori-barang/hapus/{category}', [KategoriController::class, 'hapusJadi']);

//route akun
Route::get('/akun-pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/akun-pegawai/hapus/{pegawai}', [PegawaiController::class, 'hapus']);
Route::post('/akun-pegawai/hapus/{pegawai}', [PegawaiController::class, 'hapusJadi']);

Route::get('/akun-pegawai/detail/', function (){
    return view('detailPegawai');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
