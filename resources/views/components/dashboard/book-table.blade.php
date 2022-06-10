<tr>
    <td>
        <!--begin::User-->
        <div class="d-flex align-items-center">
            <!--begin::Info-->
            <div class="d-flex flex-column justify-content-center">
                <span class="mb-1 text-gray-800">
                    {{ $book->title }}
                </span>
                <span class="fw-bold fs-6 text-gray-400">
                    {{ $book->author }}
                </span>
            </div>
            <!--end::Info-->
        </div>
        <!--end::User-->
    </td>
    <td>
        {{ $book->created_at->format('d/m/Y') }}
    </td>
    <td>
        <span class="badge badge-light-primary fw-bolder px-4 py-3">
            {{ $book->pages }}
        </span>
    </td>
    <td class="text-end">
        <a href="#" class="btn btn-light btn-sm">
            {{ __("View") }}
        </a>
    </td>
</tr>
