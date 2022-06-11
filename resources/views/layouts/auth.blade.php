<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="{{ asset('css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    </head>
    <body id="kt_body" class="page-loading-enabled header-fixed header-tablet-and-mobile-fixed">
        <!--begin::loader-->
		<div class="page-loader">
			<span class="spinner-border text-primary" role="status">
				<span class="visually-hidden">{{ __('Loading') }}...</span>
			</span>
		</div>
		<!--end::Loader-->

        <!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                    @include('layouts.private._header')

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
                            <div id="kt_content_container" class="container-fluid">

                                @if ($message = Session::get('success'))
                                    <x-html.alert :type="'success'" :message="$message" />
                                @endif

                                @if ($message = Session::get('error'))
                                    <x-html.alert :type="'danger'" :message="$message" />
                                @endif

                                {{ $slot }}
                            </div>
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->

                    @include('layouts.private._footer')

				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->

        <script src="{{ asset('js/plugins.bundle.js') }}"></script>
		<script src="{{ asset('js/scripts.bundle.js') }}"></script>

        @yield('scripts')
    </body>
</html>
