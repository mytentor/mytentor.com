<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tentor extends Model
{
    protected $table 	= "tentor";

    public $primaryKey 	= 'id';
    public $incrementing= false;

	public $fillable 	= ['id', 'id_pengguna'];
	public $column		= ['id', 'id_pengguna'];
    protected $guarded 	= [];

    public function pengguna() {
    	return $this->belogsTo('App\User', 'id_pengguna');
    }

    // Relasi Materi Tentor
    public function materi_tentor() {
    	return $this->hasMany('App\MateriTentor');
    }

    // Relasi Sertifikasi Tentor
    public function sertifikasi_tentor() {
    	return $this->hasMany('App\SertifikasiTentor');
    }
}
