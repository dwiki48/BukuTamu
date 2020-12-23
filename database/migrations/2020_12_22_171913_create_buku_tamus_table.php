<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_tamus', function (Blueprint $table) {
            $table->increments('id_buku');
            $table->integer('id_pegawai');
            $table->bigInteger('nik');
            $table->string('nama_tamu', 20);
            $table->string('pekerjaan', 10);
            $table->string('alamat', 30);
            $table->bigInteger('noHP');
            $table->string('keperluan', 10);
            $table->string('foto', 20)->nullable();
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
        Schema::dropIfExists('buku_tamus');
    }
}
