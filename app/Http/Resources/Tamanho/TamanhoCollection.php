<?php

namespace App\Http\Resources\Tamanho;

use Illuminate\Http\Resources\Json\Resource;

class TamanhoCollection extends Resource
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
            'tamanho' => $this->tamanho,

            'href' => [
                'link' => route('tamanhos.show', $this->id),
            ],
        ];
    }
}
