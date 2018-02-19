<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengiriman extends Model
{
    protected $table='pengirimen';
    protected $fillable=['kode_barang','tanggal_pengiriman','tanggal_penerima','alamat','cara_bayar'];
    public $timestamps=true;
}
