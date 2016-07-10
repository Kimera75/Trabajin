<?php

namespace SS\myModel;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['id','articles_category_id','name','description','quantity'];

    
 	public $incrementing=false;

    public function category(){
    	return $this->belongsTo(Articles_category::class, 'articles_category_id', 'id');
    }

   
   public function loans_heads(){
   		return $this->belongsToMany('SS\myModel\Loans_head','article_loans_heads')->withPivot('state','quantity')->withTimestamps();
   }
   
}
