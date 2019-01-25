<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class EncomendaUser extends Model
{
    protected $fillable = [
        'encomenda_id', 'user_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'encomenda_user', 'user_id', 'encomenda_id');
    }

    public function encomendas()
    {
        return $this->belongsToMany(Encomenda::class, 'encomenda_user', 'encomenda_id', 'user_id');
    }
}
