<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table='transaksis';
    protected $fillable=['kode_barang','nama_barang','tanggal_beli','satuan','harga'];
    public $timestamps=true;
}
