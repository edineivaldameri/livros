<div class="card card-flush">
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                <!--begin::Head-->
                <thead class="fs-7 text-gray-400 text-uppercase">
                    <tr>
                        <th class="min-w-250px">
                            {{ __('Information') }}
                        </th>
                        <th class="min-w-150px">
                            {{ __('Registration') }}
                        </th>
                        <th class="min-w-90px">
                            {{ __('Pages') }}
                        </th>
                        <th class="min-w-50px text-end">
                            {{ __('Details') }}
                        </th>
                    </tr>
                </thead>
                <!--end::Head-->
                <!--begin::Body-->
                <tbody class="fs-6">
                    @foreach ($books as $book)
                        <x-dashboard.book-table :book="$book" />
                    @endforeach
                </tbody>
                <!--end::Body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Card body-->
</div>
