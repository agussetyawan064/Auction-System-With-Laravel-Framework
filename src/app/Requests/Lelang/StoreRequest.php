<?php

namespace App\Http\Requests\Lelang;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'namalelang' => 'required',
          'jenistawar' => 'required',
          'daftarlelang' => 'required',
          'hargamaksimal' => 'required',
          'tanggalbuka' => 'required',
          'tanggaltutup' => 'required',
          'uploadfile' => 'required|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'namalelang.required' => 'Nama Tidak Boleh Kosong.',
            'jenistawar.required' => 'Nomor Handphone Tidak Boleh Kosong.',
            'daftarlelang.required' => 'Nama Tidak Boleh Kosong.',
            'hargamaksimal.required' => "Harga Tidak Boleh Kosong",
            'tanggalbuka.required' => 'Nomor Handphone Tidak Boleh Kosong.',
            'tanggaltutup.required' => 'Nama Tidak Boleh Kosong.',
            'uploadfile.required' => "File tidak boleh kosong",
        ];
    }
}
