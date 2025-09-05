@extends('components.layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Compras realizadas</h1>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Paquete</th>
                <th>Fecha</th>
                <th>Monto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($compras as $compra)
            <tr>
                <td>{{ $compra->id }}</td>
                <td>{{ $compra->user->name ?? '-' }}</td>
                <td>{{ $compra->paquete->nombre ?? '-' }}</td>
                <td>{{ $compra->created_at }}</td>
                <td>S/ {{ number_format($compra->monto, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
