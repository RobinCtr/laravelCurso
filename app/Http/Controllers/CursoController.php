<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function getName($name = 'Invitado'){
        return view('welcome', ['nombre' => $name]);
    }
}
