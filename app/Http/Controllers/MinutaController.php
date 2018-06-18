<?php

namespace Minuta\Http\Controllers;

use Minuta\Models\Tema;

use Minuta\Models\Reunion;
use Illuminate\Http\Request;
use Minuta\Http\Requests\Minuta\{CreateMinuta,UpdateMinuta};


class MinutaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the List of all mettings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Reunion::all();
        return view('reuniones/index',compact('lista'));
    }
     /**
     * Show Form edit to Reuniones
     *
     * @param Reunion $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Reunion $reunion)
    {
        return view('reuniones/update',['reunion'=>$reunion]);
    }
    /**
     * update
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMinuta $request ,Reunion $reunion)
    {
        $request->update($reunion);
        return redirect()->route('reuniones.index',$reunion);
    }
    /**
     * Create new Form to create a new mettiong
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        return view('reuniones/create');
    }
    /**
     * Create user in database
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMinuta $request)
    {
        $request->save();
        return redirect()->route('reuniones.index');
    }
    /**
     * delete item Reunion
     *
     * @param Reunion $reunion
     * @return \Illuminate\Http\Response
     */
    public function delete(Reunion $reunion) {
        // check Validation
        // delete items temaReunion
        $reunion->delete();
        return redirect()->route('reuniones.index');
    }
}
