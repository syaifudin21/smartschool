<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\kelas;
use App\Models\latih;
use App\Models\soal;
use Excel;

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
        $totalsoal = count(soal::where('id_latih', $id)->get());
        return view('tu.latih_detail', compact('latihid', 'id', 'totalsoal'));
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
        soal::where('id_latih', $id)->delete();
        return back()->with('success',' Latihan Berhasil Dihapus');
    }
    public function soal($id)
    {
        $latihid = latih::where('id', $id)->first();
        $soal = soal::where('id_latih', $id)->get();

        return view('tu.latihsoal', compact('latihid', 'id', 'soal'));
    }
    public function soallihat($id)
    {
        $soallall = soal::where('id_latih', $id)->get();
        $latihid = latih::where('id', $id)->first();
        
        return view('tu.latihsoal_detail', compact('id', 'soallall', 'latihid'));
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
    public function soalid($id)
    {
        $soalid = soal::where('soal.id', $id)
                ->Join('latih','soal.id_latih', '=', 'latih.id')
                ->select('latih.nama_latih', 'latih.id as latihid', 'soal.*')
                ->first();
                // dd($soalid);
        return view('tu.latihsoal_update', compact('soalid', 'id_latih'));
    }
    public function soalupdate(Request $req)
    {
         soal::where('id', $req->id_soal)->update([
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
        return back()->with('success',' Soal Berhasil Diupdate');
    }
    public function soaldelete($id)
    {
        soal::where('id', $id)->delete();
        return back()->with('success',' Soal Berhasil Dihapus');
    }
    public function soalexport($id)
    {
        $soal = soal::where('id_latih', $id)->select('soal', 'lampiran', 'jawaban_1', 'jawaban_2', 'jawaban_3', 'jawaban_4', 'jawaban_5', 'benar_2', 'benar_1', 'benar_3', 'benar_4', 'benar_5', 'lampiran_1', 'lampiran_2', 'lampiran_3', 'lampiran_4', 'lampiran_5')->get();

        return excel::download((new $soal), 'invoices.xlsx');

        // return Excel::create('soal', function($excel) use ($soal){
        //     $excel->sheet('soal', function($sheet) use ($soal){
        //         $sheet->fromArray($soal);
        //     });
        // })->download('xls');

        # code...
    }
}
