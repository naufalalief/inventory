<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
// Route::get('/vendors', [App\Http\Controllers\VendorsController::class, 'show'])->name('vendors.view');
Route::get('/vendors/update', [App\Http\Controllers\VendorsController::class, 'edit'])->name('vendors.update');
Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/list-vendor', [\App\Http\Controllers\VendorsController::class, 'index'])->name('vendors.view');
    Route::get('/list-barang', [\App\Http\Controllers\InventoryController::class, 'index'])->name('barang.view');
    Route::get('/list-transaksi', [\App\Http\Controllers\TransaksiController::class, 'index'])->name('trx.view');
    Route::get('/list-pembelian', [\App\Http\Controllers\PembelianController::class, 'index'])->name('pembelian.view');

});
Route::group(['middleware' =>  ['role:user']], function () {
});
Route::group(['middleware' =>  ['role:admin']], function () {
    // routes that require the admin role
});
