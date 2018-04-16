<?php

namespace App\Http\Controllers;

use App\Models\Acciones;
use Illuminate\Http\Request;
use App\Models\Tema;

class AccionController extends Controller
{
     /**
     * Show the List of all Actions.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(Tema $tema)
    {
        $acciones = $tema->acciones;

        if(!$acciones){
            return response()->json([]);
        }

        return response()->json(
            $acciones->toArray()
        );
    }

    public function show()
    {
        $acciones = Acciones::join('acciontema', 'acciones.id', '=', 'acciontema.idAccion')
                    ->join('temas', 'temas.id', '=', 'acciontema.idTema')
                    ->select('acciones.elementos', 'acciones.responsable', 'acciones.plazo')
                    ->get();
        return response()->json(
        $acciones->toArray()
        );
    }

     public function store(Request $request)
    {
       if($request->ajax()){
            $data = request()->validate([
            'elementos'       => 'required',
            'responsable'     => 'required',
            'plazo'           => 'required',
        ],[
            'elementos.required'   => 'El Campo elementos es obligatorio',
            'responsable.required' => 'El Campo responsable es obligatorio',
            'plazo.required'       => 'El Campo plazo es obligatorio',
        ]);

        $acciones = new Acciones();
        $acciones->elementos         = $data['elementos'];
        $acciones->responsable       = $data['responsable'];
        $acciones->plazo             = $data['plazo'];
        $acciones->save();

        $tema = $request->only('tema');

        DB::table('acciontema')->insert([
            'idAccion'  => $acciones->id,
            'idTema'    => $tema['tema']
        ]);

        return response()->json(['success'=>'La acción añadio correctamente.']);
       }
    }
}
