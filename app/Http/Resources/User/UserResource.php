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
            'telefone' => $this->telefone,
            'data_nascimento' => $this->data_nascimento,
            'local_de_trabalho' => $this->local_de_trabalho,
            // 'img_url' => $this->img_url,
            'tipo_id' => $this->tipo_id,
            'supervisor_id' => $this->supervisor_id,
            'tipo' => new UserTypeResource($this->usertype),
        ];
    }
}
