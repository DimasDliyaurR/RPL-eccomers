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
        Route::get('/dashboard/lihat-produk', 'index_lihat_produk'); // Liat data produk

        Route::get('/dashboard/tambah-produk', 'index_tambah_produk');   // Tambah Produk
        Route::post('/dashboard/tambah-produk/addNew','main_tambah_produk'); // tambah

        Route::delete('/dashboard/lihat-produk/dltProduk/{id}','main_produk_delete'); // Delete
        Route::post('/dashboard/lihat-produk/produk-edit/updProduk/{id}','main_produk_edit'); // update

        Route::get('/dashboard/tambah-stok', 'index_tambah_stok');  // tambah stok
        Route::post('/dashboard/tambah-stok/tmbStok/{id}','main_tambah_stok'); // Tambah Stok

        Route::get('/dashboard/lihat-produk/produk-dtl/{id}', 'index_produk_dtl');  //lihat detail produk
        Route::get('/dashboard/lihat-produk/produk-edit/{id}', 'index_produk_edit'); // form edit
        
    
        // Produk Order
        Route::get('/dashboard/order-masuk', 'index_order_masuk');
        Route::get('/dashboard/order-detail/{id}', 'index_order_detail');
        Route::get('/dashboard/order-terkirim', 'index_order_terkirim');
    
        // Produk User
        Route::get('/dashboard/user', 'index_user');
        Route::get('/dashboard/user-dtl', 'index_user_dtl');
        
        // insert data produk
    // Tambah Stok

})->name('dashboard');
Route::get('/index', [PemesananController::class, 'pemesanan'])->name('index.pemesanan');

Route::get('/kirim', [PemesananController::class, 'selectPemesananDikirim'])->name('index.selectPemesananDikirim');

Route::post('/index/updateStatus/{id}', [PemesananController::class, 'updateStatus'])->name('index.pemesanan');

Route::get('/detail/{id}', [PemesananController::class, 'detail_pemesanan'])->name('detail.detail_pemesanan');


});

Route::controller(ProdukController::class)->group(function(){
    
});
require __DIR__.'/auth.php';
