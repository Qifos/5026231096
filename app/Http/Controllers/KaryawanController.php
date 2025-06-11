<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
	{
    	// mengambil data dari table
		$karyawan = DB::table('karyawan')
        ->select('kodepegawai', DB::raw('UPPER(namalengkap) as namalengkap'), 'divisi', DB::raw('LOWER(departemen) as departemen'))
        ->paginate(10);

    	// mengirim data  ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);

	}

    // method untuk menampilkan view form tambah
	public function tambah()
	{
		// memanggil view tambah
		return view('tambahkaryawan');
	}

	// method untuk insert data ke table
	public function store(Request $request)
	{
        // method auto generate kode pegawai
        $last = DB::table('karyawan')
              ->select('kodepegawai')
              ->orderBy('kodepegawai','desc')
              ->value('kodepegawai');

        if ($last && preg_match('/^([A-Za-z]+)(\d+)$/', $last, $m)) {
            // pisah huruf angka
            $prefix    = $m[1];
            $number    = (int) $m[2];
            $width     = strlen($m[2]);

            // increment and pad
            $newNumber = str_pad($number + 1, $width, '0', STR_PAD_LEFT);

            // re-join
            $newCode   = $prefix . $newNumber;
        } else {
            // fallback
            $newCode = 'A001';
        }

        // insert data ke table
		DB::table('karyawan')->insert([
			'kodepegawai' => $newCode,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen,
		]);
		// alihkan halaman ke halaman
		return redirect('/karyawan');

	}

	// update data
	public function update(Request $request)
	{
		// update data
		DB::table('karyawan')->where('kodepegawai',$request->id)->update([
			'kodepegawai' => $request->id,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen,
		]);
		// alihkan halaman ke halaman
		return redirect('/karyawan');
	}

	// method untuk hapus data
	public function hapus($id)
	{
		// menghapus data  berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman
		return redirect('/karyawan');
	}

    public function cari(Request $request)
	{
		// menangkap data
		$cari = $request->cari;

    		// mengambil data dari table  sesuai pencarian data
		$makanan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();

    		// mengirim data  ke view index
		return view('indexkaryawan',['karyawan' => $karyawan,'cari'=>$cari]);

	}
}
