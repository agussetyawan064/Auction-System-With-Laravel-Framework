<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = 'company';
    protected $primaryKey='idperusahaan';
    //protected $fillable = ['nama_perusahaan', 'alamat_perusahaan', 'kota_perusahaan', 'npwp', 'no_telepon'];
    public $timestamps = false;
}
