<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeksiOrganisasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seksi_organisasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_struktur');
            $table->string('id_siswa');
            $table->string('jabatan')->default('Anggota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('seksi_organisasi');
    }
}
