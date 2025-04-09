@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="row mt-4">
    <div class="col">
        <h2>Detalles de la Publicación</h2>
    </div>
</div>
<!-- Detalles del post -->
<div class="row mt-4 mb-4">
    <div class="col text-center">
        <h3>Nombre del Producto: {{ $product->name }}</h3>
        <p><strong>Descripción:</strong> {{ $product->description }}</p>
        <p><strong>Precio:</strong> {{ $product->price }}</p>
        <!-- Boton para editar post -->
        <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
    </div>
</div>

@endsection
