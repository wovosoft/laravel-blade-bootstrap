<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardFooter extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public ?string $variant=null
    )
    {
        $this->classes = [
            "card-footer",
            "text-bg-" . $this->variant => !!$this->variant
        ];
    }

    public function render(): string
    {
        return <<<'blade'
<div {{$getAttributes()}}>{{$slot}}</div>
blade;

    }
}
