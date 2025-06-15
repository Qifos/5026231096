<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeranjangBelanja extends Model
{
    protected $table = 'keranjangbelanja';

    protected $fillable = ['kodebarang', 'jumlah', 'harga'];

    public $timestamps = false;
}
