<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeranjangBelanja;

class KeranjangBelanjaController extends Controller
{
    public function index()
{
    $data = KeranjangBelanja::all();
    return view('keranjangbelanja.index', compact('data'));
}

public function create()
{
    return view('keranjangbelanja.create');
}

public function store(Request $request)
{
    KeranjangBelanja::create($request->all());
    return redirect()->route('keranjang.index');
}

public function destroy($id)
{
    KeranjangBelanja::destroy($id);
    return redirect()->route('keranjang.index');
}

}
