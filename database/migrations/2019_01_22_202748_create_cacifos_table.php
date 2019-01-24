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
            $table->float('temperatura', 3, 1);
            $table->string('codigo', 10);

            //FK
            $table->integer('tamanhoId')->unsigned()->index();
            $table->foreign('tamanhoId')->references('id')->on('tamanhos');

            $table->integer('estadoId')->unsigned()->index();
            $table->foreign('estadoId')->references('id')->on('estados');

            $table->integer('localizacaoId')->unsigned()->index();
            $table->foreign('localizacaoId')->references('id')->on('localizacaos');
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
