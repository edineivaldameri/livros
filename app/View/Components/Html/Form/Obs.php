<?php

namespace App\View\Components\Html\Form;

use Illuminate\View\Component;
use Illuminate\View\View;

class Obs extends Component
{
    public function __construct(
        public string $message,
    )
    {
        //
    }

    public function render(): View
    {
        return view('components.html.form.obs');
    }
}
