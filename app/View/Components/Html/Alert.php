<?php

namespace App\View\Components\Html;

use Illuminate\View\Component;
use Illuminate\View\View;

use function view;

class Alert extends Component
{
    public function __construct(
        public string $type = '',
        public string $title = '',
        public string $message = '')
    {
    }

    public function render(): View
    {
        return view('components.html.alert');
    }
}
