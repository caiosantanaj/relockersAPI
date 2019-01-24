<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CacifoRequest extends FormRequest
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
            'numero.required' => 'O cacifo precisa de um número.',
            'numero.between' => 'O número tem de estar entre :min e :max.',
            'numero.unique' => 'Um cacifo com este número já existe.',
            'temperatura.between' => 'A temperatura deve estar entre :min e :max.',
            'codigo.max' => 'O código tem o número máximo de caracters de :max.',
            'codigo.min' => 'O código tem o número mínimo de caracters de :min.',
            'tamanhoId.required' => 'O cacifo precisa de um tamanho.',
            'tamanhoId.exists' => 'O tamanhoId não é válido.',
            'estadoId.required' => 'O cacifo precisa de um estado.',
            'estadoId.exists' => 'O estadoId não é válida.',
            'localizacaoId.required' => 'O cacifo precisa de uma localização.',
            'localizacaoId.exists' => 'O localizacaoId não é válida.',
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
            'numero' => 'required|unique:cacifos|numeric|between:1,25000',
            'temperatura' => 'numeric|between:0,20',
            'codigo' => 'min:5|max:10',
            'tamanhoId' => 'required|exists:tamanhos,id',
            'estadoId' => 'required|exists:estados,id',
            'localizacaoId' => 'required|exists:localizacaos,id',
        ];
    }
}
