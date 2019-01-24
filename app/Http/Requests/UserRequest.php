<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nome.required' => 'A tabela User precisoa de um campo \"nome\"',
            'nome.max' => 'O nome não pode ter mais de :max caracteres.',
            'nome.min' => 'O nome não pode ter menos de :min caracteres.',
            'email.required' => 'O Utilizador precisa de um e-mail',
            'email.unique' => 'O email :email já esxiste na tabela',
            'email.email' => 'O email é inválido',
            'password.required' => 'Utilizador precisa de uma password.',
            'password.min' => 'A password tem de ter no mínimo :min caracteres.',
            'password.confirmed' => 'A password precisa de ser confirmada ou a confirmação é inválida.',
            'tipoId.required' => 'O utilizador precisa de um tipo.',
            'tipoId.exists' => 'O tipoId não é válida.',
            'supervisorId.exists' => 'O supervisorId não é válido.',
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
            'nome' => 'required|min:3|max:250',
            'email' => 'required|unique:clientes|max:150|email',
            'password' => 'required|confirmed|min:6',
            'data_nascimento' => 'date',
            'tipoId' => 'required|exists:user_types,id',
            'supervisorId' => 'exists:users,id',
        ];
    }
}
