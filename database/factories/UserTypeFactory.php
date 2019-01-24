<?php

use Faker\Generator as Faker;

$factory->define(App\Model\UserType::class, function (Faker $faker) {
    return [
        'tipo' => $faker->randomElement($array = array('Admin', 'Estafeta')),
    ];
});
