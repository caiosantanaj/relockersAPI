<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('email')->unique();
//            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            //FK
            $table->integer('tipo_id')->unsigned()->index();
            $table->foreign('tipo_id')->references('id')->on('user_types');

            $table->integer('supervisor_id')->unsigned()->index();
            $table->foreign('supervisor_id')->references('id')->on('users');



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
        Schema::dropIfExists('users');
    }
}
