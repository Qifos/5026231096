<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanControllerGanjil extends Controller
{
    public function index()
	{
        $karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data karyawan ke view index
		return view('index3',['karyawan' => $karyawan]);

	}

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah3');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table karyawan
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawanganjil');

	}

	// method untuk edit data karyawan
	public function edit($kodepegawai)
    {
        // mengambil data karyawan berdasarkan kodepegawai yang dipilih
        $karyawan = DB::table('karyawan')->where('kodepegawai',$kodepegawai)->get();
        // passing data karyawan yang didapat ke view edit.blade.php
        return view('edit3',['karyawan' => $karyawan]);

    }

	// method untuk update data karyawan
	public function update(Request $request)
	{
		// update data karyawan
		DB::table('karyawan')->where('kodepegawai',$request->kodepegawai)->update([
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawanganjil');
	}

	// method untuk hapus data karyawan
	public function hapus($kodepegawai)
	{
		// menghapus data karyawan berdasarkan kodepegawai yang dipilih
		DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

		// alihkan halaman ke halaman karyawan
		return redirect('/karyawanganjil');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();

    		// mengirim data karyawan ke view index
		return view('index3',['karyawan' => $karyawan, 'cari' => $cari]);

	}
}
