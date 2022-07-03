<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonToolbar extends Component
{
    use WovoUiComponentsTrait;

    public function boot()
    {
        $this->setAttributes([
            "role" => "toolbar"
        ]);
        $this->setClasses([
            "btn-toolbar"
        ]);
    }

    public function render(): View|Factory|Htmlable|string|\Closure|Application
    {
        return view('components.button-toolbar');
    }
}
