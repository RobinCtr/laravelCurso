<?php

use App\Http\Controllers\CursoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


# Rutas basicas 
    # Atributo name sirve para darle un nombre a la ruta
    # Atributo where sirve para validar los parametros de la ruta
    # Atributo prefix sirve para agregar un prefijo a la ruta
    # Atributo redirect sirve para redireccionar una ruta a otra

Route::get('/', function () {
    return view('welcome', ['nombre' => 'Invitado']);
})->name('home');


Route::get('/suma', function () {
    $x = 10;
    $y = 20;
    $suma = $x + $y;
    return $suma;
})->name('suma');

Route::get('/suma/{x}/{y}', function ($x, $y) {
    $suma = $x + $y;
    return $suma;
})->where(['x' => '[0-9]+', 'y' => '[0-9]+'])->name('sumaParametros');


Route::get('/nombre/{nombre?}', function ($nombre = 'Invitado') {
    return 'Mi nombre es ' . $nombre;
})->where('nombre', '[A-Za-z]+')->name('nombre');
/* redirec a suma */
Route::redirect('/sumar', '/suma');

/* Verificar si unaa ruta existe */
Route::get('/verificar', function (Request $request) {
    if($request->route()->named('suma')){
        return 'Existe la ruta';
    }else{
        return 'No existe la ruta';
    }
})->name('verificar');

/* Rutas con prefijos */
Route::prefix('admin')->group(function () {
    Route::get('/primero', function () {
        return 'Primer ruta';
    })->name('admin.priemro');

    Route::get('/segundo', function () {
        return 'Segunda ruta';
    })->name('admin.segundo');

});


# Rutas con controladores
    # Ruta
    # Controlador
    # Metodo del controlador
    # Atributo name sirve para darle un nombre a la ruta
Route::get('/getName/{name?}', [CursoController::class, 'getName'])->name('getName');

