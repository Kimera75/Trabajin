<?php

namespace SS\Http\Controllers;

use Illuminate\Http\Request;

use SS\Http\Requests;

use PDF;

use SS\myModel\User;
use SS\myModel\Article;
use SS\myModel\Articles_category as Category;

class ReportsController extends Controller
{
    //

    public function invoice($report){
    	// $users = User::All();
    	// return View('reports.UserReporte', compact('users'));
    	if ($report == 'Users'){
    		$users = User::All()->sortBy("name");
			$pdf = PDF::loadView('reports.UserReporte', ['users' => $users]);
			return $pdf->stream('usuarios.pdf');
    	} else  if($report == 'Articles'){
    		$articles = Article::All()->sortBy("name");
    		$pdf = PDF::loadView('reports.ArticlesReport', ['articles' => $articles]);
    		return $pdf->stream('articulos.pdf');
    	} else if($report == 'Loans'){
    	    		
    	}
    }
}
