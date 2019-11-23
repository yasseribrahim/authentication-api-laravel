<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id', TRUE);
            $table->bigInteger("order_id")->unsigned();
            $table->bigInteger("item_id")->unsigned();
            $table->float("price");
            $table->float("price_sale");
            $table->timestamps();
        });
        Schema::table('order_details', function($table) {
            $table->foreign('order_id')->references('id')->on("orders")->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('item_id')->references('id')->on("items")->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
