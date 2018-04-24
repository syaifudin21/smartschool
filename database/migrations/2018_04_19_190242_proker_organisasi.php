<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProkerOrganisasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proker_organisasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_struktur');
            $table->text('nama');
            $table->text('ketarangan');
            $table->text('penanggung_jawab');
            $table->string('waktu')->nullable();
            $table->datetime('waktu_mulai')->nullable();
            $table->datetime('waktu_selesai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proker_organisasi');
    }
}
