<?php

namespace App\myModel;

use Illuminate\Database\Eloquent\Model;

class Types_sanction extends Model
{
    //

	protected $fillable=['id','name','description','amount_payable'];

    //public $incrementing = false;
}
