<?php

namespace App\Http\Resources\Encomenda;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Tamanho\TamanhoCollection;
use App\Http\Resources\Cacifo\CacifoCollection;
use App\Http\Resources\Cacifo\CacifoResource;
use App\Http\Resources\Cliente\ClienteResource;

class EncomendaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
            'data_de_entrada_no_sistema' => $this->data_de_entrada_no_sistema,
            'data_de_entrega_pretendida' => $this->data_de_entrega_pretendida,
            'tempo_limite_de_levantamento' => $this->tempo_limite_de_levantamento,
            'temperatura' => $this->temperatura,
            'obcervacoes' => $this->obcervacoes,
            'codigo' => $this->codigo,
            'cacifo' => new CacifoResource($this->cacifo),
            'cliente' => new ClienteResource($this->cliente),

            'href' => [
                'cliente' => route("clientes.show", $this->cliente_id),
                'cacifo' => route("cacifos.show", $this->cacifo),
                // 'estado' => route('estados.show', $this->cacifo_estado_id),
                // 'tamanho' => route('tamanhos.show', $this->cacifo_tamanho_id),
                // 'localizacao' => route('localizacoes.show', $this->cacifo_localizacao_id),
            ]
        ];
    }
    //CategoryCollection::collection ($this->categories),
}
