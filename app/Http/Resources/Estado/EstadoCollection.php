<?php

namespace App\Http\Resources\Estado;

use Illuminate\Http\Resources\Json\Resource;

class EstadoCollection extends Resource
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
            'estado' => $this->estado,
            'href' => [
                'link' => route('estados.show', $this->id),
            ],
        ];
    }
}
