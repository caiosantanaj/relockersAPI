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
            $table->integer('tamanho_id')->unsigned()->index();
            $table->integer('estado_id')->unsigned()->index();
            $table->integer('localizacao_id')->unsigned()->index();

            $table->timestamps();
        });

        //FK
        Schema::table('cacifos', function (Blueprint $table) {
            $table->foreign('tamanho_id')->references('id')->on('tamanhos');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('localizacao_id')->references('id')->on('localizacaos');
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
