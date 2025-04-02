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
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Agregar Nueva Publicación</a>
    </div>
</div>
<!-- Lista de publicaciones -->
<div class="list-group">
    @foreach ($posts as $post)
    <x-post-card :post="$post" />
    
    @endforeach
</div>
@endsection