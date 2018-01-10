<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableRiwayatPengisianStucash extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pengisian_stucash', function(Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('id_stucash', 50);
            $table->double('total');
            $table->timestamp('waktu_pengisian');
            $table->boolean('konfirmasi');
            $table->text('bukti_pembayaran');
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
        Schema::drop('riwayat_pengisian_stucash');
    }
}
