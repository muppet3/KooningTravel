<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('airline',45);
            $table->string('flight',45);
            $table->string('type',20);
            $table->string('transport',20);
            $table->string('hotel',100);
            $table->integer('services')->unsigned();
            $table->timestamp('check_in')->nullable();
            $table->timestamp('check_out')->nullable();
            $table->timestamps();
            $table->integer('transfers_id')->unsigned();
            $table->integer('purchase_id')->unsigned();

            $table->foreign('transfers_id')->references('id')->on('transfers');
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
        Schema::dropIfExists('buy_transfers');
    }
}
