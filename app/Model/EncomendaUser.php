<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class EncomendaUser extends Model
{
    use HasApiTokens, SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $hidden = ['deleted_at', 'created_at', 'deleted_at'];

    protected $fillable = [
        'encomenda_id', 'user_id', 'user_type',
    ];
}
