<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cacifo extends Model
{

    protected $fillable = ['numero', 'tamanho_id', 'estado_id', 'localizacao_id', 'temperatura', 'codigo'];

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
