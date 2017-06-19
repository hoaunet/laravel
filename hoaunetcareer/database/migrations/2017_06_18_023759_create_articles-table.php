<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
			$table->string('short_url');
            $table->string('short_desc');
			$table->string('articles_image');
			$table->text('body');
			$table->integer('category_id')->references('id')->on('categories');
			$table->integer('user_id')->references('id')->on('users');
			$table->integer('isactive');
			$table->integer('ishot');
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
        Schema::dropIfExists('articles');
    }
}
