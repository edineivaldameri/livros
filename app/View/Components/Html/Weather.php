<?php

declare(strict_types=1);

namespace App\View\Components\Html;

use Illuminate\View\Component;
use Illuminate\View\View;

class Weather extends Component
{
    public function __construct(public array $weather)
    {
    }

    public function render(): View
    {
        return view('components.html.weather');
    }
}
