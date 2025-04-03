<?php

namespace App\View\Components\table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EmergencyData extends Component
{
    /**
     * Create a new component instance.
     */
    public $dataRow;

    public function __construct($dataRow)
    {
        $this->dataRow = $dataRow;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.emergency-data');
    }
}
