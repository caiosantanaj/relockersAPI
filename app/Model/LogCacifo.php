<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LogCacifo extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $hidden = ['deleted_at', 'created_at', 'deleted_at'];

    protected $fillable = [
        'data_hora', 'cacifo_numero', 'encomenda_numero', 'user_id', 'user_name',
        'user_tipo', 'cliente_id', 'cliente_nome', 'cacifo_id'
    ];

    //OneToMany
    public function cacifo()
    {
        return $this->belongsTo(Cacifo::class);
    }
}