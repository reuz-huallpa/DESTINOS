<?php

namespace App\Livewire\Paginas;

use Livewire\Component;
use App\Models\Paquete;

class Inicio extends Component
{
    public function render()
    {
        $paquetes = Paquete::all();
    return view('livewire.paginas.inicio', compact('paquetes'))->layout('components.layouts.app');
    }
}
