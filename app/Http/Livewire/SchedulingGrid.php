<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Scheduling;

class SchedulingGrid extends Component
{
    public function render()
    {
        return view('livewire.scheduling-grid', [
            'schedulings' => Scheduling::getGridData()
        ]);
    }
}
