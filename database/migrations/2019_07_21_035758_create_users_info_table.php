<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_info', function (Blueprint $table) {
            $table->increments('clave');
            $table->string('name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('street');
            $table->string('neighborhood');
            $table->string('postal_code');
            $table->string('municipality');
            $table->string('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('cellphone'); 
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_info');
    }
}
