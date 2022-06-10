<!--begin::Title-->
<div class="d-flex flex-wrap align-items-center my-1">
    <h3 class="fw-bolder me-5 my-1">
        {{ __('Books') }}
    </h3>
    <!--begin::Search-->
    <form method="GET" class="d-flex align-items-center position-relative my-1">
        <span class="svg-icon svg-icon-3 position-absolute ms-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
            </svg>
        </span>
        <input type="text" value="{{ empty(request()->get('search')) ? '' : request()->get('search') }}" name="search" class="form-control form-control-sm border-body bg-body w-150px ps-10" placeholder="Filtrar Registro" />
        <button type="submit" class="ms-3 btn btn-sm btn-light-success">
            Filtrar
        </button>
    </form>
    <!--end::Search-->



</div>
<!--end::Title-->
<!--begin::Controls-->
<div class="d-flex flex-wrap my-1">
    <!--begin::Tab nav-->
    <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
        <li class="nav-item m-0">
            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active" data-bs-toggle="tab" href="#kt_book_pane_card">
                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </a>
        </li>
        <li class="nav-item m-0">
            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_book_pane_table">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </a>
        </li>
    </ul>
    <!--end::Tab nav-->
</div>
<!--end::Controls-->
