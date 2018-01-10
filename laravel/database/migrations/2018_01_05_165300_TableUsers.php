<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('nama', 30);
            $table->set('tipe', array('siswa', 'tentor', 'admin'));
            $table->string('email', 70)->unique();
            $table->string('password', 200);

            $table->text('photo')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            
            $table->string('nik', 20)->nullable();
            $table->string('no_kk', 20)->nullable();
            $table->enum('j_k', array('l', 'p'));
            $table->string('tempat_lahir', 50)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama', 10)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('provinsi', 40)->nullable();
            $table->string('kabupaten', 40)->nullable();
            $table->string('kecamatan', 40)->nullable();
            $table->string('kelurahan', 40)->nullable();
            $table->string('dusun', 40)->nullable();
            $table->string('kode_pos', 7)->nullable();
            $table->string('no_hp', 14)->nullable();
            $table->boolean('konfirmasi');
            $table->string('kode_konfirmasi', 200);
            $table->rememberToken();
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
        Schema::drop('pengguna');
    }
}
