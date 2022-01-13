<?php

use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\SettingController;
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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
    Route::group(['as' => 'admin.', 'middleware' => 'auth:admin', 'prefix' => 'admin'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::group(['prefix' => 'settings'], function () {
            Route::get('shipping-methods/{type}', [SettingController::class, 'editShippingMethods'])->name('edit.shipping.methods');
            Route::put('/shipping-methods-update/{type}', [SettingController::class, 'updateShippingMethods'])->name('update.shipping.methods');
        });

        Route::group(['prefix' => 'profile'], function () {
            Route::get('edit', [ProfileController::class, 'editProfile'])->name('edit.profile');
            Route::put('update', [ProfileController::class, 'updateProfile'])->name('update.profile');
        });
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });
    Route::group([ 'middleware' => 'guest:admin', 'prefix' => 'admin'], function () {
        Route::get('login', [AuthController::class, 'login'])->name('admin.login');
        Route::post('post-login', [AuthController::class, 'postLogin'])->name('admin.post.login');
    });
});
