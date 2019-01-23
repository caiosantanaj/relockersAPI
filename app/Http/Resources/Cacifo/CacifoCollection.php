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
            'temeperatura' => $this->temperatura,
            'tamanhoId' => $this->tamanho_id,
            'estadoId' => $this->estado_id,
            'localizacaoId' => $this->localizacao_id,

            'href' => [
                'link' => route('cacifos.show', $this->id),
                'tamano' => route('tamanhos.show', $this->tamanho_id),
                'estado' => route('estados.show', $this->estado_id),
                'localizacao' => route('localizacoes.show', $this->localizacao_id),
            ],
        ];
    }
}
