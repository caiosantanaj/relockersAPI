<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use Laravel\Passport\HasApiTokens;

class Encomenda extends Model
{
    use HasApiTokens, SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    protected $fillable = [
        'data_de_entrada_no_sistema', 'data_de_entrega_pretendida',
        'tempo_limite_de_levantamento', 'data_de_entrega', 'data_de_levantamento', 'estado_encomenda',
        'temperatura', 'observacoes', 'tamanho', 'cliente_id', 'cacifo_id'
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
    }
}
