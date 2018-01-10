<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('thumbnail', 200);
            $table->string('title', 50);
            $table->text('content');
            $table->string('category', 50);
            $table->text('tags')->nullable();
            $table->text('viewers')->nullable();
            $table->text('likes')->nullable();
            $table->string('created_by', 45);
            $table->boolean('confirm')->default(0);
            // Memperbolehkan Komentar Pada posting ini tanpa persetujuan
            $table->boolean('allow_comment')->default(0);
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
        Schema::drop('articles');
    }
}
