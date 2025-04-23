<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('user.index')->with('users', $users);
    }
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request){

        /* Mensajes personalisadfos */

        $messages = [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El email es requerido',
            'email.email' => 'El email no es valido',
            'email.unique' => 'El email ya existe',
        ];
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
        ], $messages);

        /* Generar contrasenia random */
        $password = Str::random(8);
        /* Guardar */
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($password),
        ]);
        if ($user) {
            return redirect()->route('users.index')->with('success', 'Usuario creado correctamente');
        } else {
            return redirect()->route('users.create')->with('error', 'Error al crear el usuario');
        }
    }
    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return view('user.show')->with('user', $user);
        } else {
            return redirect()->route('users.index')->with('error', 'Usuario no encontrado');
        }
    }

}
