<x-auth-layout>
    <div class="d-flex flex-wrap flex-stack pb-7">
        <x-dashboard.search-actions />
    </div>
    <!--end::Toolbar-->
    <!--begin::Tab Content-->
    <div class="tab-content">
        <!--begin::Tab pane-->
        <div id="kt_book_pane_card" class="tab-pane fade show active">
            <x-dashboard.pane-books-card :books="$books" />
        </div>
        <!--end::Tab pane-->
        <!--begin::Tab pane-->
        <div id="kt_book_pane_table" class="tab-pane fade">
            <x-dashboard.pane-books-table :books="$books" />
        </div>
        <!--end::Tab pane-->
    </div>

    <div class="row mt-5">
        {{ $books->links() }}
    </div>

</x-auth-layout>
