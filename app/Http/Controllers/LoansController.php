<?php

namespace SS\Http\Controllers;

use Illuminate\Http\Request;

use SS\Http\Requests;
use SS\myModel\Articles_category as Categorys;

class LoansController extends Controller
{
    public function index(){
    	$categorys = Categorys::lists('name', 'id');
    	return View ('layouts.makePrestamo',compact('categorys'));
    }

    public function delivery(){
    	return View('layouts.prestamo-entrega');
    }
}
