<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'tamanho' => 'required|unique:tamanhos|max:45'
        ];
    }
}
