<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBuku extends Model
{
    protected $table = 'user_bukus';
    protected $guarded = [];

    public function buku(){
        return $this->belongsTo('App\Buku');
    }
}
