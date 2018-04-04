<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\pengumuman;

class PengumumanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function pengumuman()
    {
    	$pengumuman = pengumuman::Join('users','pengumuman.id_user', '=', 'users.id')->get();
    	return view('tu.pengumuman', compact('pengumuman'));
    }
    public function tambah(Request $req)
    {
    	$this->validate($req, [
    		'nama_pengumuman' => 'required',
    		'isi' => 'required', 
    		'waktu_mulai' => 'required',
    		'waktu_selesai' => 'required',
    	]);

    	pengumuman::create([
    		'nama_pengumuman'  => $req->nama_pengumuman, 
    		'isi' => $req->isi,
    		'waktu_mulai' => $req->waktu_mulai, 
    		'waktu_selesai' => $req->waktu_selesai,
    		'id_user'  => Auth::id(), 
    		'lampiran' => $req->lampiran
    	]);

    	return back()->with('success',' Pengumuman <b>'. $req->nama_pengumuman. '</b> Berhasil dibuat');
    }
    public function lihat($id)
    {
        $pengumumanid = pengumuman::where('pengumuman.id', $id)
                    ->Join('users','pengumuman.id_user', '=', 'users.id')
                    ->first();
        return view('tu.pengumuman_detail', compact('pengumumanid', 'id'));
    }
    public function edit($id)
    {
        $pengumumanid = pengumuman::where('pengumuman.id', $id)
                    ->first();
        return view('tu.pengumuman_update', compact('pengumumanid', 'id'));
    }
    public function update(Request $req)
    {
        pengumuman::where('id', $req->id_pengumuman)
        ->update([
            'nama_pengumuman'  => $req->nama_pengumuman, 
            'isi' => $req->isi,
            'waktu_mulai' => $req->waktu_mulai, 
            'waktu_selesai' => $req->waktu_selesai,
            'id_user'  => Auth::id(), 
            'lampiran' => $req->lampiran
        ]);
        return redirect('/tu/pengumuman/lihat/'. $req->id_pengumuman)->with('success','Pengumuman '. $req->nama_pengumuman. ' Berhasil diupdate');
    }
    public function delete($id)
    {
        pengumuman::where('id', $id)->delete();
        return back()->with('success',' Pengumuman Berhasil Dihapus');
    }
}
