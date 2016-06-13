<?php

namespace App\myModel;

use Illuminate\Database\Eloquent\Model;

class Articles_category extends Model
{
    //

	protected $fillable= ['id','name'];
    public $incrementing=false;

    public function articles(){
    	return $this->hasMany('App\myModel\Article');
    }

    
}
