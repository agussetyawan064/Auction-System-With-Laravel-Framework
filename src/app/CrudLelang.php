<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudLelang extends Model
{
    protected $table = 'auction';
    protected $primaryKey='idlelang';
    //protected $fillable = ['nama_perusahaan', 'alamat_perusahaan', 'kota_perusahaan', 'npwp', 'no_telepon'];
    public $timestamps = false;
}
