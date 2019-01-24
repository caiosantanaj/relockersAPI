<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{

    protected $fillable = ['nome', 'latitude', 'longitude'];

    //OneToMany
    public function cacifos()
    {
        return $this->hasMany(Cacifo::class);
    }
}
