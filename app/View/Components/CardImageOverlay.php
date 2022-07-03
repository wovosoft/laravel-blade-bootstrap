<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardImageOverlay extends Component
{
    use WovoUiComponentsTrait;

    public function __construct()
    {
        $this->classes = [
            "card-img-overlay"
        ];
    }


    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.card-image-overlay');
    }
}
