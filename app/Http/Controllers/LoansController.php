<?php

namespace SS\Http\Controllers;

use Illuminate\Http\Request;

use SS\Http\Requests;
use SS\myModel\Loans_head as Loans;
use SS\myModel\Articles_category as Categorys;

class LoansController extends Controller
{
    public function index(){
    	$loans = Loans::All();
    	return View('layouts.loans', compact('loans'));
    }
    public function delivery(){
    	return View('layouts.prestamo-entrega');
    }
    public function makeLoan(){
    	$categorys = Categorys::lists('name', 'id');
    	return View ('layouts.makePrestamo',compact('categorys'));
    }
}
