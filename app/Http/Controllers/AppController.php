<?php

namespace SS\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Redirect;
use SS\Http\Requests;
use \SS\myModel\Career as Career;
use \SS\myModel\App as Application;


class AppController extends Controller
{
    public function inicio(){
        $app = Application::find(0);
        return view('index', ['app' => $app]);
    }   

	public function config(){
		$career   = Career::lists('name', 'id');
        $carreras = Career::All();
        $app      = Application::find(0);
		return View('layouts.config',['app'=>$app], compact('career','carreras'));
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
    public function updateApp(Request $request, $id){
        $app = Application::find($id);
        if ($app){
            $app->title     = $request->title;
            $app->name_lab  = $request->name_lab;
            $app->dep       = $request->dep;
            $app->coord     = $request->coord;
            $app->contac    = $request->contac;
            $app->save();
            Session::flash('application','¡Datos actualizados correctamente!');
            return Redirect::to('config/all');            
        } else{
            $app = new Application;
            $app->title     = $request->title;
            $app->name_lab  = $request->name_lab;
            $app->dep       = $request->dep;
            $app->coord     = $request->coord;
            $app->contac    = $request->contac;
            $app->save();
            Session::flash('application','¡Datos agregados correctamente!');
            return Redirect::to('config/all'); 
        }
        
    } 
}
