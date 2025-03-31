@extends('layouts.app')

@section('title', 'Child Page')

@section('content')
<div class="row mt-4">
    <div class="col">
        <h1 class="text-center">Bienvenido a Mi Aplicación</h1>
        <p class="text-center">Hola su nombre es: {{ $name }} {{ $lastName }} y su edad es: {{ $age }} Anios</p>
    </div>
    <!-- Seleccionar un tipo de operacion -->
</div>

@component('components.alert', ['name' => 'Juan', 'lastName' => 'Pérez', 'age' => 30])8
@slot('title', 'Alerta de Prueba')
@slot('type', 'success')
<p>Mensaje</p>
@endcomponent

@endsection