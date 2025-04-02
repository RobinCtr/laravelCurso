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
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        <p><strong>Autor:</strong> {{ $post->author }}</p>
        <p><strong>Fecha de Creación:</strong> {{ $post->created_at }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Volver a la Lista</a>
    </div>
</div>

@endsection