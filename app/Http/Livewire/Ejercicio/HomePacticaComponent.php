<?php

namespace App\Http\Livewire\Ejercicio;

use Livewire\Component;

class HomePacticaComponent extends Component
{
    public function render()
    {
        return view('livewire.ejercicio.home-pactica-component')->layout('layouts.basejs');
    }
}
