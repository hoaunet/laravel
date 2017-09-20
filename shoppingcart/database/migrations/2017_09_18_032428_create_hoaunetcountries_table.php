<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaunetcountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoaunetcountries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('iso_code_2');
            $table->string('iso_code_3');
            $table->text('address_format');
            $table->tinyInteger('postcode_required');
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
        Schema::dropIfExists('hoaunetcountries');
    }
}
