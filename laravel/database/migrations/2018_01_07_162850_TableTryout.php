<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTryout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tryout', function(Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('nama', 50);
            $table->enum('jenis', array('pribadi', 'publik'));
            $table->double('biaya');
            $table->integer('kuota');
            $table->timestamp('tanggal');
            $table->integer('lama');
            $table->boolean('realtime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tryout');
    }
}
