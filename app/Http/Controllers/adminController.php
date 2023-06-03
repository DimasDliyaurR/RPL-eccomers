<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Produk;

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
        $produk = Produk::all();
        return view('admin/lihat-produk',[
            "tittle" => "Lihat Produk"
        ],compact('produk'));
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

    public function index_produk_edit($id)
    {
        $produk = Produk::find($id);
        return view('admin/produk-edit',[
            "tittle" => "Lihat Produk"
        ],compact('produk'));
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
