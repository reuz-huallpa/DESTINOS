<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-4">
                <h2 class="mb-4 text-center text-primary fw-bold">Crear cuenta</h2>
                <form wire:submit.prevent="register" autocomplete="off">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Nombre completo" wire:model="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control form-control-lg" placeholder="Correo electrónico" wire:model="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">DNI</label>
                        <input type="text" class="form-control form-control-lg" placeholder="DNI" wire:model="dni">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Teléfono" wire:model="telefono">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control form-control-lg" placeholder="Contraseña" wire:model="password">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control form-control-lg" placeholder="Confirmar contraseña" wire:model="password_confirmation">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg rounded-pill">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>