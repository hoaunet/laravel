<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
			$table->string('uniq_id');
			$table->string('btprofile_id');
			$table->integer('usersubscription_id');
			$table->string('fullname');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
			$table->integer('istype');
			$table->string('photo');
			$table->string('isactive');
			$table->dateTime('dt_last_login');
			$table->dateTime('dt_last_logout');
			$table->string('ip');
			$table->integer('active_dashboard_tab');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
