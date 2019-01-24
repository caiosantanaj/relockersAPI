<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{

    protected $fillable = ['tamanho'];

    //OneToMany
    public function cacifos()
    {
        return $this->hasMany(Cacifo::class);
    }
}
