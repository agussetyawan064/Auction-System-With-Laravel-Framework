<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class DataAdmin extends Controller
{
  public function tampilData(){
    $data = DB::select('SELECT * FROM admin');
    return view('admin/members',['data'=>$data]);
 }
}
