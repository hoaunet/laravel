<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaunetcouponhistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoaunetcouponhistories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('coupon_id');
            $table->integer('order_id');
            $table->integer('customer_id');
            $table->decimal('amount',15,4);
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
        Schema::dropIfExists('hoaunetcouponhistories');
    }
}
