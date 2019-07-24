<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('payment_frequency');
            $table->timestamp('finished_date');
            $table->integer('duration');
            $table->decimal('amount');
            $table->integer('credit_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('credit_id')
                  ->references('id')
                  ->on('credits')
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
        Schema::dropIfExists('groups');
    }
}
