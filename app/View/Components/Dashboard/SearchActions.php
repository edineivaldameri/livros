<?php

declare(strict_types=1);

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;
use Illuminate\View\View;

class SearchActions extends Component
{
    public function __construct()
    {
    }

    public function render(): View
    {
        return view('components.dashboard.search-actions');
    }
}
