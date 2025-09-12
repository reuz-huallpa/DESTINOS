<div>

<div class="container py-5" style="background: #26c746; min-height: 100vh;">
	<div class="row justify-content-center">
		<div class="col-lg-9">
			<div class="card border-0 shadow-lg rounded-4 overflow-hidden position-relative" style="background: rgba(255, 255, 255, 0.97);">
				<div class="position-absolute top-0 end-0 opacity-25" style="width:160px;height:160px;z-index:1;pointer-events:none;">
					<div class="rounded-circle bg-info bg-gradient position-absolute top-0 end-0" style="width:120px;height:120px;filter:blur(24px);"></div>
					<div class="rounded-circle bg-primary position-absolute top-50 start-0 translate-middle-y" style="width:40px;height:40px;filter:blur(10px);"></div>
				</div>
				<div class="row g-0 position-relative" style="z-index:2;">
					<div class="col-md-5 d-flex align-items-stretch">
						<img src="{{ asset('images/' . $paquete->imagen) }}" alt="{{ $paquete->nombre }}" class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="{{ $paquete->nombre }}" style="min-height:320px;object-fit:cover;">
					</div>
					<div class="col-md-7 d-flex align-items-center">
						<div class="card-body p-5 text-light">
							<h2 class="card-title text-info fw-bold mb-3" style="letter-spacing:2px;">{{ $paquete->nombre }}</h2>
							<p class="card-text mb-4 fs-5">{{ $paquete->descripcion }}</p>
							<ul class="list-group list-group-flush mb-4">
								<li class="list-group-item bg-transparent text-light border-0"><strong>Duración:</strong> <span class="text-info">{{ $paquete->duracion }}</span></li>
								<li class="list-group-item bg-transparent text-light border-0"><strong>Precio:</strong> <span class="text-success fw-bold">S/ {{ number_format($paquete->precio, 2) }}</span></li>
							</ul>
							@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<div class="d-flex gap-3 mb-4">
    <form action="{{ route('paquetes.reservar', $paquete->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-outline-info btn-lg rounded-pill px-4 fw-bold shadow">Reservar</button>
    </form>
    <form action="{{ route('paquetes.comprar', $paquete->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success btn-lg rounded-pill px-4 fw-bold shadow">Comprar</button>
    </form>
</div>
							<div class="d-flex gap-2">
								<a href="{{ route('pagina.inicio') }}" class="btn btn-link text-info">Volver al inicio</a>
								<a href="{{ route('pagina.inicio') }}" class="btn btn-link text-info">Volver a paquetes</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

</div>