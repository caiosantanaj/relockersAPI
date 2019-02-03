<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogCacifosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_cacifos', function (Blueprint $table) {
            $table->increments('id');

            $table->dateTime('data_hora');
            $table->integer('cacifo_numero');
            $table->integer('encomenda_numero');

            $table->integer('user_id');
            $table->string('user_name');
            $table->string('user_tipo');

            $table->integer('cliente_id');
            $table->string('cliente_nome');

            //FK
            $table->integer('cacifo_id')->unsigned()->index();

            $table->timestamps();
            $table->softDeletes();
        });

        //FK
        Schema::table('log_cacifos', function (Blueprint $table) {
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
        Schema::dropIfExists('log_cacifos');
    }
}
