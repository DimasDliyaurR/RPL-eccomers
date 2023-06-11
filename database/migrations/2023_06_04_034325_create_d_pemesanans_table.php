<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('d_pemesanans', function (Blueprint $table) {
            $table->id('id_d_pemesanan');
            $table->foreignId('id_produk');
            $table->foreignId('id_pemesanan');
            $table->integer('jumlah');
            $table->decimal('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_pemesanans');
    }
};
