<x-auth-layout>
    <form method="POST" action="{{ route('books.store') }}"  class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @csrf
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
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="required form-label">
                            {{ __('Title') }}:
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" name="title" id="title" value="{{ old('title') }}" required="required" class="form-control mb-2" placeholder="{{ __('Enter the Book Title') }}">
                        <!--end::Input-->
                        @error('title')
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="required form-label">
                            {{ __('Author') }}:
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" name="author" id="author" value="{{ old('author') }}" required="required" class="form-control mb-2" placeholder="{{ __('Enter the author\'s name') }}">
                        <!--end::Input-->
                        @error('author')
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="required form-label">
                            {{ __('Pages') }}
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="number" inputmode="numeric" required="required" value="{{ old('pages') }}" name="pages" id="pages" class="form-control mb-2" placeholder="{{ __('Enter the number of pages') }}">
                        <!--end::Input-->
                        @error('pages')
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div>
                        <!--begin::Label-->
                        <label class="form-label">
                            {{ __('Description') }}
                        </label>
                        <!--end::Label-->
                        <!--begin::Editor-->
                        <textarea id="description" name="description" class="tox-target">{{ old('description') }}</textarea>
                        <!--end::Editor-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">
                            {{ __('Set a description for the book to improve its visibility.') }}
                        </div>
                        <!--end::Description-->
                        @error('description')
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Input group-->
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
