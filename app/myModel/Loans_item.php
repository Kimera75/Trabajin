<?php

namespace SS\myModel;

use Illuminate\Database\Eloquent\Model;

class Loans_item extends Model
{
    protected $fillable = ['article_id','state','quantity'];

    public function loan_head(){
    	return $this->belongsTo('SS\myModel\Loans_head');
    }



    public function article(){
    	return $this->belongsTo('SS\myModel\Article');
    }
}
