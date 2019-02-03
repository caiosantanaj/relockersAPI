<?php

use Faker\Generator as Faker;
use App\Model\Cacifo;
use App\Model\Encomenda;
use App\User;
use App\Model\UserType;
use App\Model\Cliente;

$factory->define(App\Model\LogCacifo::class, function (Faker $faker) {

    $user = User::all()->random();
    $cacifo = Cacifo::all()->random();
    $cliente = Cliente::all()->random();

    return [
        'data_hora' => $faker->dateTime($max = 'now', $timezone = 'Europe/Lisbon'),

        'cacifo_numero' => $cacifo->numero,
        'encomenda_numero' => Encomenda::all()->random()->id,

        'user_id' => $user->id,
        'user_name' => $user->nome,
        'user_tipo' => UserType::all()->random()->tipo,

        'cliente_id' => $cliente->id,
        'cliente_nome' => $cliente->nome,

        'cacifo_id' => $cacifo->id,
    ];
});
