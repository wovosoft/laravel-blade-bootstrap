<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardLink extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public ?string $href = '#'
    )
    {
        $this->classes = [
            "card-link"
        ];
    }


    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return <<<'blade'
<a href="{{$href}}" {{$getAttributes()}}>{{$slot}}</a>
blade;
    }
}
