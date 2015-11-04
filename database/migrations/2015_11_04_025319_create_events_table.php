<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function ($table) {
            $table->increments('id');
            $table->date('begin_at');
            $table->integer('repeat_setting_id')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
	});
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('event');
    }
}
