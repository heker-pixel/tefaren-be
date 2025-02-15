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
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id_barang'); // Use id() method to create auto-incrementing primary key
            $table->mediumText('kode_barang')->index('kode_barang');
            $table->mediumText('nomor_barang')->index('nomor_barang');
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->mediumText('nama_barang')->index('nama_barang');
            $table->enum('ketersediaan_barang', ['Tersedia','Dipinjam','Pemeliharaan','Dihapuskan']);
            $table->enum('status_barang', ['baik','rusak']);
            $table->string('gambar_barang', 255);

            $table->foreign('id_kategori')->references('id_kategori')->on('kategori_barang');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
