<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Facades\ApiWeatherFacade;
use App\Http\Requests\BookCreateRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BooksController extends Controller
{
    private $weather;
    public function __construct(
        protected BookRepository $repository,
        )
    {
        $this->weather = ApiWeatherFacade::json();
    }

    public function index(Request $request): View
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $books = $this->repository->orderBy('title', 'ASC')
            ->paginate(12);

        return view('dashboard.index', [
            'books' => $books,
            'weather' => $this->weather,
        ]);
    }

    public function create(Request $request): View
    {
        return view('books.create', [
            'weather' => $this->weather,
        ]);
    }

    public function store(BookCreateRequest $request): RedirectResponse
    {
        $book = $this->repository->create($request->all());

        return redirect()->route('books.index')->with('success', __('Book created.'));
    }

    public function show(Book $book): View
    {
        return view('books.show', [
            'book' => $book,
            'weather' => $this->weather,
        ]);
    }

    public function edit(Book $book): View
    {
        return view('books.edit', [
            'book' => $book,
            'weather' => $this->weather,
        ]);
    }

    public function update(BookUpdateRequest $request, Book $book): RedirectResponse
    {
        $book = $this->repository->update($request->all(), $book->id);

        return redirect()->route('books.index')->with('success', __('Book updated.'));
    }

    public function destroy(int $id): RedirectResponse
    {
        $deleted = $this->repository->delete($id);

        return redirect()->route('books.index')->with('success', __('Book deleted.'));
    }
}
