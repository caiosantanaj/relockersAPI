<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\UserType;
use App\Model\Encomenda;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'telefone', 'data_nascimento', 'tipo_id', 'supervisor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'created_at', 'updated_at', 'deleted_at'
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
