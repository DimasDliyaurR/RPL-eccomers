<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /* Tambah produk */
    public function addNew(Request $request)
    {

        //upload gammbar
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);

        DB::table('produks')->insert([
        'nama_produk' => $request->nama_produk,
        'id_kategori' => $request->id_kategori,
        // $imageName => $request->image,
        'stok' => $request->stok,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi
        ]);
        return redirect('lihat-produk');
    }

    //masih error
    public function updateProduk(Request $request, $id){
        $produk = Produk::find($id);
        // Update data dengan nilai baru
        $produk->update($request->all());

        return redirect('lihat-produk');
    }

    // masi error
    public function dltProduk($id){
        DB::table('produks')->where('id',$id)->delete();
        return redirect('lihat-produk');
    }
}
