<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaunetaddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoaunetaddresses', function (Blueprint $table) {
            $table->increments('id');           
            $table->integer('customer_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('company_id');
            $table->string('address1');
            $table->string('address1');
            $table->string('city');
            $table->string('postcode');
            $table->integer('country_id');
            $table->integer('zone_id');
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
        Schema::dropIfExists('hoaunetaddresses');
    }
}
