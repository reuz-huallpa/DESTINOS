<x-layouts.admin>
    <div class="container py-4">
        <h1 class="mb-4">Lista de Compras</h1>
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
                @forelse ($compras as $compra)
                    <tr>
                        <td>{{ $compra->id }}</td>
                        <td>{{ $compra->user->name ?? 'N/A' }}</td>
                        <td>{{ $compra->paquete->nombre ?? 'N/A' }}</td>
                        <td>{{ $compra->cantidad }}</td>
                        <td>{{ ucfirst($compra->estado) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No hay compras registradas</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layouts.admin>
