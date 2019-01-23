<?php

namespace App\Http\Resources\Encomenda;

use Illuminate\Http\Resources\Json\Resource;

class EncomendaCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data_estimada' => $this->data_estimada,
            'data_de_entrega' => $this->data_de_entrega,
            'data_de_levantamento' => $this->data_de_levantamento,
            'data_de_entrada' => $this->data_de_entrada_no_sistema,
            'data_de_entrega_pretendida' => $this->data_de_entrega_pretendida,
            'tempolimite_de_levantamento' => $this->tempo_limite_de_levantamento,
            'temperatura' => $this->temperatura,
            'observacoes' => $this->obcervacoes,

            'href' => [
                'link' => route('encomendas.show', $this->id),
                'tamanho' => route('tamanhos.show', $this->id),
                'estado' => route('estados.show', $this->id),
                'localizacao' => route('localizacoes.show', $this->id),
                'cacifo' => route("cacifos.show", $this->id),
                'cliente' => route("clientes.show", $this->id),
            ]
        ];
    }
}
