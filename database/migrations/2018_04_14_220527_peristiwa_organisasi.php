<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PeristiwaOrganisasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peristiwa_organisasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_organiasisi');
            $table->text('peristiwa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('peristiwa_organisasi');
    }
}
