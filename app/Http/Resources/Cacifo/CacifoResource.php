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
            'temperatura' => $this->temperatura,
            'codigo' => $this->codigo,
            'tamanhoId' => $this->tamanho_id,
            'estadoId' => $this->estado_id,
            'localizacaoId' => $this->localizacao_id,

            'tamanho' => new TamanhoResource($this->tamanho),
            'estado' => new EstadoResource($this->estado),
            'localizacao' => new LocalizacaoResource($this->localizacao),
        ];
    }
}
