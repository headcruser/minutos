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

    /**
     * store
     * Almacena una accion en la base de datos
     *
     * @param CreateAction $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAction $request)
    {
        $request->save();
        return response()->json(['success'=>'La acción añadio correctamente.']);
    }
}
