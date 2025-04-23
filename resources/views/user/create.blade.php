@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')

<div class="row mt-4">
    <div class="col">
        <h2>Agregar Nueva Publicación</h2>
    </div>
</div>

<!-- Formulario nuevo post -->
<div class="row mt-4 mb-4">
    <div class="col text-center">
        <form action="{{ route('users.store') }}" method="POST" class="form-group">
            @csrf

            <!-- Nombre -->
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Agregar usuario</button>
        </form>
    </div>
</div>

@endsection
