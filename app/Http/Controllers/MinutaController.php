<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use App\Models\Reunion;
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
            'fecha' => 'required',
            'hora' => 'required',
            'lugar' => 'required',
            'tipoReunion'=>"required"
        ]);

         Reunion::create([
            'convocado' => '',
            'tipoReunion' => $data['tipoReunion'],
            'fecha' => $data['fecha'],
            'hora' =>  new \DateTime($data['hora']),
            'lugar' => $data['lugar'],
            'organizador' => '',
            'asistentes' => '',
            'status' => true,
        ]);
        return redirect()->route('reuniones.index');
    }
}
