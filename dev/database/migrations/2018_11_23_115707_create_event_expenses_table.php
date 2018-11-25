<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_expenses', function (Blueprint $table) {
            $table->increments('eventId');
            $table->string('expenseDetail');
            $table->string('totalExpenses');
            $table->string('date');
            $table->string('note');
            $table->string('user');
            $table->string('endTime');
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
        Schema::dropIfExists('event_expenses');
    }
}
