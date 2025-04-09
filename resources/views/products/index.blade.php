@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<div class="row mt-4">
    <div class="col">
        <h1 class="text-center">Bienvenido a Mi Blog</h1>
        <p class="text-center">Aquí encontrarás una lista de publicaciones.</p>
    </div>
</div>
<!-- Alerte de creacion -->
@if (session('success'))
<x-alert type="success" :message="session('success')" />
@endif




<!-- Boton para agregar nuevo post -->
<div class="row mt-4 mb-4">
    <div class="col text-center">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Agregar un nuevo Producto</a>
    </div>
</div>
<!-- Tabla de productos -->
<div class="row">
    <div class="col">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre </th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>$ {{$product->price}}</td>
                    <!-- Icono para ver detalles -->
                    <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-info"><i class="fas fa-eye"></i>VER</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>



@endsection