<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{

    protected $fillable = ['tipo'];

    function users()
    {
        //OneToMany
        return $this->hasMany(User::class);
    }
}
