<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Organisasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_organisasi', 30);
            $table->longText('visi')->nullable();
            $table->longText('misi')->nullable();
            $table->dateTime('tanggal_berdiri')->nullable();
            $table->integer('pembina')->nullable();
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
         Schema::drop('organisasi');
    }
}
