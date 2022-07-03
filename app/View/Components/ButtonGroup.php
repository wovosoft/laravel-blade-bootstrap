<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonGroup extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public ?string $size = null,
        public ?bool   $vertical = false
    )
    {
        $this->classes[] = $this->vertical ? "btn-group-vertical" : "btn-group";
    }

    public function boot()
    {
        $this->setAttributes([
            "role" => "group"
        ]);

        if ($this->size) {
            $this->setClasses([
                "btn-group-" . $this->size
            ]);
        }
    }

    public function render(): View|Factory|Htmlable|string|\Closure|Application
    {
        return view('components.button-group');
    }
}
