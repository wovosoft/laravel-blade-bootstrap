<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardText extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public ?string $tag = "p"
    )
    {
        $this->classes = ["card-text"];
    }

    public function render(): string
    {
        return <<<'blade'
<{{$tag}} {{$getAttributes()}}>{{$slot}}</{{$tag}}>
blade;

    }
}
