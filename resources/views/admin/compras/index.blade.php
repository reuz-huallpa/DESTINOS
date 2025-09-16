@extends('components.layouts.admin')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header text-white rounded-top-4 d-flex justify-content-between align-items-center" 
             style="background: linear-gradient(90deg, #007bff, #6610f2);">
            <h3 class="mb-0"><i class="bi bi-bag-check"></i> Listado de Compras</h3>
            <a href="{{ route('admin.compras.crear') }}" class="btn btn-light btn-sm fw-bold shadow-sm">
                <i class="bi bi-plus-circle"></i> Nueva Compra
            </a>
        </div>
        <div class="card-body">
            <table class="table table-hover align-middle text-center table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Paquete</th>
                        <th>Cantidad</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($compras as $compra)
                    <tr>
                        <td>{{ $compra->id }}</td>
                        <td>{{ $compra->user->name }}</td>
                        <td>{{ $compra->paquete->titulo }}</td>
                        <td>{{ $compra->cantidad }}</td>
                        <td>
                            <span class="badge 
                                @if($compra->estado == 'pendiente') bg-warning text-dark
                                @elseif($compra->estado == 'confirmada') bg-success
                                @else bg-danger @endif">
                                {{ ucfirst($compra->estado) }}
                            </span>
                        </td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('admin.compras.editar', $compra->id) }}" 
                               class="btn btn-sm btn-primary shadow-sm px-3">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                            <form action="{{ route('admin.compras.borrar', $compra->id) }}" 
                                  method="POST" onsubmit="return confirm('¿Seguro de eliminar esta compra?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger shadow-sm px-3">
                                    <i class="bi bi-trash3"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
