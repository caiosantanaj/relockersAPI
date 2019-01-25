<?php

use Faker\Generator as Faker;
use App\Model\Encomenda;
use App\User;

$factory->define(App\Model\EncomendaUser::class, function (Faker $faker) {
    return [
        'encomenda_id' => Encomenda::all()->random()->id,
        'user_id' => User::all()->random()->id,
    ];
});
