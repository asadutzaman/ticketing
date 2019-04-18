<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketleadsTable extends Migration
{
    /**
     * Run the migrations.
     *  void
     * @return void
     */
    public function up()
    {
        Schema::create('ticketleads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('lead');
            $table->String('leadtype');
            $table->bigInteger('ticket_id')->unsigned();
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->bigInteger('createdbyuser_id')->unsigned();
            $table->foreign('createdbyuser_id')->references('id')->on('users');
            $table->bigInteger('updatedbyuser_id')->unsigned();
            $table->foreign('updatedbyuser_id')->references('id')->on('users');
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
        Schema::dropIfExists('ticketleads');
    }
}
