<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaunetcartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoaunetcarts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('api_id');
            $table->integer('customer_id');
            $table->integer('session_id');
            $table->integer('product_id');
            $table->integer('recurring_id');
            $table->text('option');
            $table->integer('quantity');
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
        Schema::dropIfExists('hoaunetcarts');
    }
}
