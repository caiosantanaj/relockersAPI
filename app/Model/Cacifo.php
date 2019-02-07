<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Cacifo extends Model
{
    use HasApiTokens, SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $hidden = ['deleted_at', 'created_at', 'deleted_at'];

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

    public function cacifoLogs()
    {
        return $this->hasMany(LogCacifo::class);
    }
}
