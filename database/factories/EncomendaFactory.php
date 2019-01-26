<?php

use Faker\Generator as Faker;
use App\Model\Cliente;
use App\Model\Cacifo;

$factory->define(App\Model\Encomenda::class, function (Faker $faker) {

    return [
        'data_estimada' => $faker->dateTime($max = 'now', $timezone = 'Europe/Lisbon'),
        'data_de_entrega' => $faker->dateTime($max = 'now', $timezone = 'Europe/Lisbon'),
        'data_de_levantamento' => $faker->dateTime($max = 'now', $timezone = 'Europe/Lisbon'),
        'data_de_entrada_no_sistema' => $faker->dateTime($max = 'now', $timezone = 'Europe/Lisbon'),
        'data_de_entrega_pretendida' => $faker->dateTime($max = 'now', $timezone = 'Europe/Lisbon'),
        'temperatura' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 12),
        'observacoes' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'tempo_limite_de_levantamento' => $faker->randomFloat($nbMaxDecimals = 0, $min = 1, $max = 4),
        'tamanho' => $faker->randomElement($array = array('S', 'M', 'L', 'XL')),
        'localizacao' => $faker->streetName,

        'cliente_id' => Cliente::all()->random()->id,
        'cacifo_id' => Cacifo::all()->random(),

    ];
});
