<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->dateTime('data_estimada');
            $table->dateTime('data_de_entrega');
            $table->dateTime('data_de_levantamento');
            $table->dateTime('data_de_entrada_no_sistema');
            $table->dateTime('data_de_entrega_pretendida');
            $table->string('tempo_limite_de_levantamento', 50);
            $table->string('temperatura');
            $table->text('obcervacoes');
            $table->string('codigo', 10);

            //FK
            $table->integer('cliente_id')->unsigned()->index();
            $table->foreign('cliente_id')->references('id')->on('clientes');

            $table->integer('cacifo_id')->unsigned()->index();
            $table->foreign('cacifo_id')->references('id')->on('cacifos');

            $table->integer('cacifo_tamanho_id')->unsigned()->index();
            $table->foreign('cacifo_tamanho_id')->references('id')->on('cacifos');

            $table->integer('cacifo_estado_id')->unsigned()->index();
            $table->foreign('cacifo_estado_id')->references('id')->on('cacifos');

            $table->integer('cacifo_localizacao_id')->unsigned()->index();
            $table->foreign('cacifo_localizacao_id')->references('id')->on('cacifos');

            $table->timestamps();
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
