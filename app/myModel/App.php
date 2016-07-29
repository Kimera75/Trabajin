<?php

namespace SS\myModel;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    //
    protected $fillable = ['id','title','name_lab','dep','coord','contac'];

    
 	public $incrementing=false;
}
