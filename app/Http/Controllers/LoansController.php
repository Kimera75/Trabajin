<?php

namespace SS\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use SS\Http\Requests;
use SS\myModel\Loans_head as Loans;
use SS\myModel\Article as Articles;
use SS\myModel\Articles_category as Categorys;
use SS\myModel\User as Users;
use SS\myModel\Loans_item as ArticleLoan;

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
        $users     = Users::lists('name', 'id');
    	return View ('layouts.makePrestamo',compact('categorys', 'users'));
    }
    public function getArticles(Request $request, $id){
        $categories = Categorys::find($id);
        $articulos = $categories->articles;
        return response()->json($articulos);
    }


    public function addLoan(Request $request){
        $User = Users::find($request->id_user);
        
        
        // Crear la tupla con la informacion del encabezado
        $newLoanHead = New Loans(['type_loan' => 'Interno', 'state' => 'EnCurso']);

        // Agregar el codigo de usuario al encabesado del prestamo y guardar el registro.
        $User->loans_head()->save($newLoanHead);

        //Obtener los articulos del 'select multiple' con el name 'articulo'
        $singleArticle = $request->articulo;

        foreach($singleArticle as $article){
            $newLoanHead->article_loans_head()->save(                
                new ArticleLoan(['article_id' => $article, 'quantity' => '1', 'state' => 'Faltante'])                        
            );
        };        
        
        return View('layouts.loans');               
    }
}
