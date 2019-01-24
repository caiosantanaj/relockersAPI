<?php

namespace App\Http\Resources\Cacifo;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Tamanho\TamanhoResource;
use App\Http\Resources\Estado\EstadoResource;
use App\Http\Resources\Localizacao\LocalizacaoResource;

class CacifoResource extends JsonResource
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
            'numero' => $this->numero,
            'temperatura' => (string)($this->temperatura),
            'codigo' => $this->codigo,
            'tamanhoId' => $this->tamanhoId,
            'estadoId' => $this->estadoId,
            'localizacaoId' => $this->localizacaoId,

            'tamanho' => new TamanhoResource($this->tamanho),
            'estado' => new EstadoResource($this->estado),
            'localizacao' => new LocalizacaoResource($this->localizacao),
        ];
    }
}
