<?php

namespace App\Http\Resources\Encomenda;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\Cacifo\CacifoResource;
use App\Http\Resources\Cliente\ClienteResource;

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
            'id' => $this->id,
            //'numero_encomenda' => $this->numero_encomenda,
            'data_de_entrega' => $this->data_de_entrega,
            'data_de_levantamento' => $this->data_de_levantamento,
            'data_de_entrada_no_sistema' => $this->data_de_entrada_no_sistema,
            'data_de_entrega_pretendida' => $this->data_de_entrega_pretendida,
            'tempo_limite_de_levantamento' => $this->tempo_limite_de_levantamento,
            'estado_encomenda' => $this->estado_encomenda,
            'temperatura' => (string)($this->temperatura),
            'observacoes' => $this->observacoes,
            'tamanho' => $this->tamanho,
            // 'estafeta' => $this->whenPivotLoaded('encomenda_user', function () {
            //     return $this->pivot->id;
            // }),

            //'person' => $this->person !== null ? $this->person : '',

            'cliente_id' => $this->cliente == null ? '' : $this->cliente->id,
            'estafeta' => $this->users,
            'cacifo' => $this->cacifo == null ? '' : new CacifoResource($this->cacifo),
            'cliente' => $this->cliente == null ? '' : new ClienteResource($this->cliente),

            'href' => [
                'link' => route('encomendas.show', $this->id),
                'cacifo' => $this->cacifo == null ? '' : route("cacifos.show", $this->cacifo),
                'cliente' => $this->cliente == null ? '' : route("clientes.show", $this->cliente),
            ]
        ];
    }
}
