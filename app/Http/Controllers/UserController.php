<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Listar usuarios';
    }

    public function show( int $id){
        return 'Mostrar usuario  '.$id;
    }

    public function create()
    {
         return 'Crear un usuario';

    }

    public function edit($id)
    {
        return 'Editar usuario';
    }
}
