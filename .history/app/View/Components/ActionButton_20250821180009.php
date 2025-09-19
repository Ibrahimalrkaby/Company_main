<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public string $text;
    public string $color;
    /**
     * Create a new component instance.
     */
    public function __construct(public string $href, public string $type)
    {
        if ($type == 'create') {
            $this->text = __('keywords.add_new');
            $this->color = 'primary';
        } elseif ($type == 'edit') {
            $this->text = "<i class='fe fe-edit fa-2x'></i>";
            $this->color = 'primary';
        } elseif ($type == 'show') {
            $this->text = "<i class='fe fe-edit fa-2x'></i>";
            $this->color = 'success';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
