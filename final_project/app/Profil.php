<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $table = 'profils';
    protected $fillable = ['nama','nik','alamat','jenis_kelamin','telp','foto','is_active','user_id'];
}
