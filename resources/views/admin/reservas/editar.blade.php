@extends('components.layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h4 class="mb-0">
                        ✏️ Editar Reserva #{{ $reserva->id }}
                    </h4>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('admin.reservas.actualizar', $reserva->id) }}">
                        @csrf
                        @method('PUT')

                        {{-- Usuario --}}
                        <div class="mb-3">
                            <label for="user_id" class="form-label fw-bold">👤 Usuario</label>
                            <select id="user_id" name="user_id" class="form-select" required>
                                @foreach($usuarios as $usuario)
                                    <option value="{{ $usuario->id }}" 
                                        {{ $reserva->user_id == $usuario->id ? 'selected' : '' }}>
                                        {{ $usuario->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Paquete --}}
                        <div class="mb-3">
                            <label for="paquete_id" class="form-label fw-bold">🎒 Paquete</label>
                            <select id="paquete_id" name="paquete_id" class="form-select" required>
                                @foreach($paquetes as $paquete)
                                    <option value="{{ $paquete->id }}" 
                                        {{ $reserva->paquete_id == $paquete->id ? 'selected' : '' }}>
                                        {{ $paquete->titulo }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Cantidad --}}
                        <div class="mb-3">
                            <label for="cantidad" class="form-label fw-bold">🔢 Cantidad</label>
                            <input type="number" id="cantidad" name="cantidad" 
                                   value="{{ $reserva->cantidad }}" 
                                   class="form-control" required>
                        </div>

                        {{-- Estado --}}
                        <div class="mb-3">
                            <label for="estado" class="form-label fw-bold">📌 Estado</label>
                            <select id="estado" name="estado" class="form-select">
                                <option value="pendiente" {{ $reserva->estado == 'pendiente' ? 'selected' : '' }}>
                                    ⏳ Pendiente
                                </option>
                                <option value="confirmada" {{ $reserva->estado == 'confirmada' ? 'selected' : '' }}>
                                    ✅ Confirmada
                                </option>
                                <option value="cancelada" {{ $reserva->estado == 'cancelada' ? 'selected' : '' }}>
                                    ❌ Cancelada
                                </option>
                            </select>
                        </div>

                        {{-- Botones --}}
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.reservas') }}" class="btn btn-outline-secondary">
                                ⬅️ Volver
                            </a>
                            <button type="submit" class="btn btn-success px-4">
                                💾 Guardar cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
