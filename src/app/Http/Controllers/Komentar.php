<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class Komentar extends Controller
{
  public function tampilData(){
    $data = DB::select('SELECT * FROM comment');
<<<<<<< HEAD
    return view('admin/members',['data'=>$data]);
=======
    return view('komentar',['data'=>$data]);
>>>>>>> 9d472ff7e0b369163f558e1f9a5af7ad02d39613
 }
}
