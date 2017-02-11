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
    public function store(Request $request) {

       $this->validate($request, [
         'namalelang' => 'required',
         'jenistawar' => 'required',
         'daftarlelang' => 'required',
         'hargamaksimal' => 'required',
         'tanggalbuka' => 'required',
         'tanggaltutup' => 'required',
         'uploadfile' => 'required|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
       ]);
       $datafile = new CrudLelang($request->input());

        if($file = $request->hasFile('uploadfile')) {

           $file = $request->file('uploadfile');

           $fileName = $file->getClientOriginalName();
           $destinationPath = public_path().'/images/';
           $file->move($destinationPath,$fileName);
           $datafile->uploadfile = $fileName;
       }
       $datafile->save();
        return redirect()->route('crud_lelang.index')
                       ->with('success','You have successfully uploaded your files');
   }

//     public function store(StoreRequest $request)
//     {
//         $cruds = new CrudLelang();
//         $cruds->namalelang = $request->namalelang;
//         $cruds->jenistawar = $request->jenistawar;
//         $cruds->hargamaksimal = $request->hargamaksimal;
//         $cruds->daftarlelang = $request->daftarlelang;
//         $cruds->tanggalbuka = $request->tanggalbuka;
//         $cruds->tanggaltutup = $request->tanggaltutup;
//
//         $file = $request->file('uploadfile');
//         $filename = $file->getClientOriginalExtension();
//         $request->$file->move("Upload/", $filename);
//
//         $cruds->uploadfile = $filename;
//         $cruds->save();
//
//         return redirect()->route('crud_lelang.index')->with('alert-success', 'Data Berhasil Disimpan.');
//     }
// }

}
