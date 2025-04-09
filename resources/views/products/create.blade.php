@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<div class="row mt-4">
    <div class="col">
    <h2>Agregar Nueva Publicación</h2>
    </div>
</div>
<!-- Formulario nuevo post -->

<div class="row mt-4 mb-4">
    <div class="col text-center">
        <form action="{{ route('products.store')}}" method="POST" class="form-group">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del Producto</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <!-- descripcion -->
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>
            <!-- precio -->
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" name="price" id="price" class="form-control"  required>
            </div>
            
            <button type="submit" class="btn btn-primary">Agregar producto</button>
        </form>
    </div>
</div>  



@endsection