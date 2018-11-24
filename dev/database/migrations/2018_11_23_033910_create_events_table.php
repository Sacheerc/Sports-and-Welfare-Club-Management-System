<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('events', function (Blueprint $table) {
            $table->increments('eventId')->unique();
            $table->string('eventName');
            $table->string('creator');
            $table->date('eventDate')->nullable();
            $table->string('venue');
            $table->time('startTime');
            $table->time('endTime');
            $table->string('details')->nullable();
            $table->integer('totalExpenses')->nullable();
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
        Schema::dropIfExists('events');
    }
}
