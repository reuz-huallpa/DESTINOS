<?php

namespace App\Livewire\Cuenta;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MisReservas extends Component
{
    public function render()
    {
        $reservas = Auth::user()->reservas()->with('paquete')->get();

        return view('livewire.cuenta.mis-reservas', compact('reservas'));
    }
}
