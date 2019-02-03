<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Localizacao::class, function (Faker $faker) {
    return [
        'nome' => $faker->streetName,
        'latitude' => $faker->latitude($min = -90, $max = 90),
        'longitude' => $faker->longitude($min = -180, $max = 180),
        'codigo_postal' => $faker->bothify('####-###'),
        'cidade' => $faker->city,
    ];
});
