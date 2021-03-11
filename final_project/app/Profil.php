<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function komentar_buku(){
        return $this->hasMany('App\Komentar_buku');
    }
    protected $table = 'profils';
    protected $fillable = ['nama','nik','alamat','jenis_kelamin','telp','foto','is_active','user_id'];
}
