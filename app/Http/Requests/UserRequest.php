<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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
            'nome.required' => 'O utilizador precisa de um \"nome\".',
            'nome.max' => 'O nome não pode ter mais de :max caracteres.',
            'nome.min' => 'O nome não pode ter menos de :min caracteres.',

            'email.required' => 'O Utilizador precisa de um e-mail.',
            'email.unique' => 'O email :email já esxiste na tabela.',
            'email.email' => 'O email é inválido.',

            'password.required' => 'Utilizador precisa de uma password.',
            'password.min' => 'A password tem de ter no mínimo :min caracteres.',
            'password.confirmed' => 'A password precisa de ser confirmada ou a confirmação é inválida.',

            'tipo_id.required' => 'O utilizador precisa de um tipo.',
            'tipo_id.exists' => 'O tipo_id não é válida.',

            'supervisor_id.exists' => 'O supervisor_id não é válido.',

            'telefone.required' => 'O utilizador precisa de um telefone',

            'local_de_trabalho.required' => 'O utilizador precisa de um lugar de trabalho',
            'local_de_trabalho.max' => 'O local de trabalho não pode ter mais de :max caracteres.',
            'local_de_trabalho.min' => 'O local de trabalho não pode menos de :min caracteres.',
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
            'telefone' => 'required|max:13',
            'data_nascimento' => 'date',
            'local_de_trabalho' => 'required|min:3|max:250',
            'tipo_id' => 'required|exists:usertypes,id',
            'supervisor_id' => 'exists:users,id',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json(
                [
                    'status' => 422,
                    'data' => $validator->errors(),
                    'msg' => 'Erro de validação.'
                ],
                422
            )
        );
    }
}
