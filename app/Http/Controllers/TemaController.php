<?php

namespace Minuta\Http\Controllers;

use Minuta\Models\Tema;
use Minuta\Models\Reunion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Minuta\Http\Requests\Tema\CreateTheme;

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
     * @return JsonResponse
     */
    public function all(Reunion $reunion) {

        $temas = $reunion->temas()->get();

         if(!$temas){
            return response()->json([]);
        }

        return response()->json($temas->toArray());
    }

    public function store(CreateTheme $request)
    {
        $request->save();
        return response()->json(['success'=>'El tema se añadio correctamente.']);
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
