<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Encomenda extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    protected $fillable = [
        'numero_encomenda', 'data_estimada', 'data_de_entrega', 'data_de_entrada_no_sistema',
        'data_de_entrega_pretendida', 'tempo_limite_de_levantamento', 'observacoes',
        'data_de_levantamento', 'temperatura', 'tamanho', 'localizacao'
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

    public function users()
    {
        return $this->belongsToMany(User::class, 'encomenda_user', 'encomenda_id', 'user_id');
        //, 'encomenda_user', 'encomenda_id', 'user_id'
    }
}
