<?php

use App\Http\Controllers\Admin\Data\BarangController;
use App\Http\Controllers\Admin\Data\GedungController;
use App\Http\Controllers\Admin\Data\RuanganController;
use App\Http\Controllers\Admin\Data\TanahController;
use App\Http\Controllers\Admin\Peminjaman\PeminjamanBarangController;
use App\Http\Controllers\Admin\Peminjaman\PeminjamanGedungController;
use App\Http\Controllers\Admin\Peminjaman\PeminjamanRuanganController;
use App\Http\Controllers\Admin\Peminjaman\PeminjamanTanahController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Routing\RouteGroup;
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

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route Auth

Route::get('/',[AuthController::class, 'index'])->name('auth.index');
Route::post('/',[AuthController::class, 'authanticate'])->name('auth.authen');
Route::get('/register',[AuthController::class, 'register'])->name('auth.register');
Route::post('/register',[AuthController::class, 'store'])->name('auth.store');
Route::post('/logout',[AuthController::class, 'logout'])->name('auth.logout');
Route::get('/reset',[AuthController::class, 'reset'])->name('auth.reset');

// Route Admiin
Route::get('/admin-dashboard',[DashboardController::class,'index'])->name('admin.dashboard');

// Route Gedung
Route::get('/admin-dashboard/Gedung',[GedungController::class,'index'])->name('gedung.index');
Route::get('/admin-dashboard/Gedung/add',[GedungController::class,'create'])->name('gedung.create');
Route::get('/admin-dashboard/Gedung/edit',[GedungController::class,'edit'])->name('gedung.edit');

// Route Ruangan
Route::get('/admin-dashboard/Ruangan',[RuanganController::class,'index'])->name('ruangan.index');
Route::get('/admin-dashboard/Ruangan/add',[RuanganController::class,'create'])->name('ruangan.add');
Route::get('/admin-dashboard/Ruangan/edit',[RuanganController::class,'edit'])->name('ruangan.edit');

// Route Tanah
Route::get('/admin-dashboard/Tanah',[TanahController::class,'index'])->name('tanah.index');
Route::get('/admin-dashboard/Tanah/add',[TanahController::class,'create'])->name('tanah.add');
Route::post('/admin-dashboard/Tanah/add',[TanahController::class,'store'])->name('tanah.store');
Route::get('/admin-dashboard/Tanah/edit',[TanahController::class,'edit'])->name('tanah.edit');

// Route Barang
Route::get('/admin-dashboard/Barang',[BarangController::class,'index'])->name('barang.index');
Route::get('/admin-dashboard/Barang/add',[BarangController::class,'create'])->name('barang.add');
Route::get('/admin-dashboard/Barang/edit',[BarangController::class,'edit'])->name('barang.edit');



// Route Peminjaman Barang
Route::get('/admin-dashboard/Peminjaman-Barang',[PeminjamanBarangController::class,'index'])->name('peminjamanBarang.index');
Route::get('/admin-dashboard/Peminjaman-Barang/add',[PeminjamanBarangController::class,'create'])->name('peminjamanBarang.add');

Route::get('/admin-dashboard/Peminjaman-Ruangan',[PeminjamanRuanganController::class,'index'])->name('peminjamanRuangan.index');
Route::get('/admin-dashboard/Peminjaman-Ruangan/add',[PeminjamanRuanganController::class,'create'])->name('peminjamanRuangan.add');

Route::get('/admin-dashboard/Peminjaman-Gedung',[PeminjamanGedungController::class,'index'])->name('peminjamanGedung.index');
Route::get('/admin-dashboard/Peminjaman-Gedung/add',[PeminjamanGedungController::class,'create'])->name('peminjamanGedung.add');

Route::get('/admin-dashboard/Peminjaman-Tanah',[PeminjamanTanahController::class,'index'])->name('peminjamanTanah.index');




// Route Pengguna
Route::get('/admin-dashboard/pengguna',[PenggunaController::class, 'index'])->name('pengguna.index');
Route::get('/admin-dashboard/pengguna/edit',[PenggunaController::class, 'edit'])->name('pengguna.edit');
Route::get('/admin-dashboard/pengguna/add',[PenggunaController::class, 'create'])->name('pengguna.add');

