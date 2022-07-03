<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    use WovoUiComponentsTrait;

    public string $tag = "button";

    public function __construct(
        /**
         * size= lg|sm|null
         */
        public ?string $size = null,
        public ?string $variant = "primary",
        public ?bool   $outline = false,
        public ?bool   $disabled = false,
        public ?string $type = "button",
        public ?bool   $isLink = false,
        public ?string $href = null,
        public ?bool   $active = false
    )
    {
        $this->classes = ["btn"];
        if ($this->isLink) {
            $this->tag = "a";
        }
    }

    private function boot()
    {
        $this->setClasses([
            "btn-" . ($this->outline ? 'outline-' : '') . $this->variant => $this->variant
        ]);
        if ($this->isLink) {
            $this->setAttributes([
                "role" => "button",
                "href" => $this->href ?? "#",
            ]);

            //link and disabled
            if ($this->disabled) {
                $this->setAttributes([
                    "disabled" => true,
                    "aria-disabled" => "true"
                ]);
                $this->setClasses([
                    "disabled"
                ]);
            }
        }

        if ($this->active) {
            $this->setClasses([
                "active"
            ]);
            $this->setAttributes([
                "aria-pressed" => "true",
                "data-bs-toggle" => "button"
            ]);
        }

        if ($this->size) {
            $this->setClasses([
                "btn-" . $this->size
            ]);
        }
    }

    public function render(): View|string|\Closure
    {
        return "components.button";
    }
}
