<?php

namespace App\View\Components;

use Closure;
use App\Models\Member;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MemberComponent extends Component
{
    public $member;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->member = Member::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.member-component');
    }
}
