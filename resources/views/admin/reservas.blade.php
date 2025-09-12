<x-layouts.admin>
    <div class="container py-4">
        <h1 class="mb-4">Lista de Reservas</h1>
        <table class="table table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Usuario</th>
                    <th>Paquete</th>
                    <th>Cantidad</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->id }}</td>
                        <td>{{ $reserva->user->name ?? 'N/A' }}</td>
                        <td>{{ $reserva->paquete->nombre ?? 'N/A' }}</td>
                        <td>{{ $reserva->cantidad }}</td>
                        <td>{{ ucfirst($reserva->estado) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No hay reservas registradas</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layouts.admin>
