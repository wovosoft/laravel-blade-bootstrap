<?php

namespace App\View\Components;

use Illuminate\Support\Arr;
use Illuminate\View\ComponentAttributeBag;

trait WovoUiComponentsTrait
{
    private bool $init = false;
    public array $classes = [];

    private function setClasses(array|string|null $classes = null): ComponentAttributeBag
    {
        $this->attributes = $this->attributes->merge([
            "class" => Arr::toCssClasses($classes ?? $this->classes)
        ]);
        return $this->attributes;
    }

    private function setAttributes(array $attributes): ComponentAttributeBag
    {
        return $this->attributes = $this->attributes->merge($attributes);
    }

    public function getAttributes(): ComponentAttributeBag
    {
        /**
         * This method can be accessed many times inside component's view.
         * But, the method should do the same task multiple times, rather return the result after initiated.
         */
        if (!$this->init) {
            $this->init = true;
            if (method_exists($this, 'boot')) {
                $this->boot();
            }
            return $this->setClasses();
        }

        return $this->attributes;
    }
}
