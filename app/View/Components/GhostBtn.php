<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class GhostBtn extends Component
{
    public string $id;
    public string $ghostBtnText;
    public string $ghostBtnIconLeftSide;
    public string $ghostBtnIconRightSide;
    public string $ghostClass;
    public function __construct(string $id = "", string $ghostBtnText = "", string $ghostBtnIconLeftSide = "", string $ghostBtnIconRightSide = "", string $ghostClass = "")
    {
        $this->id = $id;
        $this->ghostBtnText = $ghostBtnText;
        $this->ghostBtnIconLeftSide = $ghostBtnIconLeftSide;
        $this->ghostBtnIconRightSide = $ghostBtnIconRightSide;
        $this->ghostClass = $ghostClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ghost-btn');
    }
}
