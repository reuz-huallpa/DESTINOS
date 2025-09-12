<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Reservas - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Panel Admin</a>
    <div class="d-flex">
      <a class="btn btn-outline-light me-2" href="{{ route('admin.usuarios') }}">Usuarios</a>
      <a class="btn btn-outline-light me-2" href="{{ route('admin.compras') }}">Compras</a>
      <a class="btn btn-info" href="{{ route('admin.reservas') }}">Reservas</a>
    </div>
  </div>
</nav>

<main class="container py-4">
  <div class="text-center mb-4">
    <h1 class="fw-bold text-gradient">📌 Lista de Reservas</h1>
    <p class="text-muted">Aquí puedes visualizar todas las reservas realizadas en el sistema.</p>
  </div>

  @if(!isset($reservas) || $reservas->isEmpty())
    <div class="alert alert-warning text-center">No hay reservas registradas.</div>
  @else
    <div class="table-responsive shadow rounded">
      <table class="table table-hover align-middle mb-0">
        <thead class="table-dark">
          <tr>
            <th>#ID</th>
            <th>Usuario</th>
            <th>Paquete</th>
            <th>Cantidad</th>
            <th>Estado</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          @foreach($reservas as $reserva)
            <tr>
              <td class="fw-bold">{{ $reserva->id }}</td>
              <td>{{ $reserva->user->name ?? 'Sin usuario' }}</td>
              <td><span class="badge bg-primary">{{ $reserva->paquete->nombre ?? 'Sin paquete' }}</span></td>
              <td>{{ $reserva->cantidad }}</td>
              <td>
                <span class="badge 
                  @if($reserva->estado == 'pendiente') bg-warning 
                  @elseif($reserva->estado == 'confirmada') bg-success 
                  @else bg-secondary @endif">
                  {{ ucfirst($reserva->estado) }}
                </span>
              </td>
              <td>{{ optional($reserva->created_at)->format('d/m/Y H:i') }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endif
</main>

<style>
.text-gradient{
  background: linear-gradient(90deg,#20c997,#0dcaf0);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
</style>


</body>
</html>
