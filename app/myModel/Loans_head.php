<?php


namespace App\myModel;
use Illuminate\Database\Eloquent\Model;

class Loans_head extends Model
{
    //

    protected $fillable=['start_date_loan','end_date_loan','type_loan','state'];

    

    public function user(){
    	return $this->belongsTo('App\myModel\User');
    }

    
   public function articles(){
   		return $this->belongsToMany('App\myModel\Article','article_loans_heads')->withPivot('state','quantity')->withTimestamps();


   }

    


}
