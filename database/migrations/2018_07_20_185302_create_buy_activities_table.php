<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->date('checkin')->nullable();
            $table->integer('adult');
            $table->integer('child');
            $table->float('total');
            $table->timestamps();

            $table->integer('tickets_id')->unsigned();
            $table->integer('purchases_id')->unsigned();

            $table->foreign('tickets_id')->references('id')->on('tickets');
            $table->foreign('purchases_id')->references('id')->on('purchases');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy_activities');
    }
}
