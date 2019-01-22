<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCacifosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cacifos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->string('temperatura');
            $table->string('codigo', 10);

            //FK
            $table->integer('tamanho_id')->unsigned()->index();
            $table->foreign('tamanho_id')->references('id')->on('tamanhos');

            $table->integer('estado_id')->unsigned()->index();
            $table->foreign('estado_id')->references('id')->on('estados');

            $table->integer('localizacao_id')->unsigned()->index();
            $table->foreign('localizacao_id')->references('id')->on('localizacaos');
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
        Schema::dropIfExists('cacifos');
    }
}
