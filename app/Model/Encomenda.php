<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Encomenda extends Model
{
    //OneToMany(inverse)
    public function cacifo()
    {
        return $this->belongsTo(Cacifo::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function utilizadores()
    {
        return $this->belongsToMany(User::class);
    }
}
