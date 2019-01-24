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
            'latitude.required' => 'A localização precisa de uma latitude',
            'longitude.required' => 'A localização precisa de uma longitude',
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
            'nome' => 'required|unique:localizacaos|max:150',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
        ];
    }
}