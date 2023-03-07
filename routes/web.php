<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\StokController;

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
    return view('home');
});

Route::get('/login',[LoginController::class,'landing'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'landing']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard',[DashboardController::class,'landing']);

Route::get('/dashboard/produk',[ProdukController::class,'index']);
Route::get('/dashboard/produk/tambah',[ProdukController::class,'tambah']);
Route::get('/dashboard/produk/{id}/edit',[ProdukController::class,'edit']);
Route::post('/dashboard/produk/tambah',[ProdukController::class,'store']);
Route::post('/dashboard/produk/{id}/edit',[ProdukController::class,'update']);
Route::delete('/dashboard/produk/{id}',[ProdukController::class,'destroy']);

Route::get('/dashboard/pegawai',[DashboardController::class,'pegawai']);
Route::get('/dashboard/pegawai/tambah',[PegawaiController::class,'index']);
Route::post('/dashboard/pegawai/tambah',[PegawaiController::class,'create']);
Route::post('/dashboard/pegawai/{id}/edit',[PegawaiController::class,'update']);
Route::get('/dashboard/pegawai/{id}/edit',[PegawaiController::class,'edit']);
Route::delete('/dashboard/pegawai/{id}',[PegawaiController::class,'destroy']);

Route::get('/dashboard/stok',[DashboardController::class,'stok']);
Route::get('/dashboard/stok/tambah',[StokController::class,'create']);
Route::post('/dashboard/stok/create',[StokController::class,'store']);
Route::get('/dashboard/stok/{namaPegawai}/{tanggal}/edit',[StokController::class,'edit']);
Route::post('/dashboard/stok/{namaPegawai}/{tanggal}/edit',[StokController::class,'update']);

