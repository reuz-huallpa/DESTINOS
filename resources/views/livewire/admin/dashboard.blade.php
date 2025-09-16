@extends('components.layouts.admin')

@section('content')

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

@endsection

@push('styles')
<style>
.text-gradient{
  background: linear-gradient(90deg,#0dcaf0,#6610f2);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
</style>
@endpush
