<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('NIM');
            $table->foreign('NIM')->references('NIM')->on('mahasiswas');
            $table->dateTime('tanggal_pinjam')->nullable(false);
            $table->dateTime('tanggal_kembali')->nullable(false);
            $table->foreignId('barang_id');
            $table->foreignId('petugas_id');
            // $table->unsignedBigInteger('petugas_id');
            // $table->foreign('petugas_id')->references('id')->on('petugas');
            // $table->unsignedBigInteger('barang_id');
            // $table->foreign('barang_id')->references('id')->on('barangs');
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
        Schema::dropIfExists('pelayanans');
    }
}
