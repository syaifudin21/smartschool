<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Latih extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latih', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_latih', 30);
            $table->longText('tujuan_latih');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
            $table->enum('status', ['Dibuka', 'Ditutup'])->default('Ditutup');
            $table->enum('jenis_latih', ['Ujian Masuk', 'Ujian Tengah Semester', 'Ujian Akhir Semester', 'Ujian Harian'] );
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
         Schema::drop('latih');
    }
}
