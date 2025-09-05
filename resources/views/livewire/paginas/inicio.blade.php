@extends('components.layouts.app')

@section('content')
<div>
    <div class="container py-5" style="background: #fff; min-height: 100vh;">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-bold text-primary">¡Bienvenido a Multidestinos!</h1>
            <p class="lead text-secondary fs-4">Descubre y reserva los mejores paquetes turísticos para tu próxima aventura.</p>
        </div>
        <div class="row justify-content-center">
            @forelse($paquetes->sortBy('nombre') as $paquete)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow border-0 rounded-4 position-relative overflow-hidden paquete-card" style="transition:transform .2s,box-shadow .2s;">
                        <img src="{{ asset('images/paquetes/' . $paquete->imagen) }}" alt="{{ $paquete->nombre }}" class="card-img-top" style="height:220px;object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-4 text-dark">{{ $paquete->nombre }}</h5>
                            <p class="card-text text-dark">{{ $paquete->descripcion }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-primary fs-6">{{ $paquete->duracion }}</span>
                                <span class="fw-bold text-success fs-5">S/ {{ number_format($paquete->precio, 2) }}</span>
                            </div>
                            <div class="d-grid mt-4">
                                <a href="{{ route('paquetes.show', ['id' => $paquete->id]) }}">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">No hay paquetes disponibles en este momento.</p>
                </div>
            @endforelse
        </div>
    </div>
    <style>
        .paquete-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px rgba(7, 44, 255, 0.15), 0 2px 8px rgba(0,0,0,0.08);
            border-color: #fd0d0d;
        }
    </style>
</div>
@endsection