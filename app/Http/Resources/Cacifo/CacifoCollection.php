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
            'temeperatura' => (string)($this->temperatura),
            'tamanhoId' => $this->tamanhoId,
            'estadoId' => $this->estadoId,
            'localizacaoId' => $this->localizacaoId,

            'href' => [
                'link' => route('cacifos.show', $this->id),
                'tamano' => route('tamanhos.show', $this->tamanhoId),
                'estado' => route('estados.show', $this->estadoId),
                'localizacao' => route('localizacaos.show', $this->localizacaoId),
            ],
        ];
    }
}
