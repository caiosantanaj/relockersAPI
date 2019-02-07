<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class UserType extends Model
{
    use HasApiTokens, SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $hidden = ['deleted_at', 'created_at', 'deleted_at'];

    protected $fillable = ['tipo'];

    protected $table = 'usertypes';

    function users()
    {
        //OneToMany
        return $this->hasMany(User::class);
    }
}
