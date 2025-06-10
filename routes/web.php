<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MakananController;

//import java.io

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class,'helloworld']);

Route::get('linktree', [Link::class, 'linktree']);

Route::get('sidebar', [Link::class, 'sidebar']);

Route::get('pertama', [Link::class, 'pertama']);

Route::get('template1', [Link::class, 'template1']);

Route::get('tes', [Link::class, 'tes']);

Route::get('js1', [Link::class, 'js1']);

Route::get('js2', [Link::class, 'js2']);

Route::get('githubio', [Link::class, 'githubio']);

Route::get('ets', [Link::class, 'ets']);

Route::get('homepage', [Link::class, 'homepage']);

Route::get('dosen', [Link::class, 'index']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);


Route::get('/makanan', [MakananController::class, 'index']);
Route::get('/makanan/tambah', [MakananController::class, 'tambah']);
Route::post('/makanan/store', [MakananController::class, 'store']);
Route::get('/makanan/edit/{id}', [MakananController::class, 'edit']);
Route::post('/makanan/update', [MakananController::class, 'update']);
Route::get('/makanan/hapus/{id}', [MakananController::class, 'hapus']);
Route::get('/makanan/cari', [MakananController::class, 'cari']);

