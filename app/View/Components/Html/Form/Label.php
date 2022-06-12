<?php

declare(strict_types=1);

namespace App\View\Components\Html\Form;

use Illuminate\View\Component;
use Illuminate\View\View;

class Label extends Component
{
    public function __construct(
        public null | string $label,
        public bool $required = false,
    )
    {
        //
    }

    public function render(): View
    {
        return view('components.html.form.label');
    }
}
