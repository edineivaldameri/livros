<x-guest-layout>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url({{ asset('img/illustrations/14.png') }}">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="/" class="mb-12">
                    <img alt="Livraria Cultural" src="{{ asset('img/logo.png') }}" class="h-90px" />
                </a>
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form class="form w-100" novalidate="novalidate" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">
                                Bem-Vindo a Livraria Cultural
                            </h1>
                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">
                                {{ __('Email') }}
                            </label>
                            <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" required type="mail" name="email" autocomplete="off" />
                            @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">
                                    {{ __('Password') }}
                                </label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required type="password" name="password" autocomplete="off" />
                            @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" name="remember"/>
                                <span class="form-check-label fw-bold text-gray-700 fs-6">
                                    {{ __('Remember me') }}
                                </span>
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                {{ __('Log in') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
