<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

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
            'tipo' => new UserTypeResource($this->userType)
        ];
    }
}


// $table->increments('id');
// $table->string('nome');
// $table->date('data_nascimento');
// $table->string('email')->unique();
// //            $table->timestamp('email_verified_at')->nullable();
// $table->string('password');
// $table->rememberToken();

////FK
// $table->integer('tipo')->unsigned()->index();
// $table->foreign('tipo')->references('id')->on('user_types');

// $table->integer('idSupervisor')->unsigned()->index();
// $table->foreign('idSupervisor')->references('id')->on('users');