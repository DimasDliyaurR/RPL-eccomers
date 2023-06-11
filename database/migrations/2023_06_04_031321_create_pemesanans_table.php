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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id('id_pemesanan');
            $table->foreignId('user_id')->constrainted();
            $table->foreignId('keranjang_id')->constrained();
            $table->timestamp('tanggal_pemesanan')
            ->nullable()
            ->useCurrent();
            $table->enum('status', ['Belum Dikirim', 'Dikirim'])->nullable()->default('Belum Dikirim');
            $table->decimal('total_harga');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
