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
            $table->timestamp('finished_date')->nullable();
            $table->integer('duration')->nullable();
            $table->decimal('amount');
            $table->integer('payment_frequency_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('payment_frequency_id')
                  ->references('id')
                  ->on('payment_frequencies')
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
