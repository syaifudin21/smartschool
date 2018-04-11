<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kelasmapel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelasmapel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kelas');
            $table->integer('id_mapel');
            $table->integer('id_guru')->nullable();
            $table->integer('jam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('kelasmapel');
    }
}
