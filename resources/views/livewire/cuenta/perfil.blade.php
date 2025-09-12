<div class="container mt-5">
    <h2 class="mb-4">Mi Cuenta</h2>

    <!-- Nav Tabs -->
    <ul class="nav nav-tabs" id="miCuentaTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="compras-tab" data-bs-toggle="tab" data-bs-target="#compras" type="button" role="tab">
                Compras
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="reservas-tab" data-bs-toggle="tab" data-bs-target="#reservas" type="button" role="tab">
                Reservas
            </button>
        </li>
    </ul>

    <!-- Contenido de los Tabs -->
    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="compras" role="tabpanel">
            @livewire('cuenta.mis-compras')
        </div>
        <div class="tab-pane fade" id="reservas" role="tabpanel">
            @livewire('cuenta.mis-reservas')
        </div>
    </div>
</div>
