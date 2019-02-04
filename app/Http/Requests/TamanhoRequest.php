<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class TamanhoRequest extends FormRequest
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
            'tamanho.required' => 'É preciso ser enviado um campo \"tamanho\"',
            'tamanho.unique' => 'O tamanho já existe.',
            'tamanho.max' => 'O "tamnho" tem um máximo de :max caracteres.',
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
            'tamanho' => 'required|unique:tamanhos|max:3'
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
