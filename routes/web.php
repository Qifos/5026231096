<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);

Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
