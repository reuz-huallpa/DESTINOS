@extends('components.layouts.app')

@section('content')
<div class="container py-4">
    <h1>Editar usuario</h1>
    <form action="{{ route('admin.usuarios.actualizar', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ $usuario->name }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $usuario->email }}" required>
        </div>
        <div class="mb-3">
            <label>DNI</label>
            <input type="text" name="dni" class="form-control" value="{{ $usuario->dni }}">
        </div>
        <div class="mb-3">
            <label>Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="{{ $usuario->telefono }}">
        </div>
        <button class="btn btn-primary" type="submit">Actualizar</button>
        <a href="{{ route('admin.usuarios') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection