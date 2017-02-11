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
            'namaperusahaan' => 'required',
            'alamatperusahaan' => 'required',
            'kotaperusahaan' => 'required',
            'npwp' => 'required',
            'notelepon' => 'required'
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
