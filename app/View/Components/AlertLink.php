<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlertLink extends Component
{
    use WovoUiComponentsTrait;

    public function __construct(
        public ?string $href = "#"
    )
    {
        $this->classes = [
            "alert-link"
        ];
    }

    public function boot()
    {
        $this->setAttributes([
            "href" => $this->href
        ]);
    }

    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.alert-link');
    }
}
