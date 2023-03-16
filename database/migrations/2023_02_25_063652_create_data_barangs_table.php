<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('pengguna')->nullable();
            $table->string('nama_barang')->nullable();
            $table->string('kondisi')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('nomor_aset')->nullable();
            $table->string('ruang')->nullable();
            $table->string('gedung')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_barangs');
    }
};
