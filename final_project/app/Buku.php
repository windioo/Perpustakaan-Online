<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public function kategori(){
        return $this->belongsTo('App\Kategori');
    }
    public function penerbit(){
        return $this->belongsTo('App\Penerbit');
    }
    public function user(){
        return $this->belongsToMany('App\User');
    }
    public function komentar_buku(){
        return $this->hasMany('App\Komentar_buku');
    }
    protected $table = 'bukus';
    protected $guarded = [];
}
