<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class appController extends Controller
{
    public function index()
    {
        $produk = DB::table('produks')
        ->select('produks.*','kategoris.nama_kategori')
        ->join('kategoris','kategoris.id','=','produks.id_kategori')
        ->get();

        return view("home.main",[
            'produk' => $produk
        ]);
    }
}