<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PersonTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $dataRow;
    public $dataColumn;

    public function __construct($dataRow, $dataColumn)
    {
        $this->dataRow = $dataRow;
        $this->dataColumn = $dataColumn;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.person-table');
    }
}
