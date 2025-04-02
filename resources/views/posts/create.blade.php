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
        <form action="{{ route('posts.store')}}" method="POST" class="form-group">
            @csrf
            <input type="text" name="title" placeholder="Título" class="form-control mb-2" required>
            <textarea name="content" placeholder="Contenido" class="form-control mb-2" required></textarea>
            <input type="text" name="author" placeholder="Autor" class="form-control mb-2" required>
            <button type="submit" class="btn btn-primary">Agregar Publicación</button>
        </form>
    </div>
</div>  



@endsection