<!--begin::Header-->
<div id="kt_header" style="" class="header align-items-stretch">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Aside mobile toggle-->
        <!--end::Aside mobile toggle-->
        <!--begin::Logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
            <a href="{{ route('dashboard') }}">
                <img alt="Logo" src="{{ asset('img/logo.png') }}" class="h-20px h-lg-30px" />
            </a>
        </div>
        <!--end::Logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                @include('layouts.private._menu')
            </div>
            <!--end::Navbar-->
            @include('layouts.private._topbar')
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
