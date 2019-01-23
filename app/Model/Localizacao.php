<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    //OneToMany
    public function cacifos()
    {
        return $this->hasMany(Cacifo::class);
    }
}
