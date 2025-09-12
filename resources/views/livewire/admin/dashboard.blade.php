<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dashboard - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">Panel Admin</a>
    <div class="d-flex">
      <a class="btn btn-outline-light me-2" href="{{ route('admin.usuarios') }}">Usuarios</a>
      <a class="btn btn-outline-light me-2" href="{{ route('admin.compras') }}">Compras</a>
      <a class="btn btn-outline-light me-2" href="{{ route('admin.reservas') }}">Reservas</a>
      <form method="POST" action="{{ route('logout') }}" class="ms-2">
        @csrf
        <button type="submit" class="btn btn-danger">Cerrar sesión</button>
      </form>
    </div>
  </div>
</nav>

<main class="container py-5">
  <div class="text-center mb-5">
    <h1 class="fw-bold text-gradient">📊 Dashboard</h1>
    <p class="text-muted">Resumen general del sistema</p>
  </div>

  <div class="row g-4">
    <div class="col-md-6">
      <div class="card shadow border-0 h-100">
        <div class="card-body text-center">
          <h5 class="card-title text-muted">Total de Compras</h5>
          <h2 class="fw-bold text-primary">{{ $totalCompras }}</h2>
          <a href="{{ route('admin.compras') }}" class="btn btn-outline-primary mt-3">Ver detalles</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow border-0 h-100">
        <div class="card-body text-center">
          <h5 class="card-title text-muted">Total de Reservas</h5>
          <h2 class="fw-bold text-success">{{ $totalReservas }}</h2>
          <a href="{{ route('admin.reservas') }}" class="btn btn-outline-success mt-3">Ver detalles</a>
        </div>
      </div>
    </div>
  </div>
</main>

<style>
.text-gradient{
  background: linear-gradient(90deg,#0dcaf0,#6610f2);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
</style>

</body>
</html>
