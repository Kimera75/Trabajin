<?php

namespace SS\myModel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Admin extends Model implements AuthenticatableContract
{
	use Authenticatable;

    protected $fillable = ['id','name','email','password'];
    
}
