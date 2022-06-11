<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Facades\ApiWeatherFacade;
use App\Http\Requests\BookCreateRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Models\Book;
use App\Repositories\BookRepository;
use App\Validators\BookValidator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BooksController extends Controller
{
    public function __construct(
        protected BookRepository $repository,
        protected BookValidator $validator,
        )
    {
    }

    public function index(Request $request): View
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $books = $this->repository->orderBy('title', 'ASC')
            ->paginate(12);
            //dd(ApiWeatherFacade::json());
        return view('dashboard.index', [
            'books' => $books,
            'weather' => ApiWeatherFacade::json()
        ]);
    }

    public function create(Request $request): View
    {
        return view('books.create');
    }

    public function store(BookCreateRequest $request): RedirectResponse
    {
        $book = $this->repository->create($request->all());

        return redirect()->route('books.index')->with('success', __('Book created.'));
    }

    public function show(Book $book): View
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book): View
    {
        return view('books.edit', compact('book'));
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
