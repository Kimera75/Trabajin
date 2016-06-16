<?php

namespace SS\myModel;

use Illuminate\Database\Eloquent\Model;

class Articles_category extends Model
{
    //

	protected $fillable= ['id','name'];
    public $incrementing=false;

    public function articles(){
    	return $this->hasMany('SS\myModel\Article');
    }

    
}
