<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSertifikasiTentor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikasi_tentor', function(Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('id_tentor', 50);
            $table->string('jenis', 20);
            $table->text('photo');
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
        Schema::drop('sertifikasi_tentor');
    }
}
