<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nome.required' => 'O cliente precisa de um nome.',
            'email.required' => 'O cliente precisa de um e-mail',
            'email.unique' => 'O email :email já esxiste na tabela',
            'email.email' => 'O email é inválido',
            'telefone.required' => 'O cliente precisa de um telefone',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:250',
            'email' => 'required|unique:clientes|max:150|email',
            'telefone' => 'required|max:13',
        ];
    }
}
