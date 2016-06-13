<?php

namespace App\myModel;

use Illuminate\Database\Eloquent\Model;

class Loans_item extends Model
{
    //

    protected $fillable= ['article_id','quantity','state'];
 	

    public $incrementing=false;

    public function loan_head(){
    	return $this->belongsTo('App\myModel\Loans_head');
    }

  

    public function articles(){
    	return $this->belongsToMany('App\myModel\Article');
    }
}
