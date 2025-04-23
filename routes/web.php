<?php

use App\Http\Controllers\ActividadUno;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Suscribed;


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

/* Actividad 1 */
Route::prefix('actividadUno')->group(function () {
    Route::name('actividadUno.')->group(function () {
        Route::get('/', [ActividadUno::class, 'index'])->name('index');
        Route::get('/sumar/{x}/{y}', [ActividadUno::class, 'sumar'])->where(['x' => '[0-9]+', 'y' => '[0-9]+'])->name('sumar');
        Route::get('/restar/{x}/{y}', [ActividadUno::class, 'restar'])->where(['x' => '[0-9]+', 'y' => '[0-9]+'])->name('restar');
        Route::get('/multiplicar/{x}/{y}', [ActividadUno::class, 'multiplicar'])->where(['x' => '[0-9]+', 'y' => '[0-9]+'])->name('multiplicar');
        Route::get('/dividir/{x}/{y}', [ActividadUno::class, 'dividir'])->where(['x' => '[0-9]+', 'y' => '[0-9]+'])->name('dividir');   
    });

});


/* Rutas resource */
Route::resource('user', AdminUserController::class)->parameters([
    'users' => 'admin_user'
])->names([
    'index' => 'admin_user.index',
    'create' => 'admin_user.create',
    'store' => 'admin_user.store',
    'show' => 'admin_user.show',
    'edit' => 'admin_user.edit',
    'update' => 'admin_user.update',
    'destroy' => 'admin_user.destroy'
]);


/* Rutas con middleware */
Route::get('/suscribed', function () {
    return 'Bienvenido suscrito';
})->middleware('suscribed')->name('suscribed');

Route::get('/layout', [CursoController::class, 'index'])->name('layout');


/* Funciones de post */
Route::prefix('posts')->group(function () {
    Route::name('posts.')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('/', [PostController::class, 'store'])->name('store');
        Route::get('/{id}', [PostController::class, 'show'])->name('show');
    });

});


/* Funciones de post */
Route::prefix('products')->group(function () {
    Route::name('products.')->group(function () {
        Route::get('/', [ProductsController::class, 'index'])->name('index');
        Route::get('/create', [ProductsController::class, 'create'])->name('create');
        Route::post('/', [ProductsController::class, 'store'])->name('store');
        Route::get('/{id}', [ProductsController::class, 'show'])->name('show');
    });

});


Route::prefix('users')->group(function () {
    Route::name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('/{id}', [UserController::class, 'show'])->name('show');
    });

});

