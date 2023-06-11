<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class d_pemesanan extends Model
{
    use HasFactory;

    protected $table = 'd_pemesanan';
    protected $fillable = [
        'id_pemesanan',
        'id_produk',
        'jumlah',
        'harga',
    ];
}
