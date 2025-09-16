<?php

namespace App\Livewire\Cuenta;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Perfil extends Component
{
    public $tab = 'compras';

    public function setTab($tab)
    {
        $this->tab = $tab;
    }

    public function render()
    {
            $usuario = Auth::user();
            $compras = $usuario->compras()->with('paquete')->get();
            $reservas = $usuario->reservas()->with('paquete')->get();
            

        return view('livewire.cuenta.perfil', compact('usuario', 'compras', 'reservas'))
            ->layout('components.layouts.livewire'); // 👈 fuerza el layout correcto
    }
}
