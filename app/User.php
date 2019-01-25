<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\UserType;
use App\Model\Encomenda;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function usertype()
    {
        return $this->belongsTo(UserType::class, 'tipo_id');
    }

    function encomendas()
    {
        return $this->belongsToMany(Encomenda::class, 'encomenda_user', 'user_id', 'encomenda_id'); 
        // 'encomenda_user', 'user_id', 'encomenda_id'
    }
}
