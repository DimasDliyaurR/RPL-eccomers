<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table = 'produks';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
    'nama_produk', 
    'id_kategori',
    'harga', 
    'stok', 
    'deskripsi', 
    'gambar', 
];
}
