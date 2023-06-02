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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->group(function () {

    Route::controller(adminController::class)->group(function(){
        Route::get('/dashboard', 'index_dashboard');

        // Tabel Produk
        Route::get('/dashboard/lihat-produk', 'index_lihat_produk');
        Route::get('/dashboard/tambah-produk', 'index_tambah_produk');
        Route::get('/dashboard/lihat-produk/produk-dtl', 'index_produk_dtl');
        Route::get('/dashboard/tambah-stok', 'index_tambah_stok');

        // Produk Order
        Route::get('/dashboard/order-masuk', 'index_order_masuk');
        Route::get('/dashboard/order-terkirim', 'index_order_terkirim');

        // Produk User
        Route::get('/dashboard/user', 'index_user');
        Route::get('/dashboard/user/user-dtl', 'index_user_dtl');
})->name('dashboard');

    // Route::get('/dashboard', function () {
    //     return view('admin/dashboard',[
    //         "tittle" => "Dashboard"
    //     ]);
    // })->middleware(['auth', 'verified'])->name('dashboard');;
    
    // Route::get('/dashboard/lihat-produk', function () {
    //     return view('admin/lihat-produk',[
    //         "tittle" => "Lihat Produk"
    //     ]);
    // });
    // Route::get('/dashboard/lihat-produk/produk-dtl', function () {
    //     return view('admin/produk-dtl',[
    //         "tittle" => "Lihat Produk"
    //     ]);
    // });
    Route::get('/dashboard/lihat-produk/produk-edit', function () {
        return view('admin/produk-edit',[
            "tittle" => "Lihat Produk"
        ]);
    });
    
    // Route::get('/dashboard/tambah-produk', function () {
    //     return view('admin/tambah-produk',[
    //         "tittle" => "Tambah Produk"
    //     ]);
    // });
    
    // Route::get('/dashboard/tambah-stok', function () {
    //     return view('admin/tambah-stok',[
    //         "tittle" => "Tambah Stok"
    //     ]);
    // });
    
    // Route::get('/dashboard/order-masuk', function () {
    //     return view('admin/order-masuk',[
    //         "tittle" => "Order Masuk"
    //     ]);
    // });
    
    // Route::get('/dashboard/order-terkirim', function () {
    //     return view('admin/order-terkirim',[
    //         "tittle" => "Order Terkirim"
    //     ]);
    // });
    
    // Route::get('/dashboard/user', function () {
    //     return view('admin/user',[
    //         "tittle" => "Akun User"
    //     ]);
    // });
    
    // Route::get('/dashboard/user/user-dtl', function () {
    //     return view('admin/user-dtl',[
    //         "tittle" => "User Detail"
    //     ]);
    // });

});
require __DIR__.'/auth.php';
