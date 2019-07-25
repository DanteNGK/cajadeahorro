<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->integer('clave')->unique()->autoIncrement();
            $table->string('street');
            $table->string('postcode');
            $table->string('municipality');
            $table->string('neighborhood');
            $table->integer('user_clave');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('clave')
                  ->references('clave')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
