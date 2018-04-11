<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\mapel;

class MapelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function mapel()
    {
    	$mapel = mapel::all();
    	return view('tu.mapel', compact('mapel'));
    }
    public function tambah(Request $req)
    {
    	$this->validate($req, [
    		'mapel' => 'required',
    	]);

    	mapel::create([
    		'mapel' => $req->mapel,
    		'deskripsi' => $req->deskripsi,
            'jenis_mapel' => $req->jenis_mapel,
    	]);

    	return back()->with('success','Mata Pelajaran '. $req->mapel. ' Berhasil Ditambahkan');
    }
    public function lihat($id)
    {
        $mapelid = mapel::where('mapel.id', $id)->first(); 
        return view('tu.mapel_detail', compact('mapelid', 'id'));
    }
    public function edit($id)
    {
        $mapelid = mapel::where('mapel.id', $id)->first(); 
        return view('tu.mapel_update', compact('mapelid', 'id'));
    }
    public function update(Request $req)
    {
        mapel::where('id', $req->id_mapel)
        ->update([
            'mapel' => $req->mapel,
            'deskripsi' => $req->deskripsi,
            'jenis_mapel' => $req->jenis_mapel,
        ]);
        return redirect('/tu/mapel/lihat/'. $req->id_mapel)->with('success','Kelas '. $req->mapel. ' Berhasil diupdate');
    }
    public function delete($id)
    {
        mapel::where('id', $id)->delete();
        return back()->with('success',' Mata Pelajaran Berhasil Dihapus');
    }
}
