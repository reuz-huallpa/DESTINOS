<?php

namespace App\Livewire\Cuenta;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MisCompras extends Component
{
    public function render()
    {
        $compras = Auth::user()->compras()->with('paquete')->get();

        return view('livewire.cuenta.mis-compras', compact('compras'));
    }
}
