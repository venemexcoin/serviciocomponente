<?php

namespace App\Http\Livewire\Collaborator;

use Livewire\Component;

class CollaboratorDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.collaborator.collaborator-dashboard-component')->layout('layouts.base');
    }
}
