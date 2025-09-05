<?php

namespace App\Livewire\Paginas;

use Livewire\Component;

class Paquetes extends Component
{
    public $paqueteId;
    public function mount($id)
    {
        $this->paqueteId = $id;
    }
    public function render()
    {
        return view('livewire.paginas.paquetes');
    }
}
