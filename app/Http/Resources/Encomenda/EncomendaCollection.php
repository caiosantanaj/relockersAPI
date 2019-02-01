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
            'data_estimada' => $this->data_estimada,
            'data_de_entrega' => $this->data_de_entrega,
            'data_de_levantamento' => $this->data_de_levantamento,
            'data_de_entrada' => $this->data_de_entrada_no_sistema,
            'data_de_entrega_pretendida' => $this->data_de_entrega_pretendida,
            'tempolimite_de_levantamento' => $this->tempo_limite_de_levantamento,
            'temperatura' => (string)($this->temperatura),
            'observacoes' => $this->observacoes,
            'tamanho' => $this->tamanho,
            'localizacao' => $this->localizacao,
            // 'estafeta' => $this->whenPivotLoaded('encomenda_user', function () {
            //     return $this->pivot->id;
            // }),

            'cliente' => $this->cliente->id,
            'estafeta' => $this->users,
            'cacifo' => new CacifoResource($this->cacifo),
            'cliente' => new ClienteResource($this->cliente),

            'href' => [
                'link' => route('encomendas.show', $this->id),
                'cacifo' => route("cacifos.show", $this->cacifo),
                'cliente' => route("clientes.show", $this->cliente),
            ]
        ];
    }
}
