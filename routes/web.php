<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Cuenta\Perfil;
// Controladores
use App\Http\Controllers\InicioController;

// Livewire para páginas
use App\Livewire\Paginas\PaqueteDetalle;
use App\Livewire\Cuenta\MisCompras;
use App\Livewire\Cuenta\MisReservas;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Admin\Dashboard;

// -----------------------------
// Páginas principales
// -----------------------------
Route::get('/', [InicioController::class, 'index'])->name('pagina.inicio');
Route::get('/paquetes/{id}', PaqueteDetalle::class)->name('paquetes.show');



//----------------------------
// PERFIL DE USUARIO
//----------------------------
Route::get('/mi-cuenta', \App\Livewire\Cuenta\Perfil::class)->name('mi-cuenta');
Route::get('/mi-cuenta', Perfil::class)->name('mi-cuenta')->middleware('auth');
// -----------------------------
// Cuenta (Livewire)
// -----------------------------
Route::get('/mi-cuenta/mis-compras', MisCompras::class)->name('mi-cuenta.mis-compras');
Route::get('/mi-cuenta/mis-reservas', MisReservas::class)->name('mi-cuenta.mis-reservas');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

// -----------------------------
Route::get('/admin/dashboard', [InicioController::class, 'dashboard'])->name('admin.dashboard');
// Admin
// -----------------------------
Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');
Route::get('admin/dashboard', [InicioController::class, 'dashboard'])->name('admin.dashboard');


// Usuarios
Route::get('/admin/usuarios', [InicioController::class, 'usuarios'])->name('admin.usuarios');
Route::get('/admin/usuarios/crear', [InicioController::class, 'crearUsuario'])->name('admin.usuarios.crear');
Route::post('/admin/usuarios', [InicioController::class, 'guardarUsuario'])->name('admin.usuarios.guardar');
Route::get('/admin/usuarios/{id}/editar', [InicioController::class, 'editarUsuario'])->name('admin.usuarios.editar');
Route::put('/admin/usuarios/{id}', [InicioController::class, 'actualizarUsuario'])->name('admin.usuarios.actualizar');
Route::delete('/admin/usuarios/{id}', [InicioController::class, 'borrarUsuario'])->name('admin.usuarios.borrar');

// Compras y Reservas
Route::get('/admin/compras', [InicioController::class, 'compras'])->name('admin.compras');
Route::get('/admin/reservas', [InicioController::class, 'reservas'])->name('admin.reservas');

// -----------------------------
// Paquetes acciones
// -----------------------------
Route::post('/paquetes/{id}/reservar', [InicioController::class, 'reservar'])->name('paquetes.reservar');
Route::post('/paquetes/{id}/comprar', [InicioController::class, 'comprar'])->name('paquetes.comprar');

// Reservas
Route::get('/admin/reservas', [InicioController::class, 'reservas'])->name('admin.reservas');
Route::get('/admin/reservas/crear', [InicioController::class, 'crearReserva'])->name('admin.reservas.crear');
Route::post('/admin/reservas', [InicioController::class, 'guardarReserva'])->name('admin.reservas.guardar');
Route::get('/admin/reservas/{id}/editar', [InicioController::class, 'editarReserva'])->name('admin.reservas.editar');
Route::put('/admin/reservas/{id}', [InicioController::class, 'actualizarReserva'])->name('admin.reservas.actualizar');
Route::delete('/admin/reservas/{id}', [InicioController::class, 'borrarReserva'])->name('admin.reservas.borrar');
Route::get('/admin/reservas', [InicioController::class, 'reservas'])->name('admin.reservas');


// Compras
Route::get('/admin/compras', [InicioController::class, 'compras'])->name('admin.compras');
Route::get('/admin/compras/crear', [InicioController::class, 'crearCompra'])->name('admin.compras.crear');
Route::post('/admin/compras', [InicioController::class, 'guardarCompra'])->name('admin.compras.guardar');
Route::get('/admin/compras/{id}/editar', [InicioController::class, 'editarCompra'])->name('admin.compras.editar');
Route::put('/admin/compras/{id}', [InicioController::class, 'actualizarCompra'])->name('admin.compras.actualizar');
Route::delete('/admin/compras/{id}', [InicioController::class, 'borrarCompra'])->name('admin.compras.borrar');


// -----------------------------
// Logout
// -----------------------------
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
