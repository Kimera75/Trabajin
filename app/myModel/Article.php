<?php

namespace App\myModel;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['id','articles_category_id','name','description','quantity'];

    
 	public $incrementing=false;

    public function category(){
    	return $this->belongsTo('App\myModel\Articles_category');
    }

   
   public function loans_heads(){
   		return $this->belongsToMany('App\myModel\Loans_head','article_loans_heads')->withPivot('state','quantity')->withTimestamps();



   }
   
}
