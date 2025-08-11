<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SecondaryButton extends Component
{
    public $id;
    public string $secondaryBtnText;
    public string $secondaryBtnIconLeftSide;
    public string $secondaryBtnIconRightSide;
    public string $secondaryClass;
    public string $type;
    public string $route;


    public function __construct(string $id = '', string $route = '', string $secondaryBtnText = "", string $secondaryBtnIconLeftSide = "", string $secondaryBtnIconRightSide = "", string $secondaryClass = "", string $type = "")
    {
        $this->id = $id;
        $this->type = $type;
        $this->secondaryBtnText = $secondaryBtnText;
        $this->secondaryBtnIconLeftSide = $secondaryBtnIconLeftSide;
        $this->secondaryBtnIconRightSide = $secondaryBtnIconRightSide;
        $this->secondaryClass = $secondaryClass;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.secondary-button');
    }
}
