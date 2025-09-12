@extends('components.layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header text-white rounded-top-4" 
             style="background: linear-gradient(90deg, #ff6f61, #e83e8c);">
            <h3 class="mb-0"><i class="bi bi-cart-plus"></i> Crear Nueva Compra</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.compras.guardar') }}">
                @csrf

                <div class="mb-3">
                    <label for="user_id" class="form-label fw-bold">Usuario</label>
                    <select class="form-select" name="user_id" required>
                        <option value="" disabled selected>-- Seleccione un usuario --</option>
                        @foreach($usuarios as $usuario)
                            <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="paquete_id" class="form-label fw-bold">Paquete</label>
                    <select class="form-select" name="paquete_id" required>
                        <option value="" disabled selected>-- Seleccione un paquete --</option>
                        @foreach($paquetes as $paquete)
                            <option value="{{ $paquete->id }}">{{ $paquete->titulo }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="cantidad" class="form-label fw-bold">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad" min="1" required>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label fw-bold">Estado</label>
                    <select class="form-select" name="estado" required>
                        <option value="pendiente">Pendiente</option>
                        <option value="confirmada">Confirmada</option>
                        <option value="cancelada">Cancelada</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.compras') }}" class="btn btn-secondary shadow-sm">
                        <i class="bi bi-arrow-left"></i> Volver
                    </a>
                    <button type="submit" class="btn btn-primary shadow-sm px-4">
                        <i class="bi bi-check-circle"></i> Guardar Compra
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
