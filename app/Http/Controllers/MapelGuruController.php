<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kelasmapel;

class MapelGuruController extends Controller
{
	public function index()
	{
    	$mapel = kelasmapel::Join('kelas','kelasmapel.id_kelas', '=', 'kelas.id')
    			->Join('ta','kelas.id_ta', '=', 'ta.id')
    			->Join('mapel','kelasmapel.id_mapel', '=', 'mapel.id')
		    	->where(['kelasmapel.id_guru'=> Auth::user()->id , 'ta.status'=>'aktif'])
		    	->select('mapel.mapel', 'kelasmapel.*', 'kelas.nama_kelas')
		    	->get();
		return view('guru.mapel', compact('mapel'));
	}
	public function mapelid($id)
	{
		return view('guru.mapelguru');
	}
    //
}
