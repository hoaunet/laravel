<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaunetcustomeraffiliatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoaunetcustomeraffiliates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('website');
            $table->string('tracking');
            $table->decimal('commission',4,2);
            $table->string('tax');
            $table->string('payment');
            $table->string('cheque');
            $table->string('paypal');
            $table->string('bank_name');
            $table->string('bank_branch_number');
            $table->string('bank_swift_code');
            $table->string('bank_account_name');
            $table->string('bank_account_number');
            $table->text('custom_field');
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
        Schema::dropIfExists('hoaunetcustomeraffiliates');
    }
}
