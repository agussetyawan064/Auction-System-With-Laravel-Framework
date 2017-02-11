<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = 'company';
    protected $primaryKey='idperusahaan';
    protected $fillable = [
      'namaperusahaan', 'alamatperusahaan', 'kotaperusahaan', 'npwp', 'notelepon',
    ];
}