<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    protected $table='pemesanans';
    protected $fillable=['kode_barang','nama_barang','tanggal_pembayaran','satuan','harga_minta'];
    public $timestamps=true;
}
