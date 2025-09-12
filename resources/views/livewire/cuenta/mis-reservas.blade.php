<div>
    <h2>Mis Reservas</h2>

    @if($reservas->isEmpty())
        <p>No tienes reservas registradas.</p>
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
                @foreach($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->paquete->titulo }}</td>
                        <td>{{ $reserva->cantidad }}</td>
                        <td>{{ ucfirst($reserva->estado) }}</td>
                        <td>{{ $reserva->created_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
