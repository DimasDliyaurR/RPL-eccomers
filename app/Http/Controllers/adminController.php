<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Produk;
use App\Models\Pemesanan;

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
        $pemesanan = Pemesanan::join('users', 'users.id', '=', 'pemesanans.user_id')
            ->join('profiles', 'users.id', '=', 'profiles.id_user')
            ->select('users.first_name', 'users.last_name', 'profiles.alamat', 'pemesanans.*', 'pemesanans.id_pemesanan')
            ->where('pemesanans.status', 'Belum Dikirim')
            ->get();
    
        
        return view('admin.order.order-masuk', [
            "tittle" => "Order Masuk"
        ], compact('pemesanan'));
    }
    

    public function index_order_detail($id)
    {
        $pemesanan = DB::table('d_pemesanans')
            ->join('pemesanans', 'pemesanans.id_pemesanan', '=', 'd_pemesanans.id_pemesanan')
            ->join('produks', 'produks.id_produk', '=', 'd_pemesanans.id_produk')
            ->join('kategoris', 'kategoris.id', '=', 'produks.id_kategori')
            ->join('users', 'users.id', '=', 'pemesanans.user_id')
            ->select('d_pemesanans.*','d_pemesanans.harga as total', 'produks.nama_produk', 'produks.harga', 'kategoris.nama_kategori')
            ->where('pemesanans.id_pemesanan', $id) 
            ->get(); 
        
        return view('admin.order.order-detail', [
            "tittle" => "Order Masuk", "title" => "Order Terkirim"
        ], compact('pemesanan'));
    }
    

    public function index_order_terkirim()
    {
        $pemesanan = Pemesanan::join('users', 'users.id', '=', 'pemesanans.user_id')
            ->join('profiles', 'users.id', '=', 'profiles.id_user')
            ->select('users.first_name', 'users.last_name', 'profiles.alamat', 'pemesanans.*', 'pemesanans.id_pemesanan')
            ->where('pemesanans.status', 'Dikirim')
            ->get();

        return view('admin.order.order-terkirim',[
            "tittle" => "Order Terkirim"
        ],compact('pemesanan'));
    }

    public function updateStatus($id) {
        DB::table('pemesanans')->where('id_pemesanan', $id)->update([
            'status' => 'Dikirim'
        ]);
        return redirect('/dashboard/order-terkirim');
    }

    // Tabel User

    public function index_user(Request $request)
    {
        $search = $request->input('search');
    
        if ($search != "") {
            $users = DB::table('users')
                ->where('users.first_name', 'LIKE', '%'.$search.'%')
                ->orWhere('users.last_name', 'LIKE', '%'.$search.'%')
                ->get();
        } else {
            $users = User::all();
        }
        
        return view('admin.user.user', [
            "tittle" => "Akun User",
            "users" => $users
        ]);
    }
    

    public function index_user_dtl($id)
    {
        $user = User::join('profiles', 'users.id', '=', 'profiles.id_user')
            ->where('users.id', $id)
            ->select('users.first_name', 'users.username','users.last_name', 'users.email', 'profiles.*')
            ->first();
    
        return view('admin/user/user-dtl', [
            "tittle" => "User Detail"
        ], compact('user'));
    }
    
    

    // Tabel Kategoris

    public function index_kategori_lihat()
    {
        return view("admin.kategori.kategori-lihat");
    }


}
