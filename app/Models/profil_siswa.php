<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class profil_siswa extends Model
{
    protected $table = 'profil_siswa';
    protected $fillable = ['ta', 'nama_lengkap', 'tgl', 'jk', 'nim', 'agama', 'alamat', 'tinggal', 'transportasi', 'nomor_hp', 'nama_ayah', 'nama_ibu', 'tgl_ayah', 'tgl_ibu', 'nomor_hp_ortu', 'pendidikan_ayah', 'pendidikan_ibu', 'pekerjaan_ayah', 'pekerjaan_ibu', 'alamat_ortu', 'penghasilan_ayah', 'penghasilan_ibu', 'keterangan_ayah', 'keterangan_ibu', 'tinggi', 'berat', 'jarak_sekolah', 'tempu_sekolah', 'anak_ke', 'jml_saudara', 'foto', 'akte', 'kps', 'ijazah'];
}
