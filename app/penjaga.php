<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjaga extends Model
{
    protected $table='penjagas';
    protected $fiullable=['nama_penjaga','umur','alamat','shift','gaji'];
    public $timestamps=true;
}
