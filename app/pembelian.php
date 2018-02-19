<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    protected $table='pembelians';
    protected $fillable=['nama_pembeli','nama_barang','alamat','satuan','harga'];
    public $timestamps=true;
}
