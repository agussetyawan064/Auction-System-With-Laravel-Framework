<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrudLelang;
use App\Http\Requests;
use App\Http\Requests\Lelang\StoreRequest;
// use App\Http\Requests\Crud\UpdateRequest;
use Validator, Response;
use Illuminate\Support\Facades\Input;

class UploadLelang extends Controller
{
    public function index(){
        $cruds = CrudLelang::all();
        return view('admin/lelang', compact('cruds'));
    }

    public function create()
    {
        return view('admin/tambah_lelang');
    }

    public function store(StoreRequest $request){
        $cruds = new CrudLelang();
        $cruds->namalelang = $request->namalelang;
        $cruds->jenistawar = $request->jenistawar;
        $cruds->hargamaksimal = $request->hargamaksimal;
        $cruds->daftarlelang = $request->daftarlelang;
        $cruds->tanggalbuka = $request->tanggalbuka;
        $cruds->tanggaltutup = $request->tanggaltutup;
        $cruds = $request->file('uploadfile');
        // $cruds->uploadfile = $request->uploadfile;
        $cruds->save();

        //upload file
        $destinationPath='public/img';
        $filename = $cruds->getClientOriginalName();
        if($file->move($destinationPath,$cruds->getClientOriginalName())){
            echo "<img src='uploads/".$filename."'>";
        }
        return redirect()->route('crud_lelang.lelang')->with('alert-success', 'Data Berhasil Disimpan.');

    }
}
