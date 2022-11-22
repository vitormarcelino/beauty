<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Scheduling;

class DashboardCounters extends Component
{
    public function render()
    {
        return view('livewire.dashboard-counters', [
            'schedulings' => count(Scheduling::getGridData()),
            'payment_to_receive' => Scheduling::notPayed(),
            'patients' => Patient::count(),
        ]);
    }
}
