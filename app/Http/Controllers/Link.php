<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Link extends Controller
{
    //
    public function helloworld()
    {
        return view('blog');
    }
    //
    public function linktree()
    {
        return view('frontend.linktree');
    }
    //
    public function pertama()
    {
        return view('frontend.pertama');
    }
    //
    public function template1()
    {
        return view('frontend.template1');
    }
    //
    public function tes()
    {
        return view('frontend.tes');
    }
    //
    public function sidebar()
    {
        return view('frontend.sidebar');
    }
    //
    public function js1()
    {
        return view('frontend.js1');
    }
    //
    public function js2()
    {
        return view('frontend.js2');
    }
    //
    public function githubio()
    {
        return view('frontend.githubio');
    }
    //
    public function ets()
    {
        return view('frontend.ets');
    }
    //
    public function homepage()
    {
        return view('frontend.homepage');
    }
}
