<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Cliente::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->freeEmail,
        'telefone' => $faker->phoneNumber(),
    ];
});
