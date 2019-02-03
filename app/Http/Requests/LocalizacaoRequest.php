<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocalizacaoRequest extends FormRequest
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
            'nome.required' => 'A localização precisa de um nome.',
            'nome.unique' => 'O nome da localização já existe.',
            'nome.string' => 'O campo "nome" é do tipo string.',

            'latitude.required' => 'A localização precisa de uma latitude.',
            'latitude.numeric' => 'O campo "localizacao" é do tipo float.',


            'longitude.required' => 'A localização precisa de uma longitude.',
            'longitude.numeric' => 'O campo "localizacao" é do tipo float.',

            'codigo_postal.required' => 'A localização precisa de um código postal.',
            'codigo_postal.string' => 'O campo "codigo_postal" é do tipo string.',

            'cidade.required' => 'A localização precisa de uma cidade.',
            'cidade.string' => 'O campo "cidade" é do tipo string.',

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
            'nome' => 'required|string|unique:localizacaos|max:150',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'codigo_postal' => 'required|string',
            'cidade' => 'required|string',
        ];
    }
}
