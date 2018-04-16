<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use App\Models\Reunion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemaController extends Controller
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
     * Display a list of the themes
     *
     * @return JsonResoonse
     */
    public function all(Reunion $reunion) {

        $temas = $reunion->temas()->get();

         if(!$temas){
            return response()->json([]);
        }

        return response()->json(
            $temas->toArray()
        );
    }

    public function store(Request $request)
    {
       if($request->ajax()){
            $data = request()->validate([
            'tema'       => 'required',
            'tiempo'     => 'required',
            'debate'     => 'required',
            'conclusion' => 'required'
        ],[
            'tema.required'         => 'El Campo Tema es obligatorio',
            'tiempo.required'       => 'El Campo tiempo es obligatorio',
            'debate.required'       => 'El Campo debate es obligatorio',
            'conclusion.required'   => 'El campo conclusion es obligatorio'
        ]);

        $tema = new Tema();
        $tema->tema         = $data['tema'];
        $tema->tiempo       = $data['tiempo'];
        $tema->debate       = $data['debate'];
        $tema->conclusion   = $data['conclusion'];
        $tema->save();

        $reunion = $request->only('reunion');
        $id_reunion = $reunion['reunion'];

        $tema->reuniones()->attach($id_reunion);

        return response()->json(['success'=>'El tema se añadio correctamente.']);
       }
    }

    public function update(User $user)
    {
      return 'update';
    }

    public function delete(User $user)
    {
       return 'delete';
    }
}
