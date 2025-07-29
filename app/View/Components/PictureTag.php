<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PictureTag extends Component
{
    public string $src;
    public string $alt;
    public string $class;
    public bool $lazy;

    public function __construct(string $src = '', string $alt = '', string $class = '', bool $lazy = false)
    {
        $this->src = $src;
        $this->alt = $alt;
        $this->class = $class;
        $this->lazy = $lazy;
    }

    public function webpSrc()
    {
        return preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $this->src);
    }

    public function render(): View|Closure|string
    {
        return view('components.picture-tag');
    }
}
