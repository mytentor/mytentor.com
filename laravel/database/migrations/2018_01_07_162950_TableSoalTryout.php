<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSoalTryout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_tryout', function(Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('id_tryout', 50);
            $table->string('soal', 255);
            $table->integer('no_urut', false, true);
            $table->integer('jawaban', false, true);
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
        Schema::drop('soal_tryout');
    }
}
