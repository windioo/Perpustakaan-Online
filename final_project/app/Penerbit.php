<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $table = "penerbits";
    protected $guarded = [];
    public function buku()
     {
         return $this->hasOne('App\Buku');
     }
}
