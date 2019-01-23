<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserType\UserTypeResource;

class UserResource extends JsonResource
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
            'email' => $this->email,
            'password' => $this->password,
            'data_nascimento' => $this->data_nascimento,
            'tipoId' => $this->tipo,
            'supervisorId' => $this->idSupervisor,
            'tipo' => new UserTypeResource($this->userType),
        ];
    }
}
