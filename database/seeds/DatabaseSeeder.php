<?php

use Illuminate\Database\Seeder;
use App\Model\Localizacao;
use App\Model\Estado;
use App\Model\Tamanho;
use App\Model\Cacifo;
use App\Model\Cliente;
use App\Model\Encomenda;
use App\Model\UserType;
use App\User;
use Carbon\Carbon;
use App\Model\LogCacifo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Localizacao::class, 5)->create();
        factory(Estado::class, 2)->create();
        factory(Tamanho::class, 4)->create();
        factory(Cacifo::class, 20)->create();
        factory(Cliente::class, 10)->create();
        factory(UserType::class, 2)->create();
        factory(User::class, 8)->create();
        factory(Encomenda::class, 25)->create();
        factory(LogCacifo::class, 20)->create();

        foreach (Encomenda::all() as $encomenda) {
            $user = User::all()->random();
            DB::table('encomenda_user')->insert(
                [
                    'user_id' => $user->id,
                    'encomenda_id' => $encomenda->id,
                    'user_type' => $user->tipo_id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
            );
        }

    }
}
