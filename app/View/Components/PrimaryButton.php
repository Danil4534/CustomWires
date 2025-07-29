<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PrimaryButton extends Component
{
    public string $primaryBtnText;
    public string $primaryBtnIconLeftSide;
    public string $primaryBtnIconRightSide;
    public string $primaryClass;
    public int $counter;
    public function __construct(string $primaryBtnText = '', string $primaryBtnIconLeftSide = '', string $primaryBtnIconRightSide = '', string $primaryClass = '', int $counter = 0)
    {

        $this->primaryBtnText = $primaryBtnText;
        $this->primaryBtnIconLeftSide = $primaryBtnIconLeftSide;
        $this->primaryBtnIconRightSide = $primaryBtnIconRightSide;
        $this->primaryClass = $primaryClass;
        $this->counter = $counter;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.primary-button');
    }
}
