<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableBankSoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_soal', function(Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->enum('jenis_soal', array('video', 'text'));
            $table->string('judul', '20');
            $table->text('deskripsi');
            $table->string('tingkat', '2');
            $table->enum('level', array('mudah', 'sedang', 'susah'));
            $table->integer('point');
            $table->double('harga');
            $table->text('url');
            $table->string('dibuat_oleh');
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
        Schema::drop('bank_soal');
    }
}
