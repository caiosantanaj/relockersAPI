<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncomendaUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encomenda_user', function (Blueprint $table) {
            // $table->increments('id');
            $table->integer('encomenda_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('user_type')->unsigned();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('encomenda_user', function (Blueprint $table) {
            $table->foreign('encomenda_id')->references('id')->on('encomendas')->onDelete('cascade');
            $table->foreign('user_id')->unsigned()->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encomenda_user');
    }
}