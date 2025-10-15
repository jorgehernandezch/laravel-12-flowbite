<?php

namespace App\View\Components\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Text extends Component
{
    public $name;
    public $label;
    public $placeholder;
    public $icon;
    public $errors;
    public $styles;
    public $required;
    public $value;
    public $onBlur;

    public function __construct(
        $name = '',
        $label = '',
        $placeholder = '',
        $icon = '',
        $errors = null,
        $styles = '',
        $required = false,
        $onBlur = '',
        $value = null
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->icon = $icon;
        $this->errors = $errors;
        $this->styles = $styles;
        $this->required = $required;
        $this->onBlur = $onBlur;
        $this->value = $value;
    }

    public function render(): View|Closure|string
    {
        return view('components.inputs.text');
    }
}
