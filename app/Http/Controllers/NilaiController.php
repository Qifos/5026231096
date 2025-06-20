<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
	{
    	// mengambil data dari table
		$nilai = DB::table('nilai')->get() ;

    	// mengirim data  ke view index
		return view('indexnilai',['nilai' => $nilai]);

	}
    // method untuk menampilkan view form tambah
	public function tambah()
	{
		// memanggil view tambah
		return view('tambahnilai');
	}

public function store(Request $request)
	{
		// insert data ke table karyawan
		DB::table('nilai')->insert([
			'normorinduksiswa' => $request->normorinduksiswa,
			'nilaiangka' => $request->nilaiangka,
			'sks' => $request->sks,
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/nilai');

	}

    // update data
	public function update(Request $request)
	{
		// update data
		DB::table('nilai')->where('nilai',$request->id)->update([
			'id' => $request->id,
			'normorinduksiswa' => $request->normorinduksiswa,
			'nilaiangka' => $request->nilaiangka,
			'sks' => $request->sks,
		]);
		// alihkan halaman ke halaman
		return redirect('/nilai');
	}

    public function cari(Request $request)
	{
		// menangkap data
		$cari = $request->cari;

    		// mengambil data dari table  sesuai pencarian data
		$nilai = DB::table('nilai')
		->where('nomorinduksiswa','like',"%".$cari."%")
        ->paginate();

    		// mengirim data  ke view index
		return view('indexnilai',['nilai' => $nilai,'cari'=>$cari]);

	}
}

