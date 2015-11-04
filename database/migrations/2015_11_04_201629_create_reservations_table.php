<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
	Schema::create('reservations', function ($table) {
             $table->increments('id');
             $table->string('name');
             $table->string('email');
	$table->string('identity_code');
	$table->string('department');
	$table->string('phone');
	$table->integer('event_id');
	$table->string('cancel_code');
	$table->timestamp('cancel_at')->nullable();;
	$table->timestamp('checked_in_at')->nullable();
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
        //
    }
}
