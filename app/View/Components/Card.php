<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public ?string $header = null,
        public ?string $footer = null,
        public ?string $title = null,
        public ?string $image = null,
        public ?bool   $imageBottom = false,
        public ?bool   $noBody = false,
        public ?string $variant = null,
        public ?string $borderVariant = null,
    )
    {
        $this->classes = [
            "card",
            "text-bg-" . $this->variant => !!$this->variant,
            "border-" . $this->borderVariant => !!$this->borderVariant
        ];
    }


    public function render(): View|\Closure|string
    {
        return view('components.card');
    }
}
