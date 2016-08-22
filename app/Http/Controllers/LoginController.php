<?php

namespace SS\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Hash;
use Illuminate\Http\Request;
use SS\myModel\Admin as Admins;

use SS\Http\Requests;

class LoginController extends Controller
{
    public function index(){
    	return View('login');
    }
    public function login(Request $request){ 

    	if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
    		return Redirect::to('/index');
    	}
    	Session::flash('error', 'Datos Incorrectos Intentalo de nuevo!');
    	return Redirect::to('/');
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');

    }
    public function newProfile(){
        return View('layouts.newProfile');
    }

    public function create(Request $request){    	
    	$admin = new Admins;
        $admin->name = $request->name;
    	$admin->email = $request->email;
    	$admin->password = Hash::make($request->password);
    	$admin->save();

        Session::flash('message', 'Usuario Creado correctamente');
    	return Redirect::to('/');
    }
}
