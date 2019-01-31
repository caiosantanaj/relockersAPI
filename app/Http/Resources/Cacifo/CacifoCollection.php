<?php

namespace App\Http\Resources\Cacifo;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\Tamanho\TamanhoResource;
use App\Http\Resources\Estado\EstadoResource;
use App\Http\Resources\Localizacao\LocalizacaoResource;

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
            'id' => $this->id,
            'numero' => $this->numero,
            'temperatura' => (string)($this->temperatura),
            'tamanho_id' => $this->tamanho_id,
            'estado_id' => $this->estado_id,
            'localizacao_id' => $this->localizacao_id,
            'tamanho' => new TamanhoResource($this->tamanho),
            'estado' => new EstadoResource($this->estado),
            'localizacao' => new LocalizacaoResource($this->localizacao),

            'href' => [
                'link' => route('cacifos.show', $this->id),
                'tamanho' => route('tamanhos.show', $this->tamanho_id),
                'estado' => route('estados.show', $this->estado_id),
                'localizacao' => route('localizacaos.show', $this->localizacao_id),
            ],
        ];
    }
}
