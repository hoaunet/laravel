<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaunetcustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoaunetcustomers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_group_id');
            $table->integer('store_id');
            $table->integer('language_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('telephone');
            $table->string('fax');
            $table->string('password');
            $table->string('salt');
            $table->text('cart');
            $table->text('wishlist');
            $table->tinyInteger('newsletter');
            $table->integer('address_id');
            $table->text('custom_field');
            $table->string('ip');
            $table->tinyInteger('status');
            $table->tinyInteger('safe');
            $table->text('token');
            $table->string('code');
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
        Schema::dropIfExists('hoaunetcustomers');
    }
}
