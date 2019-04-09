<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('code')->unique();
            $table->String('subject');
            $table->longText('body');
            //$table->bigInteger('category_id')->unsigned();
            //$table->foreign('category_id')->references('id')->on('categories');
            $table->String('status');
            $table->String('priority');
            $table->String('source');
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
        Schema::dropIfExists('tickets');
    }
}
