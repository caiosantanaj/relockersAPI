<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\UserType\UserTypeResource;

class UserCollection extends Resource
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
            'data_nascimento' => $this->data_nascimento,
            'tipo_id' => $this->tipo_id,
            'supervisor_id' => $this->supervisor_id,
        ];
    }
}