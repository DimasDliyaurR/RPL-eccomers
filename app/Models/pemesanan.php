<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanans';
    protected $primaryKey = 'id_pemesanan';

    protected $fillable = [
        'id_pemesanan',
        'id_user',
        'id_keranjang',
        'tanggal_pemesanan',
        'total_harga',
    ];  

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
