<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_id');
            $table->string('ship_name');
            $table->string('ship_phone');
            $table->string('ship_email');
            $table->string('ship_zip');
            $table->string('ship_address');
            $table->string('ship_city');
            $table->string('ship_building')->nullable();
            $table->string('ship_name2')->nullable();
            $table->string('ship_phone2')->nullable();
            $table->string('ship_zip2')->nullable();
            $table->string('ship_address2')->nullable();
            $table->string('ship_city2')->nullable();
            $table->string('ship_building2')->nullable();
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
        Schema::dropIfExists('shipping');
    }
}
