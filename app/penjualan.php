<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table='penjualans';
    protected $fillable=['kode_barang','nama_barang','satuan','harga_jual','sisa_stok'];
    public $timestamps=true;
}
