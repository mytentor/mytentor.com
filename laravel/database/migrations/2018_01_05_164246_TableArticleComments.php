<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableArticleComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_comments', function(Blueprint $table){
            $table->increments('id');
            $table->string('id_post', 45);
            $table->string('user_name', 35);
            $table->string('email', 30)->nullable();
            $table->text('content');
            $table->boolean('accepted')->default(0);
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
        Schema::drop('article_comments');
    }
}
