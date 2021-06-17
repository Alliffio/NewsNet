<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Posting;

class Komentar extends Model
{
    public function posting(){
        return $this->belongsTo('App\Posting');
    }

    public function komentar(){
        return $this->hasMany('App\Komentar');
    }
}
