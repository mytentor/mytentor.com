<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;

use Illuminate\Auth\Passwords\CanResetPassword;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Illuminate\Support\Facades\Auth;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract 
{
    use Authenticatable;
    use CanResetPassword;

    protected $table    = 'pengguna';

    public $primaryKey  = 'id';
    public $incrementing= false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nama', 'tipe', 'email', 'password', 
        'photo', 'latitude', 'longitude', 'nik', 'no_kk',
        'j_k', 'tanggal_lahir', 'tempat_lahir', 'agama',
        'alamat', 'provinsi', 'kabupaten', 'kecamatan',
        'kelurahan', 'dusun', 'kode_pos', 'no_hp', 'konfirmasi',
        'kode_konfirmasi'
    ];

    /*
        Kolom Database untuk keperluan Perulangan
    */
    public $column = [
        'nama' => ['text' => 'Nama', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'email' => ['text' => 'Email', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'latitude' => ['text' => 'Latitude', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'longitude' => ['text' => 'Longitude', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'nik' => ['text' => 'NIK', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'no_kk' => ['text' => 'No KK', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'j_k' => ['text' => 'Jenis Kelamin', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'tanggal_lahir' => ['text' => 'Tanggal Lahir', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'tempat_lahir' => ['text' => 'Tempat Lahir', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'agama' => ['text' => 'Agama', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'alamat' => ['text' => 'Alamat', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'provinsi' => ['text' => 'Provinsi', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'kabupaten' => ['text' => 'Kabupaten', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'kecamatan' => ['text' => 'Kecamatan', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'kelurahan' => ['text' => 'Kelurahan', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'dusun' => ['text' => 'Dusun', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'kode_pos' => ['text' => 'Kode Pos', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
        'no_hp' => ['text' => 'Nomor Handphone', 'type' => 'text', 'atribut_html' => ['required' => 'required']],
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function siswa() {
        return $this->hasOne('App\Siswa');
    }

    public function admin() {
        return $this->hasOne('App\Admin');
    }
 
    public function tentor() {
        return $this->hasOne('App\Tentor');
    }
 
    public function stucash() {
        return $this->hasOne('App\Stucash');
    }
}
