<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function __invoke() {
        $lista = ['Daniel', 'Fernada', 'Karla'];

         return view('users/userView',[
            'lista' => $lista
        ]);
    }
}
