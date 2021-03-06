<?php

declare(strict_types=1);

namespace App\View\Components\Dashboard;

use App\Models\Book;
use Illuminate\View\Component;
use Illuminate\View\View;

class BookTable extends Component
{

    public function __construct(public Book $book)
    {
    }

    public function render(): View
    {
        return view('components.dashboard.book-table');
    }
}
