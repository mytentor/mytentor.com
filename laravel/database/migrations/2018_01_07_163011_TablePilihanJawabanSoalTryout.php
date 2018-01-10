<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePilihanJawabanSoalTryout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilihan_jawaban_soal_tryout', function(Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('id_soal_tryout', 50);
            $table->string('option', 100);
            $table->integer('no_urut', false, true);
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
        Schema::drop('pilihan_jawaban_soal_tryout');
    }
}
