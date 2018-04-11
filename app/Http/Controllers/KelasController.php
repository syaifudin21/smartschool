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
        $kelasmapel = kelasmapel::where('id_kelas', $id)->get();
        $kelasmapel = kelasmapel::where('kelasmapel.id_kelas', $id)
                    ->Join('mapel','kelasmapel.id_mapel', '=', 'mapel.id')
                    ->select('kelasmapel.*', 'mapel.mapel')
                    ->get();
        $mapel = mapel::all();
        $guru =  User::where('status', 3)->get();
        return view('tu.kelas_detail', compact('kelasid', 'id', 'kelasmapel', 'kelasmapel', 'mapel', 'guru'));
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
        if ($mapel->id_mapel == $req->id_mapel) {
            kelasmapel::where('kelasmapel.id', $req->id)->
            update([
                'jam' => $req->jam,
                'id_guru' => $req->id_guru,
                'id_mapel' => $req->id_mapel,
            ]);
            return back()->with('success',' Mata Pelajaran Berhasil Diupdate Didalam Kelas');
        }else{
            $mapelkelas = kelasmapel::where(['id_kelas'=> $mapel->id_kelas, 'id_mapel'=>$req->id_mapel])->first();
            if ($mapelkelas != null) {
                return back()->with('gagal',' Mata Pelajaran Ada Kesamaan Didalam Kelas');
            }elseif ($mapelkelas == null) {
                kelasmapel::where('kelasmapel.id', $req->id)->
                update([
                    'jam' => $req->jam,
                    'id_guru' => $req->id_guru,
                    'id_mapel' => $req->id_mapel,
                ]);
                return back()->with('success',' Mata Pelajaran Berhasil Diupdate Didalam Kelas');
            }else{
                return back()->with('gagal',' Data Gagal Diproses');
            }
        }
    }
    public function mapeldelete($id)
    {
        kelasmapel::where('id', $id)->delete();
        return back()->with('success','Mata Pelajaran Dalam Kelas Berhasil Dihapus');
    }
}
