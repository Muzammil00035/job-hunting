<?php

namespace App\Http\Livewire\Backend\Company;

use Livewire\Component;

class CompanyDashboard extends Component
{
    public function render()
    {
        return view('livewire.backend.company.company-dashboard')->layout('layouts.admin-dash');
    }
}
