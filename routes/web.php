<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

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
    return view('login');
});

Route::controller(appController::class)->group(function(){
    Route::get('/','index');
});



Route::middleware('auth')->group(function () {

    Route::controller(ProfileController::class)->group(function (){
        Route::get('/profile','edit')->name('profile.edit');
        Route::patch('/profile','update')->name('profile.update');
        Route::delete('/profile','destroy')->name('profile.destroy');
    });


});

Route::middleware('admin')->group(function () {

    Route::controller(adminController::class)->group(function(){
        Route::get('/dashboard', 'index_dashboard');

        // Tabel Produk
        Route::get('/dashboard/lihat-produk', 'index_lihat_produk');

        Route::get('/dashboard/tambah-produk', 'index_tambah_produk');
        Route::post('/dashboard/tambah-produk/tambah', 'main_tambah_produk');

        Route::get('/dashboard/lihat-produk/produk-dtl', 'index_produk_dtl');

        Route::get('/dashboard/edit-produk/{id}', 'index_update_produk');
        Route::post('/dashboard/edit-produk-update/{id}', 'main_update_produk');

        Route::get('/dashboard/tambah-stok', 'index_tambah_stok');
        Route::post('/dashboard/tambah-stok/{id}', 'main_tambah_stok');

        // Tabel Order
        Route::get('/dashboard/order-masuk', 'index_order_masuk');
        Route::get('/dashboard/order-terkirim', 'index_order_terkirim');

        // Tebel User
        Route::get('/dashboard/user', 'index_user');
        Route::get('/dashboard/user/user-dtl', 'index_user_dtl');

        // Tabel Kategori
        Route::get('/dashboard/kategori-lihat','index_kategori_lihat');
        Route::get('/dashboard/kategori-tambah','index_kategori_tambah');
        Route::post('/dashboard/kategori-tambah/tambah','main_kategori_tambah');
        Route::post('/dashboard/kategori-update/{id}','main_kategori_update');
        

})->name('dashboard');

});
require __DIR__.'/auth.php';
