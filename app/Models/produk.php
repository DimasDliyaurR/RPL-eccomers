<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillable = ['nama_produk', 'harga', 'stok', 'deskripsi', 'gambar', 'kategori_id'];
}
