@extends('components.layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Reservas realizadas</h1>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Paquete</th>
                <th>Fecha</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
            <tr>
                <td>{{ $reserva->id }}</td>
                <td>{{ $reserva->user->name ?? '-' }}</td>
                <td>{{ $reserva->paquete->nombre ?? '-' }}</td>
                <td>{{ $reserva->created_at }}</td>
                <td>{{ $reserva->estado ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
