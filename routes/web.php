<?php

use Illuminate\Support\Facades\Route;
use App\Models\Posts;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DashboardOwnerController;

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



Route::get('/posts',[PostController::class,'yaya']);


Route::get('/landing',[PostController::class, 'call']);

Route::get('/home',[PostController::class, 'kenalan']);

Route::get('/posts/{id}',[PostController::class,'show']);




Route::group(['middleware' => ['auth','ceklevel:admin,owner']],function(){

    Route::get('/dashboard', [DashboardPostController::class,'homeD']); 

    Route::resource('/dashboard/posts',DashboardPostController::class) ; 
    Route::delete('/dashboard/posts/{id}',[DashboardPostController::class,'destroy']);
    Route::get('/dashboard/posts/{id}/edit',[DashboardPostController::class,'edit']);
    Route::post('/dashboard/posts/{id}/edit',[DashboardPostController::class,'update']);

    Route::get('/dashboard/penjualan',[PenjualanController::class,'penjualan']);
    Route::get('/dashboard/penjualan/createdata',[DashboardPostController::class,'createdata']);
    Route::delete('/dashboard/penjualan/{id}',[PenjualanController::class,'destroy']);

    

});

Route::group(['middleware' => ['auth','ceklevel:owner']],function(){;
    Route::get('/dashboard/register',[RegisterController::class,'index']);
    Route::post('/dashboard/register',[RegisterController::class,'store']);
    Route::delete('/dashboard/register/{id}',[RegisterController::class,'destroy']);

});







Route::post('/dashboard/penjualan',[PenjualanController::class,'store']);

Route::get('/login',[LoginController::class,'index']) -> name('login');
Route::post('/loginUser',[LoginUserController::class,'authenticate']);
Route::get('/loginuser',[LoginUserController::class,'index']) -> name('login');
Route::get('/registeruser',[RegisterUserController::class,'index']);

Route::post('/registerUser',[RegisterUserController::class,'store']);


Route::get('/buatpesanan',[PemesananController::class,'createpesanan']);
Route::get('/terimakasih',[PemesananController::class,'terimakasih']);
Route::post('/buatpesanan',[PemesananController::class,'store']);
    

Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);



    
        


