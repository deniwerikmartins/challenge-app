<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AparelhoCreateRequest extends FormRequest
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
            'nome' => 'required',
            'IMEI' => 'required|unique:aparelhos',
            'marca' => 'required',
            'modelo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'o campo nome é obrigatório',
            'IMEI.required' => 'o campo IMEI é obrigatório',
            'IMEI.unique' => 'o campo IMEI deve ser único',
            'marca.required' => 'o campo marca é obrigatório',
            'modelo' => 'o campo modelo é obrigatório'
        ];
    }
}
