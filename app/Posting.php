<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posting extends Model
{
    use SoftDeletes;

    protected $fillable = ['judul','category_id','isi','image','slug','user_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tags');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    // public function komentar(){
    //     return $this->hasMany('App\Komentar');
    // }
}
