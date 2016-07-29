<?php

namespace SS\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use SS\myModel\Articles_Category as Categorys;
use SS\myModel\Article as Articulo;
use SS\Http\Requests;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articulo::All()->sortBy("name");
        return View('layouts.articulos', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categorys::lists('name', 'id');
        return View('layouts.articleRegister', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arti = new Articulo;
        $arti->id                   = $request->id;
        $arti->name                 = $request->name;
        $arti->description          = $request->description;
        $arti->articles_category_id = $request->articles_category_id;
        $arti->quantity             = $request->quantity;
        $arti->save();
        Session::flash('message','¡Articulo agregado correctamente!');
        return Redirect::to('article');
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
        $arti = Articulo::find($id);
        $categorias = Categorys::lists('name', 'id');
        return View('layouts.articlesEdit',['arti' => $arti], compact('categorias'));

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
        $arti = Articulo::find($id);
        $arti->id                   = $request->id;
        $arti->name                 = $request->name;
        $arti->description          = $request->description;
        $arti->articles_category_id = $request->articles_category_id;
        $arti->quantity             = $request->quantity;
        $arti->save();
        Session::flash('message','¡Articulo actualizado correctamente!');
        return Redirect::to('article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Articulo::destroy($id);
        Session::flash('message','¡Articulo eliminado correctamente!');
        return Redirect::to('article');

    }
}
