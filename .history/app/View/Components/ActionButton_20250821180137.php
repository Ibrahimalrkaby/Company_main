<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public string $text;
    public string $color;
    public bool $isHtml = false;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $href, public string $type)
    {
        switch ($type) {
            case 'create':
                $this->text = __('keywords.add_new');
                $this->color = 'primary';
                $this->isHtml = false;
                break;
            case 'edit':
                $this->text = '<i class="fe fe-edit fa-2x"></i>';
                $this->color = 'primary';
                $this->isHtml = true;
                break;
            case 'show':
                $this->text = '<i class="fe fe-eye fa-2x"></i>';
                $this->color = 'success';
                $this->isHtml = true;
                break;
            default:
                $this->text = __('keywords.action');
                $this->color = 'secondary';
                $this->isHtml = false;
                break;
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
