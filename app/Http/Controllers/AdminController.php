<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Yajra\Datatables\Datatables;
use App\Models\tahunajaran;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $ta = tahunajaran::all();
    	return view('admin/index', compact('ta'));
    }
    public function tatambah(Request $req)
    {
    	tahunajaran::create([
    		'tahun_ajaran' => $req->tahunajaran
    	]);
        return back()->with('success','Penambahan Tahun Ajaran Berhasil');
    }
    public function siswa()
    {
        $siswa = User::where('status', 1)->get();
        // dd($siswa);
        return view('admin/siswa', compact('siswa'));
    }
    public function calonsiswa()
    {
        $calonsiswa = User::where('status', 2)->get();
        return view('admin/calonsiswa', compact('calonsiswa'));
    }
    public function guru()
    {
        $guru = User::where('status', 3)->get();
        return view('admin/guru', compact('guru'));
    }
    public function walikelas()
    {
        $walikelas = User::where('status', 4)->get();
        return view('admin/walikelas', compact('walikelas'));
    }
    public function ketuakelas()
    {
        $ketuakelas = User::where('status', 5)->get();
        return view('admin/ketuakelas', compact('ketuakelas'));
    }
    public function ekstrakurikuler()
    {
        $ekstrakurikuler = User::where('status', 6)->get();
        return view('admin/ekstrakurikuler', compact('ekstrakurikuler'));
    }
    public function perpustakaan()
    {
        $perpustakaan = User::where('status', 7)->get();
        return view('admin/perpustakaan', compact('perpustakaan'));
    }
    public function pustakawan()
    {
        $pustakawan = User::where('status', 8)->get();
        return view('admin/pustakawan', compact('pustakawan'));
    }
    public function administrasi()
    {
        $administrasi = User::where('status', 9)->get();
        return view('admin/administrasi', compact('administrasi'));
    }
    public function tatausaha()
    {
        $tu = User::where('status', 10)->get();
        return view('admin/tu', compact('tu'));
    }
    public function admin()
    {
        $admin = User::where('status', 11)->get();
        return view('admin/admin', compact('admin'));
    }
}
