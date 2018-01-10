<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table 	= "siswa";

    public $primaryKey 	= 'id';
    public $incrementing= false;

	public $fillable 	= ['id', 'id_pengguna', 'kelas', 'point'];
	public $column		= ['id', 'id_pengguna', 'kelas', 'point'];
    protected $guarded 	= [];

    public function pengguna() {
    	return $this->belogsTo('App\User', 'id_pengguna');
    }

    // Relasi Materi Siswa
    public function materi_siswa() {
    	return $this->hasMany('App\MateriSiswa');
    }

    // Relasi Siswa jika menjadi Peserta Tryout 
    public function tryout() {
    	return $this->hasMany('App\Tryout');
    }
}