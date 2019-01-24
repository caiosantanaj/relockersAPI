<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

    protected $fillable = ['estado'];

    //OneToMany
    public function cacifos()
    {
        return $this->hasMany(Cacifo::class);
    }
}
