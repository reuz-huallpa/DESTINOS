<header class="bg-dark border-bottom border-primary shadow-lg py-3 position-relative overflow-hidden">
	<div class="container d-flex justify-content-between align-items-center position-relative" style="z-index:2;">
		<a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-2 text-decoration-none">
			<span class="fw-bold fs-2 text-info d-flex align-items-center gap-2">
				Administración
			</span>
			<span class="badge bg-primary text-light rounded-pill ms-2 d-none d-md-inline">Panel</span>
		</a>
		<nav class="d-flex align-items-center gap-2">
			<a href="{{ route('admin.dashboard') }}" class="text-light text-decoration-none px-3 py-1 rounded-pill fw-semibold">Dashboard</a>
			<a href="{{ route('admin.usuarios') }}" class="text-light text-decoration-none px-3 py-1 rounded-pill fw-semibold">Usuarios</a>
			<span class="badge bg-primary text-light rounded-pill ms-2 d-none d-md-inline">reportes</span>
			<a href="{{ route('admin.reservas') }}" class="text-light text-decoration-none px-3 py-1 rounded-pill fw-semibold">Reservas</a>
			<a href="{{ route('admin.compras') }}" class="text-light text-decoration-none px-3 py-1 rounded-pill fw-semibold">Compras</a>
			<span class="badge bg-primary text-light rounded-pill ms-2 d-none d-md-inline">excel exportable</span>
			<form method="POST" action="{{ route('logout') }}" class="ms-2">
				@csrf
				<button type="submit" class="btn btn-info btn-sm rounded-pill">Salir</button>
			</form>
		</nav>
	</div>
	<div class="position-absolute top-0 end-0 opacity-25" style="width:160px;height:160px;z-index:1;pointer-events:none;">
		<div class="rounded-circle bg-info bg-gradient position-absolute top-0 end-0" style="width:120px;height:120px;filter:blur(24px);"></div>
		<div class="rounded-circle bg-primary position-absolute top-50 start-0 translate-middle-y" style="width:40px;height:40px;filter:blur(10px);"></div>
	</div>
</header>
