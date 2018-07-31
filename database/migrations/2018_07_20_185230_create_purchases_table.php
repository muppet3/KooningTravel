<?php
use App\Models\Purchase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('name',70);
            $table->string('surnames',100);
            $table->string('email',100);
            $table->string('country',100)->nullable();
            $table->string('state',100)->nullable();
            $table->string('phone');
            $table->longText('request')->nullable();
            $table->string('status')->default(Purchase::COTIZADO);
            $table->string('numbercard')->default('XXXX');
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
        Schema::dropIfExists('purchases');
    }
}

