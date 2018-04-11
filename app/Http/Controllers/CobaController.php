<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelasmapel;
use App\Models\kelas;

class CobaController extends Controller
{
	public function index()
    {
        $mapel = kelasmapel::all();
        $kelas = kelas::all();
        return view('tu.coba',compact('mapel','kelas'));
    }

    public function ambildata($id){
        if($id==0){
            $mapel = kelasmapel::all();
        }else{
            $mapel = kelasmapel::where('id_kelas','=',$id)->get();
        }
        return $mapel;
    }
    //
}
