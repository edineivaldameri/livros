<?php

namespace App\View\Components\Dashboaard;

use Illuminate\View\Component;

class PaneBooksTable extends Component
{

    public $books;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($books)
    {
        $this->books = $books;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboaard.pane-books-table');
    }
}
