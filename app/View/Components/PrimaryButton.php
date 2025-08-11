<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PrimaryButton extends Component
{
    public $id;
    public string $primaryBtnText;
    public string $primaryBtnIconLeftSide;
    public string $primaryBtnIconRightSide;
    public string $primaryClass;
    public string $type;
    public int $counter;
    public string $route;
    public function __construct(string $route = '', $id = '', $type = '', string $primaryBtnText = '', string $primaryBtnIconLeftSide = '', string $primaryBtnIconRightSide = '', string $primaryClass = '', int $counter = 0)
    {
        $this->id = $id;
        $this->type = $type;
        $this->primaryBtnText = $primaryBtnText;
        $this->primaryBtnIconLeftSide = $primaryBtnIconLeftSide;
        $this->primaryBtnIconRightSide = $primaryBtnIconRightSide;
        $this->primaryClass = $primaryClass;
        $this->counter = $counter;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.primary-button');
    }
}
