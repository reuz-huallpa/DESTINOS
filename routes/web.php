<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Controladores
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PaqueteController;
use App\Livewire\Paginas\Inicio;
use App\Livewire\Paginas\Paquetes;
use App\Livewire\Paginas\PaqueteDetalle;

// Livewire para otras secciones
use App\Livewire\Cuenta\MisCompras;
use App\Livewire\Cuenta\MisReservas;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Admin\Dashboard;

// -----------------------------
// Páginas principales (Controllers)
// -----------------------------
Route::get('/', [InicioController::class, 'index'])->name('pagina.inicio');



// Route for package details using Livewire PaqueteDetalle component
Route::get('/paquetes/{id}', PaqueteDetalle::class)->name('paquetes.show');
/* Route::get('/', [InicioController::class, 'index'])->name('pagina.inicio');
Route::get('/paquetes/{id}', [InicioController::class, 'show'])->name('paquetes.show'); */

// ...existing code...

// -----------------------------
// Otras páginas (Livewire)
// -----------------------------
Route::get('/mi-cuenta/mis-compras', MisCompras::class)->name('mi-cuenta.mis-compras');
Route::get('/mi-cuenta/mis-reservas', MisReservas::class)->name('mi-cuenta.mis-reservas');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
// ...existing code...

// -----------------------------
// Admin
// -----------------------------
Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');
// Usuarios
Route::get('/admin/usuarios', [InicioController::class, 'usuarios'])->name('admin.usuarios');
Route::get('/admin/usuarios/crear', [InicioController::class, 'crearUsuario'])->name('admin.usuarios.crear');
Route::post('/admin/usuarios', [InicioController::class, 'guardarUsuario'])->name('admin.usuarios.guardar');
Route::get('/admin/usuarios/{id}/editar', [InicioController::class, 'editarUsuario'])->name('admin.usuarios.editar');
Route::put('/admin/usuarios/{id}', [InicioController::class, 'actualizarUsuario'])->name('admin.usuarios.actualizar');
Route::delete('/admin/usuarios/{id}', [InicioController::class, 'borrarUsuario'])->name('admin.usuarios.borrar');

// Compras
Route::get('/admin/compras', [InicioController::class, 'compras'])->name('admin.compras');

// Reservas
Route::get('/admin/reservas', [InicioController::class, 'reservas'])->name('admin.reservas');

// -----------------------------
// Logout
// -----------------------------
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
