<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardTitle extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public ?string $tag = "h5",
        public ?string $title = null
    )
    {
        $this->classes = ["card-title"];
    }

    public function render(): string
    {
        return <<<'blade'
<{{$tag}} {{$getAttributes()}}>{{$slot??$title}}</{{$tag}}>
blade;
    }
}
