<?php

namespace SS\Http\Controllers;

use Illuminate\Http\Request;

use SS\Http\Requests;
use Session;
use Redirect;
use \SS\myModel\User as User;
use \SS\myModel\Career;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::All();
        return View('UserViews.usuarios', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrer = Career::lists('name', 'id');
        return View('UserViews.userAdd', compact('carrer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->id           = $request->id;
        $user->name         = $request->name;
        $user->e_mail       = $request->e_mail;
        $user->role         = $request->role;
        $user->career_id    = $request->carrer;
        $user->save();
        Session::flash('message','¡Usuario agregado correctamente!');
        return Redirect::to('user');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $carrer = Career::lists('name', 'id');
        return View('userViews.userEdit',['user'=>$user], compact('carrer'));
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
        $user = User::find($id);
        $user->id           = $request->id;
        $user->name         = $request->name;
        $user->e_mail       = $request->e_mail;
        $user->role         = $request->role;
        $user->career_id    = $request->carrer;
        $user->save();
        Session::flash('message','¡Usuario actualizado correctamente!');
        return Redirect::to('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message','¡Usuario eliminado correctamente!');
        return Redirect::to('user');
    }
}
