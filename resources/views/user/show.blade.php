@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
<div class="row mt-4">
    <div class="col">
        <h2>Detalles del Usuario</h2>
    </div>
</div>
<!-- Detalles -->
<div class="row mt-4 mb-4">
    <div class="col text-center">
        <h3>Nombre: {{ $user->name }}</h3>
        <h3>Email: {{ $user->email }}</h3>
    </div>
</div>
<!-- Boton para regresar a la lista de usuarios -->
<div class="row mt-4 mb-4">
    <div class="col text-center">
        <a href="{{ route('users.index') }}" class="btn btn-primary">Regresar a la lista de usuarios</a>
    </div>
</div>
@endsection
