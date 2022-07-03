<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public string $tag = "span",
        public ?bool  $pill = false
    )
    {
        $this->classes = [
            "badge",
            "rounded-pill" => !!$this->pill
        ];
    }

    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.badge');
    }
}
