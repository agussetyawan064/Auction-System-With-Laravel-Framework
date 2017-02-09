<?php

namespace App\Http\Requests\Crud;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'namaperusahaan' => 'Required',
          'alamatperusahaan' => 'Required',
          'kotaperusahaan' => 'Required',
          'npwp' => 'Required',
          'notelepon' => 'Required'
        ];
    }

    public function messages()
    {
        return [
          'namaperusahaan.required' => 'Nama Tidak Boleh Kosong.',
          'alamatperusahaan.required' => 'Alamat Tidak Boleh Kosong.',
          'kotaperusahaan.required' => 'Kota Tidak Boleh Kosong',
          'npwp.required' => 'NPWP Tidak Boleh Kosong',
          'notelepon.required' => 'Nomor Telepon Tidak Boleh Kosong'
        ];
    }
}
