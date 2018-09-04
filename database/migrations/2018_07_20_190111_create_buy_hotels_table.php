<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('book');
            $table->longText('rate');
            $table->longText('answer')->nullable();
            $table->longText('booking')->nullable();
            $table->unsignedInteger('purchase_id');
            $table->timestamps();
            $table->foreign('purchase_id')->references('id')->on('purchases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy_hotels');
    }
}
