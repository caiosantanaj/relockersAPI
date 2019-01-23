<?php

namespace App\Http\Resources\Cliente;

use Illuminate\Http\Resources\Json\Resource;

class ClienteCollection extends Resource
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
            'email' => $this->email,
            'telefone' => $this->telefone,

            'href' => [
                'link' => route('clientes.show', $this->id),
            ],
        ];
    }
}
