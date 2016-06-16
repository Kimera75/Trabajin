<?php

namespace SS\myModel;

use Illuminate\Database\Eloquent\Model;

class Types_sanction extends Model
{
    //

	protected $fillable=['id','name','description','appliying_days','amount_payable'];

    //public $incrementing = false;

    /*Agregar sancion a un usuario*/
    public function users(){
    	return $this->belongsToMany('SS\myModel\User','users_loans_heads_types_sanctions')->withPivot('loans_head_id','release_date')->withTimestamps();
    }


    /*Agregar sancion al encabezado correspondiente*/
    public function loans_head(){
    	return $this->belongsToMany('SS\myModel\Loans_head','users_loans_heads_types_sanctions')->withPivot('user_id','release_date')->withTimestamps();
    }
}
