<?php

use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::group(['as' => 'admin.','middleware' => 'auth:admin'],function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});


Route::group(['as' => 'admin.','middleware' => 'guest:admin'],function(){
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::post('post-login',[AuthController::class,'postLogin'])->name('post.login');
});

