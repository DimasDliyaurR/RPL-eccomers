<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\produk;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            "tittle" => "Lihat Produk",
            "produk" => produk::all()
        ]);
    }

    public function index_tambah_produk()
    {
        return view('admin/produk/tambah-produk',[
            "tittle" => "Tambah Produk"
        ]); 
    }

    public function main_tambah_produk(Request $req)
    {
        $req->validate([
            'nama_produk' => 'required',
            'image' => 'required',
            'id_kategori' => 'required',
            'stok'=> 'required',
            'harga'=>'required',
            'deskripsi'=>'required'
        ]);

        $data = [
            'nama_produk' => $req->nama_produk,
            'gambar' => $req->image,
            'id_kategori' => $req->id_kategori,
            'stok'=> $req->stok,
            'harga'=>$req->harga,
            'deskripsi'=> $req->deskripsi
        ];

        DB::table('produks')->insert($data);

        return redirect('/dashboard/kategori-tambah');
    }

    public function index_update_produk($id)
    {
        $produk = DB::table('produks')->where('id_produk',$id)->first();
        return view('admin.produk.produk-edit',[
            'produk' => $produk,
            'tittle' => 'Lihat Produk'
        ]);
    }

    public function main_update_produk(Request $request, $id){
        DB::table('produks')->where('id_produk',$request->id)->update([
            'nama_produk' => $request->nama_produk,
            'id_kategori' => $request->id_kategori,
            // $imageName => $request->image,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/dashboard/lihat-produk');
    }


    public function index_tambah_stok()
    {
        return view('admin/produk/tambah-stok',[
            "tittle" => "Tambah Stok",
            "produk" => produk::all()
        ]);
    }  

    public function main_tambah_stok(Request $req)
    {
        $produk = DB::table('produks')->where('id_produk',$req->id)->first();
        $newstok = $produk->stok + $req->stok;
        DB::table('produks')->where('id_produk',$req->id)->update([
            'stok' => $newstok
        ]);

        return redirect('/dashboard/tambah-stok');
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

    // Tabel Kategori 

    public function index_kategori_lihat()
    {
        return view('admin.kategori.kategori-lihat',[
            'tittle' => "Kategori",
            'kategori' => kategori::all()
        ]);
    }

    public function index_kategori_tambah()
    {
        return view('admin.kategori.kategori-tambah',[
            'tittle' => "Tambah Kategori"
        ]);
    }

    public function main_kategori_tambah(Request $req)
    {   
        DB::table('kategoris')->insert([
            'nama_kategori'=> $req->nama_kategori
        ]);

        return redirect("dashboard/kategori-lihat");
    }

    public function main_kategori_update(Request $req , $id)
    { 
        DB::table('kategoris')
        ->where("id_kategori",$id)
        ->update([
            'nama_kategori'=> $req->nama_kategori
        ]);

        return redirect("dashboard/kategori-lihat");
    }

}
