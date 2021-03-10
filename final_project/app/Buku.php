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
    protected $table = 'bukus';
    protected $fillable = ['judul', 'deskripsi', 'penulis', 'tahun', 'sampul', 'file', 'kategori_id','penerbit_id'];
}
