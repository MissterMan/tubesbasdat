<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->unsignedBigInteger('NIM', 15);
            $table->string('nama_depan', 50)->nullable(false);
            $table->string('nama_belakang', 50)->nullable(false);
            $table->string('nomor_hp', 12)->nullable(false);
            $table->string('alamat')->nullable(false);
            $table->string('email');
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
        Schema::dropIfExists('mahasiswas');
    }
}
