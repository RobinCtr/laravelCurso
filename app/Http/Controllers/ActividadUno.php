<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActividadUno extends Controller
{
    //
    public function index(){
        return view('actividaduno.index');
    }

    /* operaciones */
    public function sumar($x, $y){
        $suma = $x + $y;
        return 'La suma de ' . $x . ' + ' . $y . ' es: ' . $suma;
    }

    public function restar($x, $y){
        $resta = $x - $y;
        return 'La resta de ' . $x . ' - ' . $y . ' es: ' . $resta;
    }

    public function multiplicar($x, $y){
        $multiplicacion = $x * $y;
        return 'La multiplicacion de ' . $x . ' * ' . $y . ' es: ' . $multiplicacion;
    }

    public function dividir($x, $y){
        $division = $x / $y;
        return 'La division de ' . $x . ' / ' . $y . ' es: ' . $division;
    }

}
