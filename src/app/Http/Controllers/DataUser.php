<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class DataUser extends Controller
{
  public function tampilData(){
    $data = DB::select('SELECT * FROM company');
    return view('admin/user_members',['data'=>$data]);
 }
}
