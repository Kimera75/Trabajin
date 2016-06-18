<?php

namespace SS\Http\Controllers;

use Illuminate\Http\Request;

use SS\Http\Requests;

class SanctionsController extends Controller
{
    public function index(){
    	return View('layouts.sanciones');
    }
}
