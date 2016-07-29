<?php

namespace SS\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Redirect;
use SS\Http\Requests;
use \SS\myModel\Career as Career;

class AppController extends Controller
{

	public function index(){
		$career   = Career::lists('name', 'id');
        $carreras = Career::All();
		return View('layouts.config', compact('career','carreras'));
	}
    public function addCareer(Request $request){
    	$carrera 	 	= new Career;    	
    	$carrera->name 	= $request->name;
    	$carrera->save();

    	Session::flash('career','¡Carrera agregada correctamente!');
        return Redirect::to('config/all');

    } 

    public function deleteCareer($id){
        $carrera = Career::find($id);
        $carrera->users()->delete();
        $carrera->delete();

        Session::flash('career','¡Carrera eliminada correctamente!');
        return Redirect::to('config/all');
    } 
}
