<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("comment", function(Blueprint $table) {
        		$table->increments("id");
        		$table->unsignedInteger("commentEmojiId");
        		$table->string("commentContent");
        		$table->foreign("commentEmojiId")->references("id")->on("emoji");
		  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("comment");
    }
}
