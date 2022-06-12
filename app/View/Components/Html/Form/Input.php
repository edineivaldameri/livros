<?php

declare(strict_types=1);

namespace App\View\Components\Html\Form;

use Illuminate\View\Component;
use Illuminate\View\View;

class Input extends Component
{
    public function __construct(
        public string $type = 'text',
        public string $name,
        public mixed $value = null,
        public null | string $label,
        public null | string $placeholder = null,
        public bool $required = false,
        public null | string $inputmode = null,
        public null | string $obs = null,
    )
    {
        if ($inputmode == null && $type === 'number' )
            $inputmode = 'numeric';
    }

    public function render(): View
    {
        return view('components.html.form.input');
    }
}
