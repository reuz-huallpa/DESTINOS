@extends('components.layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-gradient text-white rounded-top-4" 
             style="background: linear-gradient(90deg, #28a745, #20c997);">
            <h3 class="mb-0"><i class="bi bi-pencil-square"></i> Editar Compra</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.compras.actualizar', $compra->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Usuario</label>
                    <select name="user_id" class="form-select" required>
                        @foreach($usuarios as $usuario)
                            <option value="{{ $usuario->id }}" 
                                {{ $compra->user_id == $usuario->id ? 'selected' : '' }}>
                                {{ $usuario->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Paquete</label>
                    <select name="paquete_id" class="form-select" required>
                        @foreach($paquetes as $paquete)
                            <option value="{{ $paquete->id }}" 
                                {{ $compra->paquete_id == $paquete->id ? 'selected' : '' }}>
                                {{ $paquete->titulo }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Cantidad</label>
                    <input type="number" name="cantidad" value="{{ $compra->cantidad }}" 
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Estado</label>
                    <select name="estado" class="form-select">
                        <option value="pendiente" {{ $compra->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                        <option value="confirmada" {{ $compra->estado == 'confirmada' ? 'selected' : '' }}>Confirmada</option>
                        <option value="cancelada" {{ $compra->estado == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.compras') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Volver
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
