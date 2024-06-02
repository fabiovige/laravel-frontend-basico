<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public $icon;
    public $iconPosition;
    public $type;
    public $name;
    public $placeholder;
    public $size;
    public $label;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $type, $size, $label = '', $placeholder = '', $icon = '', $iconPosition = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->size = $size;
        $this->placeholder = $placeholder;
        $this->icon = $icon;
        $this->iconPosition = $iconPosition;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
