<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cacifo extends Model
{

    protected $fillable = ['numero', ];

    //OneToMany(inverse)
    public function tamanho()
    {
        return $this->belongsTo(Tamanho::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function localizacao()
    {
        return $this->belongsTo(Localizacao::class);
    }


    //OneToMany
    public function encomendas()
    {
        return $this->hasMany(Encomenda::class);
    }
}
