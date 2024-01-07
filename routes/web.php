<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\StokBarangController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/Barang', [BarangController::class, 'index'])->name('Barang');
    Route::get('/Barang/create', [BarangController::class, 'create'])->name('Barang.create');
    Route::post('/Barang', [BarangController::class, 'store'])->name('Barang.store');
    Route::delete('/Barang/{id}', [BarangController::class, 'destroy'])->name('Barang.destroy');
    Route::get('/Barang/{id}/edit',[BarangController::class, 'edit'])->name('Barang.edit');
    Route::match(['put', 'patch'], '/barang/{id}',[BarangController::class, 'update'])->name('Barang.update');
   
});
Route::middleware('auth')->group(function () {
    Route::get('/BarangKeluar', [BarangKeluarController::class, 'index'])->name('BarangKeluar');
    Route::get('/BarangKeluar/create', [BarangKeluarController::class, 'create'])->name('BarangKeluar.create');
    Route::post('/BarangKeluar', [BarangKeluarController::class, 'store'])->name('BarangKeluar.store');
    Route::delete('/BarangKeluar/{id}', [BarangKeluarController::class, 'destroy'])->name('BarangKeluar.destroy');
    Route::get('/BarangKeluar/{id}/edit',[BarangKeluarController::class, 'edit'])->name('BarangKeluar.edit');
    Route::match(['put', 'patch'], '/BarangKeluar/{id}',[BarangKeluarController::class, 'update'])->name('BarangKeluar.update');
    
});
Route::middleware('auth')->group(function () {
    Route::get('/BarangKeluar', [BarangKeluarController::class, 'index'])->name('BarangKeluar');
    Route::get('/BarangKeluar/create', [BarangKeluarController::class, 'create'])->name('BarangKeluar.create');
    Route::post('/BarangKeluar', [BarangKeluarController::class, 'store'])->name('BarangKeluar.store');
    Route::delete('/BarangKeluar/{id}', [BarangKeluarController::class, 'destroy'])->name('BarangKeluar.destroy');
    Route::get('/BarangKeluar/{id}/edit',[BarangKeluarController::class, 'edit'])->name('BarangKeluar.edit');
    Route::match(['put', 'patch'], '/BarangKeluar/{id}',[BarangKeluarController::class, 'update'])->name('BarangKeluar.update');
    Route::get('/get-nama-barang', [BarangKeluarController::class, 'getNamaBarangByKodeBarang']);  

});
//barang masuk
Route::middleware('auth')->group(function () {
    Route::get('/BarangMasuk', [BarangMasukController::class, 'index'])->name('BarangMasuk');
    Route::get('/BarangMasuk/create', [BarangMasukController::class, 'create'])->name('BarangMasuk.create');
    Route::post('/BarangMasuk', [BarangMasukController::class, 'store'])->name('BarangMasuk.store');
    Route::delete('/BarangMasuk/{id}', [BarangMasukController::class, 'destroy'])->name('BarangMasuk.destroy');
    Route::get('/BarangMasuk/{id}/edit',[BarangMasukController::class, 'edit'])->name('BarangMasuk.edit');
    Route::match(['put', 'patch'], '/BarangMasuk/{id}',[BarangMasukController::class, 'update'])->name('BarangMasuk.update');
    Route::get('/get-nama-barang', [BarangMasukController::class, 'getNamaBarangByKodeBarang']);
});

Route::middleware('auth')->group(function () {
    Route::get('/BarangMasuk', [BarangMasukController::class, 'index'])->name('BarangMasuk');
    Route::get('/BarangMasuk/create', [BarangMasukController::class, 'create'])->name('BarangMasuk.create');
    Route::post('/BarangMasuk', [BarangMasukController::class, 'store'])->name('BarangMasuk.store');
    Route::delete('/BarangMasuk/{id}', [BarangMasukController::class, 'destroy'])->name('BarangMasuk.destroy');
    Route::get('/BarangMasuk/{id}/edit',[BarangMasukController::class, 'edit'])->name('BarangMasuk.edit');
    Route::match(['put', 'patch'], '/BarangMasuk/{id}',[BarangMasukController::class, 'update'])->name('BarangMasuk.update');
    Route::get('/get-nama-barang', [BarangMasukController::class, 'getNamaBarangByKodeBarang']);
    Route::get('/BarangMasuk/print', [BarangMasukController::class, 'print'])->name('BarangMasuk.print');

});
Route::middleware('auth')->group(function () {
    Route::get('/StokBarang', [StokBarangController::class, 'index'])->name('StokBarang');
    Route::get('/StokBarang/print', [StokBarangController::class, 'print'])->name('StokBarang.print');
    Route::get('/StokBarang/export', [StokBarangController::class, 'export'])->name('StokBarang.export');
});




require __DIR__.'/auth.php';
