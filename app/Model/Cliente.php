<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $fillable = ['nome', 'email', 'telefone'];

    //OneToMany
    public function encomendas()
    {
        return $this->hasMany(Encomenda::class);
    }
}
