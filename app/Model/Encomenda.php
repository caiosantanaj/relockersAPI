<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Encomenda extends Model
{

    protected $fillable = [
        'data_estimada', 'data_de_entrega', 'data_de_entrada_no_sistema',
        'data_de_entrega_pretendida', 'tempo_limite_de_levantamento', 'observacoes'
    ];

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
