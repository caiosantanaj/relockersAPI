<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Tamanho::class, function (Faker $faker) {
    return [
        'tamanho' => $faker->randomElement($array = array('S', 'M', 'L', 'XL')),
    ];
});
