<?php

namespace App\Livewire\Paginas;

use Livewire\Component;

use App\Models\Paquete;

class PaqueteDetalle extends Component
{
    public $paquete;

    public function mount($id)
    {
        $this->paquete = Paquete::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.paginas.paquete_detalle', [
            'paquete' => $this->paquete
        ])->layout('components.layouts.livewire');
    }
}
