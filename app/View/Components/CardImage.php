<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardImage extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public ?bool   $bottom = false,
        public ?string $src = null
    )
    {
        $this->classes = [
            "card-img-" . ($this->bottom ? "bottom" : "top")
        ];
    }

    public function boot()
    {
        $this->setAttributes([
            "src" => $this->src ?? ""
        ]);
    }


    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return <<<'blade'
<img {{$getAttributes()}}/>
blade;
    }
}
