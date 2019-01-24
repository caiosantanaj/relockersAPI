<?php

use Faker\Generator as Faker;
use App\Model\Tamanho;
use App\Model\Estado;
use App\Model\Localizacao;

$factory->define(App\Model\Cacifo::class, function (Faker $faker) {
    return [
        'numero' => $faker->numberBetween($min = 1, $max = 500),
        'temperatura' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 12),
        'codigo' => $faker->regexify('([a-zA-Z0-9_-]){5,10}'),

        'tamanhoId' => Tamanho::all()->random()->id,
        'estadoId' => Estado::all()->random()->id,
        'localizacaoId' => Localizacao::all()->random()->id
    ];
});
