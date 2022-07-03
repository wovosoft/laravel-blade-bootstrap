<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardHeader extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public ?string $content = null,
        public ?string   $variant = null
    )
    {
        $this->classes = [
            "card-header",
            "text-bg-" . $this->variant => !!$this->variant
        ];
    }


    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return <<<'blade'
<div {{$getAttributes()}}>{{$slot ?? $content}}</div>
blade;
    }
}
