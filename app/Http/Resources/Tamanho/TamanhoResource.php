<?php

namespace App\Http\Resources\Tamanho;

use Illuminate\Http\Resources\Json\JsonResource;

class TamanhoResource extends JsonResource
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
            'tamanho' => $this->tamanho,
        ];
    }
}
