<?php

namespace Minuta\Http\Controllers;

use Minuta\Models\Tema;
use Minuta\Models\Reunion;
use Illuminate\Http\Request;

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
     * @return void
     */
    public function edit(Reunion $reunion)
    {
        return view('reuniones/update',['reunion'=>$reunion]);
    }
    /**
     * update
     *
     * @param User $user
     * @return void
     */
    public function update(Reunion $reunion)
    {
         $data = request()->validate([
            'fecha'     => 'required',
            'lugar'     => 'required',
            'convocado' =>'required',
            'tipoReunion'=>'required',
            'organizador'=>'required',
            'asistentes' =>'required',
            'status' =>'',
        ]);
        $reunion->update($data);
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
     * @return void
     */
    public function store()
    {
        $data = request()->validate([
            'fecha'     => 'required',
            'hora'      => 'required',
            'lugar'     => 'required',
            'convocado' =>'required',
            'tipoReunion'=>'required',
            'organizador'=>'required',
            'asistentes' =>'required',
        ]);

         Reunion::create([
            'convocado' => $data['convocado'],
            'tipoReunion' => $data['tipoReunion'],
            'fecha' => $data['fecha'],
            'hora' =>  new \DateTime($data['hora']),
            'lugar' => $data['lugar'],
            'organizador' => $data['organizador'],
            'asistentes' => $data['asistentes'],
            'status' => true,
        ]);
        return redirect()->route('reuniones.index');
    }
    /**
     * delete item Reunion
     *
     * @param Reunion $reunion
     * @return void
     */
    public function delete(Reunion $reunion) {
        // check Validation
        // delete items temaReunion
        $reunion->delete();
        return redirect()->route('reuniones.index');
    }
}
