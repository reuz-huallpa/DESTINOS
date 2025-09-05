<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-5">
        <div class="card border-0 shadow-lg rounded-4">
            <div class="card-body p-5">
                <h2 class="mb-4 text-center text-info fw-bold">Iniciar sesión</h2>
                <form wire:submit.prevent="login" autocomplete="off">
                    <div class="mb-4">
                        <input type="email" class="form-control form-control-lg mb-3" wire:model="email" placeholder="Correo">
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control form-control-lg mb-3" wire:model="password" placeholder="Contraseña">
                    </div>
                    <div class="d-grid mb-2">
                        <button type="submit" class="btn btn-info btn-lg rounded-pill fw-bold shadow">Iniciar sesión</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <small class="text-secondary">¿No tienes cuenta? <a href="{{ route('register') }}" class="text-info fw-semibold">Regístrate</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

