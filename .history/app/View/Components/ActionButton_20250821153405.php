<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public $text;
    public $color;
    /**
     * Create a new component instance.
     */
    public function __construct(public string $href, public string $color, public string $text)
    {
        if ($text == 'create') {
            $this->$text = __('keywords.add_new');
            $this->$color = 'primary';
        } elseif ($text == 'edit') {
            $this->$text = __('keywords.edit_service');
            $this->$color = 'primary';
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
