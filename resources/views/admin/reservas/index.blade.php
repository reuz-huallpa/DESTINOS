@extends('components.layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Reservas registradas</h1>
        <a href="{{ route('admin.reservas.crear') }}" class="btn btn-primary">
            Crear nueva reserva
        </a>
    </div>

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-bordered table-hover align-middle">
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
                @forelse($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->id }}</td>
                        <td>{{ $reserva->user->name }}</td>
                        <td>{{ $reserva->paquete->titulo }}</td>
                        <td>{{ $reserva->cantidad }}</td>
                        <td>
                            <span class="badge 
                                @if($reserva->estado == 'pendiente') bg-warning text-dark
                                @elseif($reserva->estado == 'confirmada') bg-success
                                @else bg-secondary
                                @endif">
                                {{ ucfirst($reserva->estado) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.reservas.editar', $reserva->id) }}" 
                               class="btn btn-sm btn-warning text-dark me-2">
                                Editar
                            </a>
                            <form action="{{ route('admin.reservas.borrar', $reserva->id) }}" 
                                  method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('¿Seguro de eliminar esta reserva?')">
                                    Borrar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">
                            🚫 No hay reservas registradas
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
