<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EkspedisiOrganisasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekspedisi_organisasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_organiasisi');
            $table->string('nomor_surat');
            $table->enum('status', ['Masuk', 'Keluar']);
            $table->text('lampiran')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('ekspedisi_organisasi');
    }
}
