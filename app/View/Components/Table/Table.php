<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     */
    public $dataRow;
    public $dataColumn;
    public $table;


    public function __construct($dataRow, $dataColumn, $table)
    {
        $this->dataRow = $dataRow;
        $this->dataColumn = $dataColumn;
        $this->table = $table;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.table');
    }
}
