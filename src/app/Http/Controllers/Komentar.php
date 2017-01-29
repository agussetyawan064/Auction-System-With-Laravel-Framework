<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Komentar extends Controller
{
  public function tampilData(){
    $data = DB::select('SELECT * FROM comment');
    return view('komentar',['data'=>$data]);
 }
}
