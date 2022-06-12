<?php

declare(strict_types=1);

namespace App\View\Components\Dashboard;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class PaneBooksTable extends Component
{

    public function __construct(public Collection $books)
    {
    }

    public function render(): View
    {
        return view('components.dashboaard.pane-books-table');
    }
}
