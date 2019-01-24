<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstadoRequest extends FormRequest
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
            'estado.required' => 'É preciso ser envidado um estado.',
            'estado.unique' => 'O estado já existe.',
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
            'estado' => 'required|unique:estados|max:45'
        ];
    }
}
