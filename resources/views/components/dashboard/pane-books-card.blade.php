<div class="row g-6 g-xl-9">
    @foreach ($books as $book)
        <x-dashboard.book-card :book="$book" />
    @endforeach
</div>
