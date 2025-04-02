<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = 'info',
        public string $title = 'Mensaje de alerta',
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }

    public function lenguage($lan){
        return [
            'PHP',
            'JavaScript',
            'HTML',
            'CSS',
            'Java',
            $lan,
        ];
    }
}
