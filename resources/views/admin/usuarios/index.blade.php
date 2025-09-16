@extends('components.layouts.admin')

@section('content')
    <div class="container py-4">
       <h1 class="mb-4">Usuarios registrados</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

<a href="{{ route('admin.usuarios.crear') }}" class="btn btn-primary mb-3">Crear nuevo usuario</a>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>DNI</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->dni }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>
                    <a href="{{ route('admin.usuarios.editar', $usuario->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('admin.usuarios.borrar', $usuario->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas borrar este usuario?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
