<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil_siswa;
use App\Models\tahunajaran;
use File;
use App\user;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PendaftaranController extends Controller
{
	public function index()
	{
		return view('index.daftar');
	}
	public function store(Request $req)
	{
		$this->validate($req, [
            "nama_lengkap" => 'required|max:2',
			"tgl" =>  'required',
			"nim" =>  'required',
			"jk" =>  'required',
			"agama" =>  'required',
			"tinggi" =>  'required',
			"berat" =>  'required',
			"nomor_hp" =>  'required',
			"jln" =>  'required',
			"rt" =>  'required',
			"rw" =>  'required',
			"Dusun" =>  'required',
			"Desa" =>  'required',
			"Kecamatan" =>  'required',
			"Kabupaten" => 'required',
			"tinggal" =>  'required',
			"transportasi" =>  'required',
			"tempu_sekolah" =>  'required',
			"jarak_sekolah" =>  'required',
			"nama_ayah" => 'required',
			"tgl_ayah" => 'required',
			"pekerjaan_ayah" => 'required',
			"pendidikan_ayah" => 'required',
			"keterangan_ayah" => 'required',
			"nama_ibu" => 'required',
			"tgl_ibu" => 'required',
			"pekerjaan_ibu" => 'required',
			"pendidikan_ibu" => 'required',
			"keterangan_ibu" => 'required',
			"nomor_hp_ortu" => 'required',
			"ortu_jln" =>  'required',
			"ortu_rt" => 'required',
			"ortu_rw" => 'required',
			"ortu_dusun" => 'required',
			"ortu_desa" => 'required',
			"ortu_kecamatan" => 'required',
			"ortu_kabupaten" => 'required',
        ]);
		// date("Y-m-d", strtotime(Carbon::now()));
		$ta = tahunajaran::where('status', 'aktif')->first();

        $foto    = time().$req->file('foto')->getClientOriginalName();
        $ijazah  = time().$req->file('ijazah')->getClientOriginalName();

		profil_siswa::create([
			'ta' => $ta->tahun_ajaran ,  
			'nama_lengkap' => $req->nama_lengkap ,  
			'tgl' => $req->tgl ,  
			'jk' => $req->jk ,  
			'nim' => $req->nim ,  
			'agama' => $req->agama ,
			'alamat' => 'RT/RW ('.$req->rt.'/'. $req->rw. ') jln. '. $req->jln .' Dsn. '. $req->Dusun.' Ds. '. $req->Desa.' Kec. '. $req->Kecamatan.' Kab. '. $req->Kabupaten , 
			'tinggal' => $req->tinggal ,  
			'transportasi' => $req->transportasi ,  
			'nomor_hp' => $req->nomor_hp ,  
			'nama_ayah' => $req->nama_ayah ,  
			'nama_ibu' => $req->nama_ibu ,  
			'tgl_ayah' => $req->tgl_ayah ,  
			'tgl_ibu' => $req->tgl_ibu ,  
			'nomor_hp_ortu' => $req->nomor_hp_ortu ,  
			'pendidikan_ayah' => $req->pendidikan_ayah ,  
			'pendidikan_ibu' => $req->pendidikan_ibu ,  
			'pekerjaan_ayah' => $req->pekerjaan_ayah ,  
			'pekerjaan_ibu' => $req->pekerjaan_ibu ,  
			'alamat_ortu' => 'RT/RW ('.$req->ortu_rt.'/'. $req->ortu_rw. ') jln. '. $req->ortu_jln .' Dsn. '. $req->ortu_dusun.' Ds. '. $req->ortu_desa.' Kec. '. $req->ortu_kecamatan.' Kab. '. $req->ortu_kabupaten  ,  
			'keterangan_ayah' => $req->keterangan_ayah ,  
			'keterangan_ibu' => $req->keterangan_ibu ,  
			'tinggi' => $req->tinggi ,  
			'berat' => $req->berat ,  
			'jarak_sekolah' => $req->jarak_sekolah ,  
			'tempu_sekolah' => $req->tempu_sekolah ,  
			'foto' => $foto ,  
			'ijazah' => $ijazah,
		]);
        $req->file('foto')->move('images/siswa/', $foto);
        $req->file('ijazah')->move('images/siswa/', $ijazah);

		return back()->with('berhasil', 'pendaftaran anda telah kami terima, silahkan melakukan konfirmasi pendaftaran anda di sekertariat');
	}
}
