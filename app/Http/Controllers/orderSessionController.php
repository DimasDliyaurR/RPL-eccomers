<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderSessionController extends Controller
{
    public function index_detail($id)
    {
        $produk = DB::table('produks')->where('id_produk',$id)->get();
        return view("payment.detail",[
            'produk' => $produk
        ]);
    }

    public function index_home()
    {
        $produk = DB::table('produks')
        ->select('produks.*','kategoris.nama_kategori')
        ->join('kategoris','kategoris.id','=','produks.id_kategori')
        ->get();

        return view("home.main",[
            'produk' => $produk,
        ]);
    }

    public function index_cart_lihat()
    {
        $cart = DB::table('keranjangs')
        ->select('keranjangs.*','produks.nama_produk','produks.gambar','produks.deskripsi','kategoris.nama_kategori')
        ->join('produks','keranjangs.id_produk','=','produks.id_produk')
        ->join('kategoris','produks.id_kategori','=','kategoris.id')
        ->where('keranjangs.id_user',Auth::id())
        ->get();


        return view('payment.keranjang',[
            'cart' => $cart
        ]);
    }

    public function main_cart_tambah($id)
    {
        $produk = DB::table('produks')->where('id_produk',$id)->first();

        $data = [
            'id_produk' => $produk->id_produk,
            'id_user' => Auth::id(),
            'harga' => $produk->harga
        ];

        DB::table('keranjangs')->insert($data);

        return redirect('/');
    }
    
    public function main_cart_hapus($id)
    {

        DB::table('keranjangs')->where('id',$id)->delete();

        return redirect('/cart/'.Auth::id());
    }
}
