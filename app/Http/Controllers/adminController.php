<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        $produk = DB::table('produks')
            ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
            ->select('produks.*', 'kategoris.nama_kategori')
            ->get();

        return view('admin/produk/lihat-produk',[
            "tittle" => "Lihat Produk"
        ],compact('produk'));
    }

    public function index_produk_dtl($id)
    {
        $produk = DB::table('produks')
            ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
            ->select('produks.*', 'kategoris.nama_kategori')
            ->where('produks.id', $id) // Menambahkan kondisi WHERE berdasarkan ID produk
            ->first(); // Menggunakan first() untuk mengambil hanya satu hasil

        if (!$produk) {
        // Handle jika produk dengan ID tersebut tidak ditemukan
        abort(404);
        }
        return view('admin/produk/produk-dtl',[
            "tittle" => "Lihat Produk"
        ],compact('produk'));
    }

    public function index_tambah_produk()
    {
        return view('admin/produk/tambah-produk',[
            "tittle" => "Tambah Produk"
        ]); 
    }
    
    public function index_tambah_stok()
    {
        $produk = Produk::all();
        return view('admin/produk/tambah-stok',[
            "tittle" => "Tambah Stok"
        ],compact('produk'));
    }  

    public function index_produk_edit($id)
    {
        $produk = DB::table('produks')
            ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
            ->select('produks.*', 'kategoris.nama_kategori')
            ->where('produks.id', $id) // Menambahkan kondisi WHERE berdasarkan ID produk
            ->first(); // Menggunakan first() untuk mengambil hanya satu hasil

        if (!$produk) {
            // Handle jika produk dengan ID tersebut tidak ditemukan
            abort(404);
        }
        return view('admin/produk/produk-edit',[
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
