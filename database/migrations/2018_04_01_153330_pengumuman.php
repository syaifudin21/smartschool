<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pengumuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pengumuman', 30);
            $table->longText('isi');
            $table->longText('misi')->nullable();
            $table->longText('lampiran')->nullable();
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
            $table->integer('id_user');
            $table->enum('objek', ['umum', 'kelas', 'guru', 'siswa'])->default('umum');
            $table->integer('id_objek')->nullable();
            $table->integer('id_latih')->nullable();
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
         Schema::drop('pengumuman');
    }
}
