<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    // Table Produk

    // View produk
    public function index_dashboard()
    {
        return view('admin/dashboard',[
            "tittle" => "Dashboard"
        ]);
    }

    public function index_lihat_produk()
    {
        return view('admin/produk/lihat-produk',[
            "tittle" => "Lihat Produk"
        ]);
    }

    public function index_tambah_produk()
    {
        return view('admin/produk/produk-dtl',[
            "tittle" => "Tambah Produk"
        ]); 
    }

    public function index_tambah_stok()
    {
        return view('admin/produk/tambah-stok',[
            "tittle" => "Tambah Stok"
        ]);
    }  

    // Tabel Order


    public function index_order_masuk()
    {
        return view('admin/order/order-masuk',[
            "tittle" => "Order Masuk"
        ]);
    }

    public function index_order_terkirim()
    {
        return view('admin/order/order-terkirim',[
            "tittle" => "Order Terkirim"
        ]);
    }

    // Tabel User

    public function index_user()
    {
        return view('admin/user/user',[
            "tittle" => "User",
            'users' => User::all()
        ]);
    }

    public function index_user_dtl()
    {
        return view('admin/user/user-dtl',[
            "tittle" => "User Detail"
        ]);
    }


}
