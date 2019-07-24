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
            $table->enum('payment_frequency', ['DAILY', 'WEEKLY', 'BIWEEKLY', 'MONTHLY', 'ANNUAL']);
            $table->timestamp('finished_date');
            $table->integer('duration');
            $table->bigInteger('amount');
            $table->decimal('interest_rate');
            $table->timestamps();
            $table->softDeletes();
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
