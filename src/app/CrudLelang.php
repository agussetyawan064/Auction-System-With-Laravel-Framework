<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudLelang extends Model
{
    protected $table = 'auction';
    protected $primaryKey='idlelang';

    protected $fillable = [
      'namalelang', 'jenistawar', 'hargamaksimal', 'daftarlelang', 'tanggalbuka', 'tanggaltutup', 'uploadfile',
    ];
}
