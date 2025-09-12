<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Compras - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Panel Admin</a>
    <div class="d-flex">
      <a class="btn btn-outline-light me-2" href="{{ route('admin.usuarios') }}">Usuarios</a>
      <a class="btn btn-info me-2" href="{{ route('admin.compras') }}">Compras</a>
      <a class="btn btn-outline-light" href="{{ route('admin.reservas') }}">Reservas</a>
    </div>
  </div>
</nav>

<main class="container py-4">
  <h1 class="mb-3">Listado de Compras</h1>

  @if(!isset($compras) || $compras->isEmpty())
    <div class="alert alert-warning">No hay compras registradas.</div>
  @else
    <div class="table-responsive">
      <table class="table table-hover">
        <thead class="table-dark">
          <tr><th>#</th><th>Usuario</th><th>Paquete</th><th>Cantidad</th><th>Estado</th><th>Fecha</th></tr>
        </thead>
        <tbody>
          @foreach($compras as $compra)
            <tr>
              <td>{{ $compra->id }}</td>
              <td>{{ $compra->user->name ?? 'Sin usuario' }}</td>
              <td>{{ $compra->paquete->nombre ?? 'Sin paquete' }}</td>
              <td>{{ $compra->cantidad }}</td>
              <td>{{ ucfirst($compra->estado) }}</td>
              <td>{{ optional($compra->created_at)->format('d/m/Y H:i') }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endif
</main>


</body>
</html>
