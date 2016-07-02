<?php

namespace SS\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use SS\Http\Requests;
use \SS\myModel\Articles_category as Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = \SS\myModel\Articles_category::All();
        return View('layouts.categorias', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('layouts.categoriasAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat        = new Category;
        $cat->id    = $request->id;
        $cat->name  = $request->name;
        $cat->save();
        Session::flash('message','Categoria agregada correctamente!');
        return Redirect::to('\category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = \SS\myModel\Articles_category::find($id);
        return View('layouts.categoriasEdit', ['cat'=>$cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat = \SS\myModel\Articles_category::find($id);
        $cat->id    = $request->id;
        $cat->name  = $request->name;
        $cat->save();
        Session::flash('message','Categoria actualizada correctamente!');
        return Redirect::to('\category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
