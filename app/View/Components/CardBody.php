<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardBody extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public ?string $variant = null
    )
    {
        $this->classes = [
            "card-body",
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
