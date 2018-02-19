<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stok_barang extends Model
{
    protected $table='stok_barangs';
    protected $fillable=['kode_barang','nama_barang','stok','tanggal_export','harga_jual'];
    public $timestamps=true;
}
