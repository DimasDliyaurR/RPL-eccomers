<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /* Tambah produk */
    public function addNew(Request $request)
    {
        // upload gambar
        $gambar = $request->file('image');
        $path = null;
    
        if ($gambar) {
            $path = $gambar->store('public/image');
        }

        DB::table('produks')->insert([
        'nama_produk' => $request->nama_produk,
        'id_kategori' => $request->id_kategori,
        'image' => $path,
        'stok' => $request->stok,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi
        ]);
        return redirect('/dashboard/lihat-produk');
    }
    
    // Update Produk
    // public function updProduk(Request $request, $id){
    //     DB::table('produks')->where('id',$request->id)->update([
    //         'nama_produk' => $request->nama_produk,
    //         'id_kategori' => $request->id_kategori,
    //         // $imageName => $request->image,
    //         'stok' => $request->stok,
    //         'harga' => $request->harga,
    //         'deskripsi' => $request->deskripsi
    //     ]);
    //     return redirect('/dashboard/lihat-produk/produk-edit/'.$id);
    // }

    public function updProduk(Request $request, $id)
    {
        $produk = Produk::find($id);
        $gambarLama = $produk->image;
        
        // Mengunggah dan menyimpan gambar baru jika diunggah
        $gambarBaru = $request->file('image');
        $path = null;
        if ($gambarBaru) {
            $path = $gambarBaru->store('public/image');
        }

        // Memperbarui nilai-nilai lainnya dalam entri produk
        DB::table('produks')->where('id', $id)->update([
            'nama_produk' => $request->nama_produk,
            'id_kategori' => $request->id_kategori,
            'image' => $path ? $path : $gambarLama, // Menggunakan gambar baru jika diunggah, jika tidak tetap menggunakan gambar lama
            'stok' => $request->stok,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
        ]);

        // Menghapus gambar lama setelah memperbarui entri produk
        if ($gambarLama && $gambarLama !== $path) {
            Storage::delete($gambarLama);
    }
        return redirect('/dashboard/lihat-produk/produk-edit/'.$id);
    }


    // Delete Produk
    public function dltProduk($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        
        return redirect('/dashboard/lihat-produk');
    }

    // Tambah Stok
    public function tmbStok(Request $request){
        $produk = Produk::findOrFail($request->id);
        $newStok = $produk->stok + $request->stok;
        
        // Update Stok
        $produk->update(['stok'=>$newStok]);
        return redirect('/dashboard/tambah-stok');
    }
}
