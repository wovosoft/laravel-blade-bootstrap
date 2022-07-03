<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlertHeading extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public ?string $tag = "h4"
    )
    {
        $this->classes = [
            "alert-heading"
        ];
    }


    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.alert-heading');
    }
}
