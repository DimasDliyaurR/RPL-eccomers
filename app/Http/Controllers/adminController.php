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

    public function index_lihat_produk(Request $request)
    {
        $search = $request->input('search');

        if ($search != "") {
            // Jika form pencarian tidak kosong, cari produk berdasarkan nama_produk
            $produk = DB::table('produks')
                ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
                ->select('produks.*', 'kategoris.nama_kategori')
                ->where('nama_produk', 'LIKE', '%'.$search.'%')
                ->get();
        }else {
            $produk = DB::table('produks')
            ->select('produks.*', 'kategoris.nama_kategori')
            ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
            ->get();
        }

        return view('admin.produk.lihat-produk',[
            "tittle" => "Lihat Produk"
        ],compact('produk'));
    }

    public function index_produk_dtl($id)
    {
        $produk = DB::table('produks')
            ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
            ->select('produks.*', 'kategoris.nama_kategori')
            ->where('produks.id_produk', $id) // Menambahkan kondisi WHERE berdasarkan ID produk
            ->first(); // Menggunakan first() untuk mengambil hanya satu hasil

        if (!$produk) {
        // Handle jika produk dengan ID tersebut tidak ditemukan
        abort(404);
        }
        return view('admin.produk.produk-dtl',[
            "tittle" => "Lihat Produk"
        ],compact('produk'));
    }

    public function index_tambah_produk()
    {
        return view('admin.produk.tambah-produk',[
            "tittle" => "Tambah Produk"
        ]); 
    }
    
    public function main_tambah_produk(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'id_kategori' => 'required',
            'gambar' => 'required',
            'stok' => 'required|numeric|min:0',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'required',
        ], [
            'stok.min' => 'Stok tidak boleh kurang dari 0.',
            'harga.min' => 'Harga tidak boleh kurang dari 0.',
        ]);
    
        $gambar = $request->file('gambar');
        $path = null;
    
        if ($gambar) {
            $path = $gambar->store('public/gambar');
        }
    
        DB::table('produks')->insert([
            'nama_produk' => $request->nama_produk,
            'id_kategori' => $request->id_kategori,
            'gambar' => $path,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
        ]);
        
        return redirect('/dashboard/lihat-produk');
    }


    public function index_tambah_stok(Request $request)
    {
        $search = $request->input('search');

        if ($search != "") {
            // Jika form pencarian tidak kosong, cari produk berdasarkan nama_produk
            $produk = DB::table('produks')
                ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
                ->select('produks.*', 'kategoris.nama_kategori')
                ->where('nama_produk', 'LIKE', '%'.$search.'%')
                ->get();
        }else {
            $produk = Produk::all();
        }

        return view('admin.produk.tambah-stok',[
            "tittle" => "Tambah Stok"
        ],compact('produk'));
    }  

    public function main_tambah_stok(Request $request,$id)
    {
        $produk = DB::table('produks')->where('id_produk', $request->$id)->first();
        
    
        $newStok = $produk->stok + $request->stok;    
        if ($request->stok <= 0) {
            return redirect('/dashboard/tambah-stok')->with('error', 'Nilai stok yang ditambahkan harus lebih besar dari 0.');
        }
    
        DB::table('produks')->where('id_produk', $request->id_produk)->update(['stok' => $newStok]);
        return redirect('/dashboard/tambah-stok')->with('success', 'Stok berhasil ditambahkan.');
    }

    public function index_produk_edit($id)
    {
        $produk = DB::table('produks')
            ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
            ->select('produks.*', 'kategoris.nama_kategori')
            ->where('produks.id_produk', $id) 
            ->first(); 

        if (!$produk) {
            abort(404);
        }
        return view('admin.produk.produk-edit',[
            "tittle" => "Lihat Produk"
        ],compact('produk'));
    }

    public function main_produk_edit(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'id_kategori' => 'required',
            'stok' => 'required|numeric|min:0',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'required',
        ], [
            'stok.min' => 'Stok tidak boleh kurang dari 0.',
            'harga.min' => 'Harga tidak boleh kurang dari 0.',
        ]);

        $produk = Produk::find($id);
        $gambarLama = $produk->gambar;
        
        $gambarBaru = $request->file('gambar');
        $path = null;
        if ($gambarBaru) {
            $path = $gambarBaru->store('public/gambar');
        }

        DB::table('produks')->where('id_produk', $id)->update([
            'nama_produk' => $request->nama_produk,
            'id_kategori' => $request->id_kategori,
            'gambar' => $path ? $path : $gambarLama,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
        ]);

        if ($gambarLama && $gambarLama !== $path) {
            Storage::delete($gambarLama);
    }
        return redirect('/dashboard/lihat-produk/produk-edit/'.$id);
    }

    public function main_produk_delete($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        
        return redirect('/dashboard/lihat-produk');
    }

    // Tabel Order

    public function index_order_masuk()
    {
        return view('admin.order.order-masuk',[
            "tittle" => "Order Masuk"
        ]);
    }

    public function index_order_terkirim()
    {
        return view('admin.order.order-terkirim',[
            "tittle" => "Order Terkirim"
        ]);
    }

    // Tabel User

    public function index_user()
    {
        return view('admin.user.user',[
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

    // Tabel Kategoris

    public function index_kategori_lihat()
    {
        return view("admin.kategori.kategori-lihat");
    }


}
