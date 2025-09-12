<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use App\Models\User;
use App\Models\Compra;
use App\Models\Reserva;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    // ===================== USUARIOS =====================
    public function usuarios()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function crearUsuario()
    {
        return view('admin.usuarios.crear');
    }

    public function guardarUsuario(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'dni' => 'nullable|string|max:20',
            'telefono' => 'nullable|string|max:20',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'dni' => $request->dni,
            'telefono' => $request->telefono,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.usuarios')->with('success', 'Usuario creado correctamente.');
    }

    public function editarUsuario($id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.editar', compact('usuario'));
    }

    public function actualizarUsuario(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$usuario->id,
            'dni' => 'nullable|string|max:20',
            'telefono' => 'nullable|string|max:20',
        ]);

        $usuario->update($request->all());

        return redirect()->route('admin.usuarios')->with('success', 'Usuario actualizado correctamente.');
    }

    public function borrarUsuario($id)
    {
        User::destroy($id);
        return redirect()->route('admin.usuarios')->with('success', 'Usuario eliminado correctamente.');
    }


    // ===================== COMPRAS =====================
    // COMPRAS
public function compras()
{
    $compras = Compra::with('user', 'paquete')->get();
    return view('admin.compras.index', compact('compras'));
}

public function crearCompra()
{
    $usuarios = User::all();
    $paquetes = Paquete::all();
    return view('admin.compras.crear', compact('usuarios', 'paquetes'));
}

public function guardarCompra(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'paquete_id' => 'required|exists:paquetes,id',
        'cantidad' => 'required|integer|min:1',
        'estado' => 'required|string',
    ]);

    Compra::create($request->all());

    return redirect()->route('admin.compras')->with('success', 'Compra creada correctamente.');
}

public function editarCompra($id)
{
    $compra = Compra::findOrFail($id);
    $usuarios = User::all();
    $paquetes = Paquete::all();
    return view('admin.compras.editar', compact('compra', 'usuarios', 'paquetes'));
}

public function actualizarCompra(Request $request, $id)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'paquete_id' => 'required|exists:paquetes,id',
        'cantidad' => 'required|integer|min:1',
        'estado' => 'required|string',
    ]);

    $compra = Compra::findOrFail($id);
    $compra->update($request->all());

    return redirect()->route('admin.compras')->with('success', 'Compra actualizada correctamente.');
}

public function borrarCompra($id)
{
    Compra::destroy($id);
    return redirect()->route('admin.compras')->with('success', 'Compra eliminada correctamente.');
}


    // ===================== RESERVAS =====================
    public function reservas()
    {
        $reservas = Reserva::with('user', 'paquete')->get();
        return view('admin.reservas.index', compact('reservas'));
    }

    public function crearReserva()
    {
        $usuarios = User::all();
        $paquetes = Paquete::all();
        return view('admin.reservas.crear', compact('usuarios', 'paquetes'));
    }

    public function guardarReserva(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'paquete_id' => 'required|exists:paquetes,id',
            'cantidad' => 'required|integer|min:1',
            'estado' => 'required|string',
        ]);

        Reserva::create($request->all());

        return redirect()->route('admin.reservas')->with('success', 'Reserva creada correctamente.');
    }

    public function editarReserva($id)
    {
        $reserva = Reserva::findOrFail($id);
        $usuarios = User::all();
        $paquetes = Paquete::all();
        return view('admin.reservas.editar', compact('reserva', 'usuarios', 'paquetes'));
    }

    public function actualizarReserva(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'paquete_id' => 'required|exists:paquetes,id',
            'cantidad' => 'required|integer|min:1',
            'estado' => 'required|string',
        ]);

        $reserva = Reserva::findOrFail($id);
        $reserva->update($request->all());

        return redirect()->route('admin.reservas')->with('success', 'Reserva actualizada correctamente.');
    }

    public function borrarReserva($id)
    {
        Reserva::destroy($id);
        return redirect()->route('admin.reservas')->with('success', 'Reserva eliminada correctamente.');
    }


    // ===================== DASHBOARD =====================
    public function dashboard()
    {
        $totalCompras = Compra::count();
        $totalReservas = Reserva::count();

        return view('livewire.admin.dashboard', compact('totalCompras', 'totalReservas'));
    }


    // ===================== PÁGINA PRINCIPAL =====================
    public function index()
    {
        $paquetes = Paquete::all();
        return view('livewire.paginas.inicio', compact('paquetes'));
    }

    public function show($id)
    {
        $paquete = Paquete::findOrFail($id);
        return view('livewire.paginas.paquete_detalle', compact('paquete'));
    }

    public function reservar($id)
    {
        $paquete = Paquete::findOrFail($id);

        Reserva::create([
            'user_id' => 1, // ⚠️ Cambiar por Auth::id() cuando uses login
            'paquete_id' => $paquete->id,
            'cantidad' => 1,
            'estado' => 'pendiente',
        ]);

        return redirect()->route('paquetes.show', $paquete->id)
                         ->with('success', '¡Reserva realizada con éxito!');
    }

    public function comprar($id)
    {
        $paquete = Paquete::findOrFail($id);

        Compra::create([
            'user_id' => 1, // ⚠️ Cambiar por Auth::id() cuando uses login
            'paquete_id' => $paquete->id,
            'cantidad' => 1,
            'estado' => 'pendiente',
        ]);

        return redirect()->route('paquetes.show', $paquete->id)
                         ->with('success', '¡Compra realizada con éxito!');
    }
}
