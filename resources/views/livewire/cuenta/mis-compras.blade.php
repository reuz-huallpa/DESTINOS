<div>
    <h2>Mis Compras</h2>

    @if($compras->isEmpty())
        <p>No tienes compras registradas.</p>
    @else
        <table border="1" cellpadding="8">
            <thead>
                <tr>
                    <th>Paquete</th>
                    <th>Cantidad</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($compras as $compra)
                    <tr>
                        <td>{{ $compra->paquete->titulo }}</td>
                        <td>{{ $compra->cantidad }}</td>
                        <td>{{ ucfirst($compra->estado) }}</td>
                        <td>{{ $compra->created_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
