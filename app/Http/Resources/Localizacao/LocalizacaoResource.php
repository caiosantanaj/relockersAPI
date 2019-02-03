<?php

namespace App\Http\Resources\Localizacao;

use Illuminate\Http\Resources\Json\JsonResource;

class LocalizacaoResource extends JsonResource
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
            'nome' => $this->nome,
            'lat' => (string)($this->latitude),
            'long' => (string)($this->longitude),
            'codigo_postal' => $this->codigo_postal,
            'cidade' => $this->cidade,
        ];
    }
}
