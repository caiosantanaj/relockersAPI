<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Estado::class, function (Faker $faker) {
    return [
        'estado' => $faker->randomElement($array = array('Disponivel', 'Indisponivel')),
    ];
});
