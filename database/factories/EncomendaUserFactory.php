<?php

use Faker\Generator as Faker;
use App\Model\Encomenda;
use App\User;

$factory->define(App\Model\EncomendaUser::class, function (Faker $faker) {

    $user = User::all()->random();
    dd($user);
    return [
        'encomenda_id' => Encomenda::all()->random()->id,
        'user_id' => $user->id,
        'user_type' => $user->tipo_id,
    ];
});
