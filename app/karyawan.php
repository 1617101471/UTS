<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table='karyawans';
    protected $fillable=['nik','nama_karyawan','bagian','status','penghasilan'];

    public $timestamps=true;
}
