<?php

declare(strict_types=1);

namespace App\View\Components\Html\Form;

use Illuminate\View\Component;
use Illuminate\View\View;

class Error extends Component
{
    public function __construct(
        public string $message,
    )
    {
        //
    }

    public function render(): View
    {
        return view('components.html.form.error');
    }
}
