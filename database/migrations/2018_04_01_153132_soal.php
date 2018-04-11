<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Soal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_latih');
            $table->longText('soal');
            $table->longText('lampiran')->nullable();
            $table->longText('jawaban_1')->nullable();
            $table->longText('jawaban_2')->nullable();
            $table->longText('jawaban_3')->nullable();
            $table->longText('jawaban_4')->nullable();
            $table->longText('jawaban_5')->nullable();
            $table->integer('benar_1')->nullable();
            $table->integer('benar_2')->nullable();
            $table->integer('benar_3')->nullable();
            $table->integer('benar_4')->nullable();
            $table->integer('benar_5')->nullable();
            $table->longText('lampiran_1')->nullable();
            $table->longText('lampiran_2')->nullable();
            $table->longText('lampiran_3')->nullable();
            $table->longText('lampiran_4')->nullable();
            $table->longText('lampiran_5')->nullable();
            $table->timestamps();
        });
        //
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('soal');
    }
}
