<?php

namespace App\Http\Livewire\Backend\Admin;

use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.backend.admin.admin-dashboard')->layout('layouts.admin-dash');
    }
}
