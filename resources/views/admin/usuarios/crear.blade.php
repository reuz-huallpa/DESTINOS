@extends('components.layouts.app')

@section('content')
<div class="container py-4">
    <h1>Crear usuario</h1>
    <form action="{{ route('admin.usuarios.guardar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>DNI</label>
            <input type="text" name="dni" class="form-control">
        </div>
        <div class="mb-3">
            <label>Teléfono</label>
            <input type="text" name="telefono" class="form-control">
        </div>
        <div class="mb-3">
            <label>Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button class="btn btn-success" type="submit">Guardar</button>
        <a href="{{ route('admin.usuarios') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection