<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public ?string $variant = "primary",
        public ?bool   $dismissible = false,
        public ?bool   $show = true
    )
    {
        $this->classes = [
            "alert",
            "alert-{$this->variant}" => !!$this->variant,
            "alert-dismissible" => !!$this->dismissible,
            "fade" => !!$this->dismissible,
            "show" => !!$this->show && !!$this->dismissible
        ];
    }

    public function boot()
    {
        $this->setAttributes([
            "role" => "alert"
        ]);
    }


    public function render(): View|string|\Closure
    {
        return view('components.alert');
    }
}
