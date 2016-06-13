<?php

namespace App\myModel;

use Illuminate\Database\Eloquent\Model;

class Sanction extends Model
{
    //

	protected $fillable=['actual_delivery_date'];

    //public $incrementing=false;

    public function user(){
    	return $this->belongsTo('User');
    }
}
