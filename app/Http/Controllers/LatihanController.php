<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\kelas;
use App\Models\latih;
use App\Models\soal;

class LatihanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function latih()
    {
    	$latih = latih::all();
    	$kelas = kelas::all();
    	return view('tu.latih', compact('latih', 'kelas'));
    }
    public function tambah(Request $req)
    {
    	$this->validate($req, [
    		'nama_latih' => 'required',
    		'waktu_mulai' => 'required', 
    		'waktu_selesai' => 'required',
    		'jenis_latih' => 'required'
    	]);

    	latih::create([
    		'nama_latih' => $req->nama_latih,
    		'tujuan_latih'=> $req->tujuan_latih,
    		'jenis_latih' => $req->jenis_latih, 
    		'waktu_mulai' => $req->waktu_mulai, 
    		'waktu_selesai' => $req->waktu_selesai,
    	]);

    	return back()->with('success',' Latihan '. $req->nama_latih. ' Berhasil Ditambahkan');
    }
    public function lihat($id)
    {
        $latihid = latih::where('id', $id)->first();
        return view('tu.latih_detail', compact('latihid', 'id'));
    }
    public function edit($id)
    {
        $latihid = latih::where('id', $id)->first();
        return view('tu.latih_update', compact('latihid', 'id'));
    }
    public function update(Request $req)
    {
        latih::where('id', $req->id_latih)
        ->update([
            'nama_latih' => $req->nama_latih,
            'tujuan_latih'=> $req->tujuan_latih,
            'jenis_latih' => $req->jenis_latih, 
            'waktu_mulai' => $req->waktu_mulai, 
            'waktu_selesai' => $req->waktu_selesai,
        ]);
        return redirect('/tu/latih/lihat/'. $req->id_latih)->with('success','Latihan '. $req->nama_latih. ' Berhasil diupdate');
    }
    public function delete($id)
    {
        latih::where('id', $id)->delete();
        return back()->with('success',' Latihan Berhasil Dihapus');
    }
    public function soal($id)
    {
        $latihid = latih::where('id', $id)->first();
        $soal = soal::where('id_latih', $id)->get();

        return view('tu.latihsoal', compact('latihid', 'id', 'soal'));
    }
    public function soaltambah(Request $req)
    {
        soal::create([
            'id_latih' =>$req->id_latih,
            'soal'=> $req->soal,
            'jawaban_1'=> $req->jawaban_1,
            'jawaban_2'=> $req->jawaban_2,
            'jawaban_3'=> $req->jawaban_3,
            'jawaban_4'=> $req->jawaban_4,
            'jawaban_5'=> $req->jawaban_5,
            'benar_1' => ($req->jawaban == 'benar_1') ? 1 : null ,
            'benar_2' => ($req->jawaban == 'benar_2') ? 1 : null ,
            'benar_3' => ($req->jawaban == 'benar_3') ? 1 : null ,
            'benar_4' => ($req->jawaban == 'benar_4') ? 1 : null ,
            'benar_5' => ($req->jawaban == 'benar_5') ? 1 : null ,
        ]);

        return back()->with('success',' Soal Berhasil Ditambah');
    }
    public function soaldelete($id)
    {
        soal::where('id', $id)->delete();
        return back()->with('success',' Soal Berhasil Dihapus');
    }
}