<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SecondaryButton extends Component
{
    public string $secondaryBtnText;
    public string $secondaryBtnIconLeftSide;
    public string $secondaryBtnIconRightSide;
    public string $secondaryClass;

    public function __construct(string $secondaryBtnText = "", string $secondaryBtnIconLeftSide = "", string $secondaryBtnIconRightSide = "", string $secondaryClass = "")
    {
        $this->secondaryBtnText = $secondaryBtnText;
        $this->secondaryBtnIconLeftSide = $secondaryBtnIconLeftSide;
        $this->secondaryBtnIconRightSide = $secondaryBtnIconRightSide;
        $this->secondaryClass = $secondaryClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.secondary-button');
    }
}
