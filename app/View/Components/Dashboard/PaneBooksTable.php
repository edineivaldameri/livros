<?php

declare(strict_types=1);

namespace App\View\Components\Dashboard;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;
use Illuminate\View\View;

class PaneBooksTable extends Component
{

    public function __construct(public LengthAwarePaginator $books)
    {
    }

    public function render(): View
    {
        return view('components.dashboard.pane-books-table');
    }
}
