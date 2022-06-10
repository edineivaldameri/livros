<?php

namespace App\View\Components\Dashboaard;

use App\Models\Book;
use Illuminate\View\Component;

class BookTable extends Component
{

     /**
     * The book will be shown
     *
     * @var Book
     */
    public $book;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboaard.book-table');
    }
}
