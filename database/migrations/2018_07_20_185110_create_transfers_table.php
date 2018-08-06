<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->float('van');
            $table->float('escalade');
            $table->float('suburban');
            $table->float('sprinter');
            $table->timestamps();
            $table->integer('cities_id')->unsigned();
            $table->foreign('cities_id')->references('id')->on('cities');
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
        Schema::dropIfExists('transfers');
    }
}
