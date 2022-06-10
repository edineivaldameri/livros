<div class="col-md-6 col-xxl-4">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body d-flex flex-center flex-column pt-12 p-9">
            <!--begin::Avatar-->
            <div class="symbol symbol-65px mb-5">
                <span class="symbol-label fs-2x fw-bold text-primary bg-light-primary">
                    {{ mb_strtoupper(substr($book->title, 0, 1)); }}
                </span>
            </div>
            <!--end::Avatar-->
            <!--begin::Name-->
            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">
                {{ $book->title }}
            </a>
            <!--end::Name-->
            <!--begin::Position-->
            <div class="fw-bold text-gray-400 mb-6">
                {{ substr($book->description, 0, 70) }}
            </div>
            <!--end::Position-->
            <!--begin::Info-->
            <div class="d-flex flex-center flex-wrap">
                <!--begin::Stats-->
                <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                    <div class="fs-6 fw-bolder text-gray-700">
                        {{ __('Author') }}
                    </div>
                    <div class="fw-bold text-gray-400">
                        {{ $book->author }}
                    </div>
                </div>
                <!--end::Stats-->
                <!--begin::Stats-->
                <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                    <div class="fs-6 fw-bolder text-gray-700">
                        {{ __('Pages') }}
                    </div>
                    <div class="fw-bold text-gray-400">
                        {{ $book->pages }}
                    </div>
                </div>
                <!--end::Stats-->
                <!--begin::Stats-->
                <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                    <div class="fs-6 fw-bolder text-gray-700">
                        {{ __('Registration') }}
                    </div>
                    <div class="fw-bold text-gray-400">
                        {{ $book->created_at->format('d/m/Y') }}
                    </div>
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
