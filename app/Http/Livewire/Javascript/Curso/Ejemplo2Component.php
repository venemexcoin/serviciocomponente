<?php

namespace App\Http\Livewire\Javascript\Curso;

use Livewire\Component;

class Ejemplo2Component extends Component
{
    public function render()
    {
        return view('livewire.javascript.curso.ejemplo2-component')->layout('layouts.basejs');
    }
}
