<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;

    protected $table = 'rating';

    protected $fillable = [
        'id_rating',
        'id_produk',
        'id_user',
        'komentar',
        'nilai',
    ];
}
