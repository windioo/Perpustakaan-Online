<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
     protected $guarded = [];

     public function buku()
     {
         return $this->hasOne('App\Buku');
     }
}
