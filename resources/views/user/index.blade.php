@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')

<div class="row mt-4">
    <div class="col">
        <h2>Lista de Usuarios</h2>
    </div>
</div>
<!-- Alerte de creacion -->
@if (session('success'))
<x-alert type="success" :message="session('success')" />
@endif




<!-- Boton para agregar nuevo post -->
<div class="row mt-4 mb-4">
    <div class="col text-center">
        <a href="{{ route('users.create') }}" class="btn btn-primary">Agregar un nuevo usuario</a>
    </div>
</div>
<!-- Tabla de useros -->
<div class="row">
    <div class="col">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre </th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <!-- Icono para ver detalles -->
                    <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-info"><i class="fas fa-eye"></i>VER</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>



@endsection