<x-auth-layout :weather="$weather">
    <form method="POST" action="{{ route('books.update', $book->id) }}"  class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @csrf
        @method('PUT')
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin::General options-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>
                            {{ __('Register Book') }}
                        </h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <x-html.form.input :type="'text'" :name="'title'" :label="'Title'" :value="$book->title" :required="true" :placeholder="'Enter the Book Title'" />

                    <x-html.form.input :type="'text'" :name="'author'" :label="'Author'" :value="$book->author" :required="true" :placeholder="'Enter the author\'s name'" />

                    <x-html.form.input :type="'number'" :inputmode="'numeric'" :name="'pages'" :label="'Pages'" :value="$book->pages" :required="true" :placeholder="'Enter the number of pages'" :obs="'Informe o número de páginas que o livro possui'" />

                    <x-html.form.textarea :name="'description'" :label="'Description'" :value="$book->description" :required="true" :obs="'Set a description for the book to improve its visibility.'" />
                </div>
                <!--end::Card header-->
            </div>
            <!--end::General options-->
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="{{ url()->previous() }}" class="btn btn-light me-5">
                    {{ __('Cancel') }}
                </a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" class="btn btn-primary">
                    {{ __('Save') }}
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
        <div></div>
    </form>

    @section('scripts')
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            var options = {selector: "#description"};
            tinymce.init(options);
        </script>
    @endsection
</x-auth-layout>
