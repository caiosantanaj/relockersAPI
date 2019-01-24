<?php

namespace App\Http\Resources\Localizacao;

use Illuminate\Http\Resources\Json\Resource;

class LocalizacaoCollection extends Resource
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
            'nome' => $this->nome,
            'lat' => (string)($this->latitude),
            'long' => (string)($this->longitude),

            'href' => [
                'link' => route('localizacaos.show', $this->id),
            ],
        ];
    }
}
