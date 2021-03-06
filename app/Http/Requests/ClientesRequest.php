<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
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
            'nome' => 'required|min:3|max:60',
            'cpf' => 'required|max:11|unique:clientes,cpf,'.$this->id,
            'email' => 'required|email|unique:clientes,email,'.$this->id,
            'telefone' => 'digits_between:10,11|integer',
        ];
    }
}
