<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parkiran extends Model
{
    protected $table='parkirans';
    protected $fillable=['plat_nomor','nama_pemilik','merk_kendaraan','jam_masuk','jam_keluar'];
    public $timestamps=true;
}
