<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;

class CreateEncomendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encomendas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('numero_encomenda')->unsigned()->unique();

            $table->dateTime('data_estimada');
            $table->dateTime('data_de_entrada_no_sistema');
            $table->dateTime('data_de_entrega_pretendida');
            $table->dateTime('tempo_limite_de_levantamento');

            $table->dateTime('data_de_entrega')->nullable();
            $table->dateTime('data_de_levantamento')->nullable();

            $table->boolean('estado_encomenda');
            $table->float('temperatura', 3, 1);
            $table->string('observacoes');
            $table->string('tamanho');
            $table->string('localizacao');

            //FK
            $table->integer('cliente_id')->unsigned()->index();
            $table->integer('cacifo_id')->unsigned()->index()->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        //FK
        Schema::table('encomendas', function (Blueprint $table) {
            //$table->foreign('id')->references('encomenda_id')->on('encomenda_user');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('cacifo_id')->references('id')->on('cacifos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encomendas');
    }
}
