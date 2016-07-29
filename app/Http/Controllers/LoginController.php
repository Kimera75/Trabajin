<?php

namespace SS\Http\Controllers;

use Illuminate\Http\Request;

use SS\Http\Requests;

class LoginController extends Controller
{
    public function login(){
    	return View('login');
    }
}
