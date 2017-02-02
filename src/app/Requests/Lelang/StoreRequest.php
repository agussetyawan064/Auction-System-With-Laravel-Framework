<?php

namespace App\Http\Requests\Crud;

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
          'namalelang' => 'Required',
          'jenistawar' => 'Required',
          'daftarlelang' => 'Required',
          'tanggalbuka' => 'Required',
          'tanggaltutup' => 'Required',
          'uploadfile' => 'Required'
        ];
    }

    public function messages()
    {
        return [
            'namalelang.required' => 'Nama Tidak Boleh Kosong.',
            'jenistawar.required' => 'Nomor Handphone Tidak Boleh Kosong.'
            'daftarlelang.required' => 'Nama Tidak Boleh Kosong.',
            'tanggalbuka.required' => 'Nomor Handphone Tidak Boleh Kosong.'
            'tanggaltutup.required' => 'Nama Tidak Boleh Kosong.',
            'uploadfile.required' => 'Nomor Handphone Tidak Boleh Kosong.'
        ];
    }
}
