<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar_buku extends Model
{
    public function buku(){
        $this->belongsTo('App\Buku');
    }
    public function profil(){
        $this->belongsTo('App\Profil');
    }
    protected $table = 'komentar_bukus';
    protected $fillable = ['komentar','user_id','buku_id'];
}
