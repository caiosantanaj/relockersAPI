<?php

namespace App\Http\Resources\Cacifo;

use Illuminate\Http\Resources\Json\Resource;

class CacifoCollection extends Resource
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
            'numero' => $this->numero,
            'temperatura' => (string)($this->temperatura),
            'tamanho_id' => $this->tamanho_id,
            'estado_id' => $this->estado_id,
            'localizacao_id' => $this->localizacao_id,

            'href' => [
                'link' => route('cacifos.show', $this->id),
                'tamano' => route('tamanhos.show', $this->tamanho_id),
                'estado' => route('estados.show', $this->estado_id),
                'localizacao' => route('localizacaos.show', $this->localizacao_id),
            ],
        ];
    }
}
