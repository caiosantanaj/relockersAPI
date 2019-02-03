<?php

namespace App\Http\Resources\LogCacifo;

use Illuminate\Http\Resources\Json\JsonResource;

class LogCacifoResource extends JsonResource
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

            'data_hora' => $this->data_hora,
            'cacifo_numero' => $this->cacifo_numero,
            'encomenda_numero' => $this->encomenda_numero,

            'user_id' => $this->user_id,
            'user_name' => $this->user_name,
            'user_tipo' => $this->user_tipo,

            'cliente_id' => $this->cliente_id,
            'cliente_nome' => $this->cliente_nome,

            'cacifo' => new CacifoResource($this->cacifo),

            'href' => [
                'link' => route('log.show', $this->id),
                'cacifo' => route('cacifos.show', $this->cacifo_id),
            ],
        ];
    }
}
