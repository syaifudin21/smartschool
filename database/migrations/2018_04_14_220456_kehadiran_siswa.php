<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KehadiranSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Kehadiran_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_organiasisi');
            $table->integer('id_siswa');
            $table->dateTime('waktu_berangkat');
            $table->dateTime('waktu_pulang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('Kehadiran_siswa');
    }
}
