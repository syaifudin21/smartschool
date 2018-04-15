<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\organisasi;
use App\User;

class OrganisasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function organisasi()
    {
    	$organisasi = organisasi::Join('users','organisasi.pembina', '=', 'users.id')
                ->select('organisasi.*', 'users.name')
                ->get();
        $guru = User::where('status', 3)->get();
    	return view('tu.organisasi', compact('organisasi', 'guru'));
    }
    public function tambah(Request $req)
    {
    	$this->validate($req, [
    		'nama_organisasi' => 'required',
    		'pembina' => 'required',
    	]);

    	organisasi::create([
    		'nama_organisasi' => $req->nama_organisasi, 
            'visi' => $req->visi, 
            'misi' => $req->misi, 
            'tanggal_berdiri' => $req->tanggal_berdiri, 
            'pembina' => $req->pembina
    	]);

    	return back()->with('success',' Organisasi <b>'. $req->nama_organisasi. '</b> Berhasil dibuat');
    }
    public function lihat($id)
    {
        $organisasiid = organisasi::where('organisasi.id', $id)
                    ->Join('users','organisasi.pembina', '=', 'users.id')
                    ->first();
        return view('tu.organisasi_detail', compact('organisasiid','id'));
    }
    public function edit($id)
    {
        $organisasiid = organisasi::where('organisasi.id', $id)
                    ->Join('users','organisasi.pembina', '=', 'users.id')
                    ->first();
        $guru = User::where('status', 3)->get();
        return view('tu.organisasi_update', compact('organisasiid','guru','id'));
    }
    public function update(Request $req)
    {
        organisasi::where('id', $req->id_organisasi)
        ->update([
            'nama_organisasi' => $req->nama_organisasi, 
            'visi' => $req->visi, 
            'misi' => $req->misi, 
            'tanggal_berdiri' => $req->tanggal_berdiri, 
            'pembina' => $req->pembina
        ]);
        return redirect('/tu/organisasi/lihat/'. $req->id_organisasi)->with('success','Pengumuman '. $req->nama_organisasi. ' Berhasil diupdate');
    }
    public function delete($id)
    {
        organisasi::where('id', $id)->delete();
        return back()->with('success',' Organisasi Berhasil Dihapus');
    }
    public function struktur($id)
    {
        dd($id);
    }
    public function kegiatan($id)
    {
        dd($id);
    }
    public function ekspedisi($id)
    {
        dd($id);
    }
    public function anggota($id)
    {
        dd($id);
    }
    public function kehadiran($id)
    {
        dd($id);
    }
}
