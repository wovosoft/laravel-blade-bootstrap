<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Container extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        /**
         * size= sm|md|lg|xl|xxl|fluid|null
         */
        public ?string $size = null
    )
    {

    }

    private function boot()
    {
        if ($this->size) {
            $this->classes = [
                "container-" . $this->size
            ];
        } else {
            $this->classes = ["container"];
        }
    }

    public function render(): View|string|\Closure
    {
        return "components.container";
    }
}
