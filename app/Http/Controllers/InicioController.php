<?php


namespace App\Http\Controllers;

use App\Models\Paquete;
use App\Models\User;
use App\Models\Compra;
use App\Models\Reserva;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function usuarios() {
    $usuarios = User::all();
    return view('admin.usuarios.index', compact('usuarios'));
}

public function crearUsuario() {
    return view('admin.usuarios.crear');
}

public function guardarUsuario(Request $request) {
    // Validar y guardar usuario
}

public function editarUsuario($id) {
    $usuario = User::findOrFail($id);
    return view('admin.usuarios.editar', compact('usuario'));
}

public function actualizarUsuario(Request $request, $id) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'dni' => 'nullable|string|max:20',
        'telefono' => 'nullable|string|max:20',
    ]);

    $usuario = User::findOrFail($id);
    $usuario->name = $request->name;
    $usuario->email = $request->email;
    $usuario->dni = $request->dni;
    $usuario->telefono = $request->telefono;
    $usuario->save();

    return redirect()->route('admin.usuarios')->with('success', 'Datos actualizados correctamente.');
}

public function borrarUsuario($id) {
    User::destroy($id);
    return redirect()->route('admin.usuarios');
}

public function compras() {
    // Mostrar compras
}

public function reservas() {
    // Mostrar reservas
}
    public function index()
    {
        // Pasamos los paquetes al componente Livewire
        $paquetes = Paquete::all();
        return view('livewire.paginas.inicio', compact('paquetes'));
    }

    public function show($id)
    {
        $paquete = Paquete::findOrFail($id);
        return view('livewire.paginas.paquete_detalle', compact('paquete'));
    }
}
