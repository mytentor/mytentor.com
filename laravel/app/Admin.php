<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table 	= "admin";

    public $primaryKey 	= 'id';
    public $incrementing= false;

	public $fillable 	= ['id', 'id_pengguna'];
	public $column		= ['id', 'id_pengguna'];
    protected $guarded 	= [];


    public function pengguna() {
    	return $this->belogsTo('App\User', 'id_pengguna');
    }

}
