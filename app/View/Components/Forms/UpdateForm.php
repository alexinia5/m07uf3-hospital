<?php

namespace App\View\Components\UpdateForm;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UpdateForm extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.update-form');
    }
}
