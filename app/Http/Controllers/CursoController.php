<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function getName($name = 'Invitado'){
        return view('welcome', ['nombre' => $name]);
    }

    public function index(){
        $name = 'Invitado';
        $lastName = 'Ultimo';
        $age = 20;
        return view('layouts.child')->with(([
            'name' => $name, 'lastName' => $lastName, 'age' => $age
        ]));
    }
}
