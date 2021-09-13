<?php

namespace App\Http\Livewire\Javascript\Curso;

use Livewire\Component;

class Ejemplo1Component extends Component
{
    public function render()
    {
        return view('livewire.javascript.curso.ejemplo1-component')->layout('layouts.basejs');
    }
}
