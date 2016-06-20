<?php

namespace SS\myModel;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
    protected $fillable = ['id','name'];

    public $incrementing=false;

    public function users(){
    	return $this->hasMany(User::class);
    }

}
