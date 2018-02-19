<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table='barangs';
    protected $fillable=['kode_barang','nama_barang','satuan','harga_beli','harga_jual'];
    public $timestamps=true;
}
