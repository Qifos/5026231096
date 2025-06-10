<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakananController extends Controller
{
    public function index()
	{
    	        // mengambil data dari table
		$makanan = DB::table('makanan')->paginate(10);

    	        // mengirim data  ke view index
		return view('indexmakanan',['makanan' => $makanan]);

	}

    // method untuk menampilkan view form tambah
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahmakanan');

	}

	// method untuk insert data ke table
	public function store(Request $request)
	{
		// insert data ke table
		DB::table('makanan')->insert([
			'id' => $request->id,
			'merkmakanan' => $request->merk,
			'hargamakanan' => $request->harga,
			'tersedia' => $request->tersedia,
            'berat' => $request->berat
		]);
		// alihkan halaman ke halaman
		return redirect('/makanan');

	}

	// method untuk edit data
	public function edit($id)
	{
		// mengambil data  berdasarkan id yang dipilih
		$makanan = DB::table('makanan')->where('id',$id)->get();
		// passing data  yang didapat ke view edit.blade.php
		return view('editmakanan',['makanan' => $makanan]);

	}

	// update data
	public function update(Request $request)
	{
		// update data
		DB::table('makanan')->where('id',$request->id)->update([
			'id' => $request->id,
			'merkmakanan' => $request->merk,
			'hargamakanan' => $request->harga,
			'tersedia' => $request->tersedia,
            'berat' => $request->berat
		]);
		// alihkan halaman ke halaman
		return redirect('/makanan');
	}

	// method untuk hapus data
	public function hapus($id)
	{
		// menghapus data  berdasarkan id yang dipilih
		DB::table('makanan')->where('id',$id)->delete();

		// alihkan halaman ke halaman
		return redirect('/makanan');
	}

    public function cari(Request $request)
	{
		// menangkap data
		$cari = $request->cari;

    		// mengambil data dari table  sesuai pencarian data
		$makanan = DB::table('makanan')
		->where('merkmakanan','like',"%".$cari."%")
		->paginate();

    		// mengirim data  ke view index
		return view('indexmakanan',['makanan' => $makanan,'cari'=>$cari]);

	}
}
