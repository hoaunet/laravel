<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaunetcouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoaunetcoupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->string('type');
            $table->decimal('discount',15,4);
            $table->tinyInteger('logged');
            $table->tinyInteger('shipping');
            $table->decimal('total',15,4);
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->integer('uses_total');
            $table->string('uses_customer');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('hoaunetcoupons');
    }
}
