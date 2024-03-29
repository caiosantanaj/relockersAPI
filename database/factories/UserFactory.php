<?php

use Faker\Generator as Faker;
use App\Model\UserType;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
 */

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'telefone' => $faker->phoneNumber(),
        'data_nascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'email' => $faker->unique()->freeEmail,
        //'email_verified_at' => now(),
        'local_de_trabalho' => "TDIStore",

        'password' => $faker->password, // secret
        'remember_token' => str_random(10),

        'tipo_id' => UserType::all()->random()->id,

        //???
        'supervisor_id' => 1
        //User::all()->random()->idUser,
    ];
});
