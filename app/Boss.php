<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    //
    protected $table = 'boss';
    /*public function index()
    {
        return view('home')->withBoss(\App\Boss::all());
    }*/
    public function hasManyComments(){
        return $this->hasMany('App\Comment', 'article_id', 'id');
    }
}
