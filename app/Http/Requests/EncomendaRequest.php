<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EncomendaRequest extends FormRequest
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

            'data_de_entrada_no_sistema.required' => 'A encomenda precisa de uma data de entrada no sistema.',
            'data_de_entrada_no_sistema.date_format' => 'Formato da data é inválido. (Y-m-d H:i:s)',

            'data_estimada.required' => 'A encomenda precisa ter uma estimativa da data de entrega',
            'data_estimada.date_format' => 'Formato da data é inválido. (Y-m-d H:i:s)',

            'data_de_entrega_pretendida.required' => 'A encomenda precisa ter uma data de entrega',
            'data_de_entrega_pretendida.date_format' => 'Formato da data é inválido. (Y-m-d H:i:s)',

            'data_de_entrega.date_format' => 'Formato da data é inválido. (Y-m-d H:i:s)',
            'data_de_levantamento.date_format' => 'Formato da data é inválido. (Y-m-d H:i:s)',
            'temperatura.between' => 'A temperatura deve estar entre :min e :max.',
            'observacoes.max' => 'O campo observações tem um limite de :max caracteres',

            'tempo_limite_de_levantamento.required' => 'O utilizador precisa de um tipo.',
            'tempo_limite_de_levantamento.between' => 'O tempo de levantamento deve estar compreendido entre :min e :max.',

            'localizacao.required' => 'A encomenda precisa de uma localização.',
            'localizacao.max' => 'O campo localizacão tem um máximo de :max caracteres.',

            'tamanho.required' => 'A encomenda precisa de um tamanho.',
            'tamanho.max' => 'O campo tamanho tem um máximo de :max caracteres.',

            'cliente_id.required' => 'A encomenda tem de ter um cliente associado.',
            'cliente_id.exists' => 'O cliente_id não é válido.',
            'cacifo_id.exists' => 'O cacifo_id não é válido.',
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
            'data_de_entrada_no_sistema' => 'required|date_format:Y-m-d H:i:s',
            'data_estimada' => 'required|date_format:Y-m-d H:i:s',
            'data_de_entrega_pretendida' => 'required|date_format:Y-m-d H:i:s',
            'data_de_entrega' => 'date_format:Y-m-d H:i:s',
            'data_de_levantamento' => 'date_format:Y-m-d H:i:s',
            'temperatura' => 'numeric|between:0,20',
            'observacoes' => 'max: 1000',
            'localizacao' => 'required|max:150',
            'tamanho' => 'required|max:3',
            'tempo_limite_de_levantamento' => 'required|between:1,12',
            'cliente_id' => 'required|exists:clientes,id',
            'cacifo_id' => 'exists:cacifos,id',
        ];
    }
}