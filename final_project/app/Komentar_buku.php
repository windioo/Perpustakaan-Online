<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar_buku extends Model
{
    public function buku(){
        return $this->belongsTo('App\Buku');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $table = 'komentar_bukus';
    protected $fillable = ['komentar','user_id','buku_id'];

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->diffForHumans();
    }

}

