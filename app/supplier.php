<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table='suppliers';
    protected $fillable=['kode_barang','nama_barang','alamat','perusahaan','no_telepon'];
    public $timestamps=true;
}
