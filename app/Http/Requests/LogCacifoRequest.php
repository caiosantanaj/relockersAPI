<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class LogCacifoRequest extends FormRequest
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
            'data_hora.required' => 'O log precisa de ter uma hora associda.',
            'data_hora.date_format' => 'Formato da data_hora é inválido. (Y-m-d H:i:s)',

            'cacifo_numero.required' => 'O log precisa de um cacifo associado.',
            'cacifo_numero.between' => 'O número tem de estar entre :min e :max.',

            'encomenda_numero.required' => 'O log precisa de uma encomenda associada.',
            'encomenda_numero.min' => 'A encomenda tem um valor mínimo de :min.',
            'encomenda_numero.exists' => 'O número da encomenda não existe.',

            'user_id.exists' => 'O user_id não é válido.',

            'user_name.exists' => 'O nome do utilizador não é válido.',

            'user_tipo.required' => 'O utilizador inserido no log tem de ter um tipo.',
            'user_tipo.exists' => 'O tipo de utilizador não é válido.',

            'cliente_id.exists' => 'O id do cliente não é válido.',

            'cliente_nome.exists' => 'O nome do cliente não é válido.',

            'cacifo_id.exists' => 'O id do cacifo não é válido.',

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
            'data_hora' => 'required|date_format:Y-m-d H:i:s',
            'cacifo_numero' => 'required|numeric|exists:cacifos|between:1,25000',
            'encomenda_numero' => 'required|exists:encomendas|integer|min:1',
            'user_id' => 'exists:users,id',
            'user_name' => 'exists:users,name',
            'user_tipo' => 'exists:userTypes,tipo',
            'cliente_id' => 'exists:clientes,id',
            'cliente_nome' => 'exists:clientes,nome',
            'cacifo_id' => 'exists:cacifos,id',
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