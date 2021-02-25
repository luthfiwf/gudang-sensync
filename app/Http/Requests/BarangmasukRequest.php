<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangmasukRequest extends FormRequest
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
            'nama_barang'  => 'required|max:255',
            'restock' => 'required|integer',
            'harga' => 'required|integer',
            'total' => 'required|integer',
            'tgl_masuk' => 'required|date',
            'status' => 'required|integer'
        ];
    }
}
