<!--begin::Toolbar wrapper-->
<div class="d-flex align-items-stretch flex-shrink-0">
    <div class="d-flex align-items-center ms-1 ms-lg-3">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            @if(isNight())
                <i class="bi bi-moon-stars-fill fs-2"></i>
            @else
                <i class="bi bi-sun-fill fs-2"></i>
            @endif
        </div>
        <!--begin::Menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column w-300px w-lg-300px" data-kt-menu="true" style="z-index: 105; position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-229px, 65px);" data-popper-placement="bottom-end">
            <div class="container-weather">
                <div class="weather-side">
                    <div class="weather-gradient"></div>
                    <div class="date-container">
                        <h2 class="date-dayname">
                            <i class="bi bi-geo-alt fs-2" data-feather="map-pin"></i>
                            {{ $weather['city'] }}
                        </h2>
                        <span class="date-day">
                            {{ $weather['date'] }} - {{ $weather['time'] }}
                        </span>
                    </div>
                    <div class="weather-container">
                        <h1 class="weather-temp">
                            {{ $weather['temp'] }}°C
                        </h1>
                        <h3 class="weather-desc">
                            {{ $weather['description'] }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Menu-->
        <!--end::Menu wrapper-->
    </div>

    <!--begin::User menu-->
    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <div class="symbol-label fs-2 fw-bold bg-primary text-inverse-primary">
                {{ mb_strtoupper(substr(auth()->user()->name, 0, 1)); }}
            </div>
        </div>

        <!--begin::User account menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5 mb-10">
                        <div class="symbol-label fs-2 fw-bold bg-primary text-inverse-primary">
                            {{ mb_strtoupper(substr(auth()->user()->name, 0, 1)); }}
                        </div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Username-->
                    <div class="d-flex flex-column">
                        <div class="fw-bolder d-flex align-items-center fs-5">
                            {{ auth()->user()->name }}
                        </div>
                        <span class="fw-bold text-muted fs-7">
                            {{ auth()->user()->email }}
                        </span>
                    </div>
                    <!--end::Username-->
                </div>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <form method="POST" id="logout" action="{{ route('logout') }}" class="menu-item px-5">
                    @csrf
                    <a onclick="document.getElementById('logout').submit();" type="submit" class="menu-link px-5">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::User account menu-->

        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
    <!--begin::Header menu toggle-->
    <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
            <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
            <span class="svg-icon svg-icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
                    <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
    </div>
    <!--end::Header menu toggle-->
</div>
<!--end::Toolbar wrapper-->