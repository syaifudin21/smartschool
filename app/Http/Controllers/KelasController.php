<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\kelas;
use App\Models\tahunajaran;
use App\Models\mapel;
use App\Models\kelasmapel;

class KelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function kelas()
    {
    	$ta = tahunajaran::all();
    	$kelas = kelas::Join('users','kelas.id_guru', '=', 'users.id')
                ->Join('ta','kelas.id_ta', '=', 'ta.id')
                ->select('kelas.*', 'ta.tahun_ajaran', 'users.name')
                ->get();
    	$guru = User::where('status', 3)->get();
    	// dd($guru);
    	return view('tu.kelas', compact('ta', 'kelas', 'guru'));
    }
    public function tambah(Request $req)
    {
    	$this->validate($req, [
    		'id_ta' => 'required|string|max:3',
            'nama_kelas' => 'required|string|max:191',
            'id_guru' => 'required'
    	]);

    	kelas::create([
    		'id_ta' => $req->id_ta,
    		'nama_kelas' => $req->nama_kelas,
    		'id_guru' => $req->id_guru
    	]);

    	return back()->with('success','Kelas '. $req->nama_kelas. ' Berhasil Ditambahkan');
    }
    public function lihat($id)
    {
        $kelasid = kelas::where('kelas.id', $id)
                    ->Join('users','kelas.id_guru', '=', 'users.id')
                    ->Join('ta','kelas.id_ta', '=', 'ta.id')
                    ->first();
        $kelasmapel = kelasmapel::where('kelasmapel.id_kelas', $id)
                    ->Join('mapel','kelasmapel.id_mapel', '=', 'mapel.id')
                    ->select('kelasmapel.*', 'mapel.mapel')
                    ->get();
        $ta = tahunajaran::all();
        $kelas = kelas::all();
        $mapel = mapel::all();
        $guru =  User::where('status', 3)->get();
        return view('tu.kelas_detail', compact('kelasid', 'id', 'kelasmapel', 'mapel','ta', 'guru', 'kelas'));
    }
    public function edit($id)
    {
        $ta = tahunajaran::all();
        $guru = User::where('status', 3)->get();
        $kelasid = kelas::where('kelas.id', $id)
                    ->Join('users','kelas.id_guru', '=', 'users.id')
                    ->Join('ta','kelas.id_ta', '=', 'ta.id')
                    ->first();
        return view('tu.kelas_update', compact('kelasid', 'ta', 'guru', 'id'));
    }
    public function update(Request $req)
    {
        kelas::where('id', $req->id_kelas)
        ->update([
            'id_ta' => $req->id_ta,
            'nama_kelas' => $req->nama_kelas,
            'id_guru' => $req->id_guru
        ]);
        return redirect('/tu/kelas/lihat/'. $req->id_kelas)->with('success','Kelas '. $req->nama_kelas. ' Berhasil diupdate');
    }
    public function delete($id)
    {
        kelas::where('id', $id)->delete();
        return back()->with('success',' Kelas Berhasil Dihapus');
    }
    public function mapel($id)
    {
        $mapel = mapel::all();
        $kelasid = kelas::where('id', $id)->first();
        $kelasmapel = kelasmapel::where('kelasmapel.id_kelas', $id)
                    ->Join('mapel','kelasmapel.id_mapel', '=', 'mapel.id')
                    ->select('kelasmapel.*', 'mapel.mapel')
                    ->get();
        $guru =  User::where('status', 3)->get();
        return view('tu.kelasmapel', compact('mapel', 'id', 'kelasid', 'kelasmapel', 'guru'));
    }
    public function mapeltambah(Request $req)
    {
        $this->validate($req, [
            'mapel_kelas' => 'required',
            'jam' => 'required',
        ]);

        $mapelkelas = kelasmapel::where(['id_kelas'=> $req->id_kelas, 'id_mapel'=>$req->mapel_kelas])->first();
        if ($mapelkelas != null) {
            return back()->with('gagal',' Mata Pelajaran Ada Kesamaan Didalam Kelas');
        }elseif ($mapelkelas == null) {
            kelasmapel::create([
                'id_kelas' => $req->id_kelas,
                'jam' => $req->jam,
                'id_guru' => $req->id_guru,
                'id_mapel' => $req->mapel_kelas,
            ]);
            return back()->with('success',' Mata Pelajaran Berhasil Ditambahakan Didalam Kelas');
        }else{
            return back()->with('gagal',' Data Gagal Diproses');
        }
    }
    public function mapelupdate(Request $req)
    {
        $mapel = kelasmapel::where('kelasmapel.id', $req->id)->first();
        kelasmapel::where('kelasmapel.id', $req->id)->
        update([
            'jam' => $req->jam,
            'id_guru' => $req->id_guru,
        ]);
        return back()->with('success',' Mata Pelajaran Berhasil Diupdate Didalam Kelas');
            
    }
    public function mapeldelete($id)
    {
        kelasmapel::where('id', $id)->delete();
        return back()->with('success','Mata Pelajaran Dalam Kelas Berhasil Dihapus');
    }
    public function datamapel($id){
        if($id==0){
            $mapel = kelasmapel::all();
        }else{
            $mapel = kelasmapel::where('id_kelas','=',$id)
                    ->Join('mapel','kelasmapel.id_mapel', '=', 'mapel.id')
                    ->select('kelasmapel.*', 'mapel.mapel')
                    ->get();
        }
        return $mapel;
    }
    public function datata($id)
    {
        $ta = kelas::where('id_ta','=',$id)->get();
        return $ta;
    }
    public function mapelload(Request $req)
    {
        $kelasmapel = kelasmapel::where('id_kelas', $req->id_kelas)->get();
        if ($req->action == 'Tambah dan Load Data') {
            foreach ($kelasmapel as $km) {
                $klsmapel = kelasmapel::where(['id_kelas'=> $req->kelas,'id_mapel'=> $km->id_mapel])->first();
                if ($klsmapel == null ) {
                    kelasmapel::create([
                        'id_kelas' => $req->kelas,
                        'jam' => $km->jam,
                        'id_mapel' => $km->id_mapel,
                    ]);
                }
            }
            return back()->with('success','Mata Pelajaran Dalam Kelas Berhasil Diload dari Kelas Lain');
        } elseif ($req->action == 'Hapus dan Load Data') {
            $klsmapel = kelasmapel::where(['id_kelas'=> $req->kelas])->delete();
            foreach ($kelasmapel as $km) {
                if ($klsmapel == null ) {
                    kelasmapel::create([
                        'id_kelas' => $req->kelas,
                        'jam' => $km->jam,
                        'id_mapel' => $km->id_mapel,
                    ]);
                }
            }
            return back()->with('success','Mata Pelajaran Dalam Kelas Berhasil Dihapus Dan Disamakan');
        } else {
            dd('sepertinya anda akan menghapus semua');
        }

        

    }
   
}
