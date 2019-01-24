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
            'data_nascimento' => $this->data_nascimento,
            'tipoId' => $this->tipoId,
            'supervisorId' => $this->supervisorId,
        ];
    }
}