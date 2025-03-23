<?php

namespace App\View\Components\CreateForm;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CreateForm extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;
    public $route;

    public function __construct($data, $route)
    {
        $this->data = $data;
        $this->route = $route;
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.create-form');
    }
}
