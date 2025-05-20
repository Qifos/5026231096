<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;

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
