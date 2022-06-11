<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AuthLayout extends Component
{
    public function __construct(public $weather)
    {
    }

    public function render(): View
    {
        return view('layouts.auth');
    }
}
