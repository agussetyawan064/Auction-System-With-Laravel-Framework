<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrudLelang;
use Validator, Response;
use Illuminate\Support\Facades\Input;

class ShowLelang extends Controller
{
  public function index(){
    $cruds = CrudLelang::all();
    return view('user/list_auction', compact('cruds'));
  }
  
}
