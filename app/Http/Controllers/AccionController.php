<?php

namespace Minuta\Http\Controllers;

use Minuta\Models\Tema;
use Minuta\Models\Acciones;
use Illuminate\Http\Request;
use Minuta\Http\Requests\Action\CreateAction;

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

        return response()->json($acciones->toArray());
    }

    public function show()
    {
        $acciones = Acciones::join('acciontema', 'acciones.id', '=', 'acciontema.idAccion')
                    ->join('temas', 'temas.id', '=', 'acciontema.idTema')
                    ->select('acciones.elementos', 'acciones.responsable', 'acciones.plazo')
                    ->get();

        return response()->json($acciones->toArray());
    }

    public function store(CreateAction $request)
    {
        $request->save();
        return response()->json(['success'=>'La acción añadio correctamente.']);
    }
}
