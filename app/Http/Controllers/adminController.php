<?php

namespace App\Http\Controllers;

use App\Models\kategori;
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
            ->select('produks.*', 'kategoris.nama_kategori')
            ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
            ->get();

        return view('admin.produk.lihat-produk',[
            "tittle" => "Lihat Produk"
        ],compact('produk'));
    }

    public function index_produk_dtl($id)
    {
        $produk = DB::table('produks')
            ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id_kategori')
            ->select('produks.*', 'kategoris.nama_kategori')
            ->where('produks.id', $id) // Menambahkan kondisi WHERE berdasarkan ID produk
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
        
        // upload gambar

        $data = [
        'nama_produk' => $request->nama_produk,
        'id_kategori' => $request->id_kategori,
        'gambar' => $request->file('image')->store('public/img'),
        'stok' => $request->stok,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi
        ];
        // dd($data);

        DB::table('produks')->insert($data);

        return redirect('/dashboard/lihat-produk');
    }



    public function index_tambah_stok()
    {
        $produk = Produk::all();
        return view('admin.produk.tambah-stok',[
            "tittle" => "Tambah Stok"
        ],compact('produk'));
    }  

    public function main_tambah_stok(Request $request){
        $produk = Produk::findOrFail($request->id);
        $newStok = $produk->stok + $request->stok;
        
        // Update Stok
        $produk->update(['stok'=>$newStok]);
        return redirect('/dashboard/tambah-stok');
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
        return view('admin.produk.produk-edit',[
            "tittle" => "Lihat Produk"
        ],compact('produk'));
    }

    public function main_produk_edit(Request $request, $id)
    {
        $produk = Produk::find($id);
        $gambarLama = $produk->image;
        
        // Mengunggah dan menyimpan gambar baru jika diunggah
        $gambarBaru = $request->file('image');
        $path = null;
        if ($gambarBaru) {
            $path = $gambarBaru->store('public/image');
        }
        $data = [
            'nama_produk' => $request->nama_produk,
            'id_kategori' => $request->id_kategori,
            'gambar' => $path ? $path : $gambarLama, // Menggunakan gambar baru jika diunggah, jika tidak tetap menggunakan gambar lama
            'stok' => $request->stok,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
        ];


        DB::table('produks')->where('id', $id)->update($data);

        // Menghapus gambar lama setelah memperbarui entri produk
        if ($gambarLama && $gambarLama !== $path) {
            Storage::delete($gambarLama);
    }
        return redirect('/dashboard/lihat-produk/produk-edit/'.$id);
    }

    public function main_produk_delete($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        
        return redirect('dashboard.lihat-produk');
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
        return view("admin.kategori.kategori-lihat",[
            "tittle" => "Kategori Lihat",
            "produk" => kategori::all()
        ]);
    }
    
    public function index_kategori_tambah()
    {
        return view("admin.kategori.kategori-tambah",[
            "tittle" => "Kategori Tambah"
        ]);
    }


}
