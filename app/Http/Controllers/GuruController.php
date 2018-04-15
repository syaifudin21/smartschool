<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\pengumuman;

class GuruController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('guru.dasbord');
    }
    public function pengumuman()
    {
    	$pengumuman = pengumuman::where('id_user', Auth::user()->id)
    				->Join('users','pengumuman.id_user', '=', 'users.id')
                    ->select('pengumuman.*', 'users.name')
                    ->get();
    	return view('guru.pengumuman', compact('pengumuman'));
    }
}
