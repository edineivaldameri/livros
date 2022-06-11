<x-auth-layout>
    <form method="POST" action="{{ route('login') }}" class="form w-100" novalidate="novalidate" id="kt_sign_in_form">
        @csrf
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">
                Seja Bem-Vindo
            </h1>

            @if (Route::has('register'))
                <div class="text-gray-400 fw-bold fs-4">
                    Novo por aqui?
                    <a href="{{ route('register') }}" class="link-primary fw-bolder">
                        Crie uma conta.
                    </a>
                </div>
            @endif
        </div>

        <div class="fv-row mb-10">
            <label class="form-label fs-6 fw-bolder text-dark required">
                {{ __('Email') }}
            </label>

            <input class="form-control form-control-lg form-control-solid {{ $errors->has('email') ? 'is-invalid' :'' }}" type="email" name="email" autocomplete="off"
                value="{{ old('email') }}" placeholder="email@email.com.br" required autofocus />

            @error('email')
                <div class="fv-plugins-message-container invalid-feedback">
                    <div data-field="email" data-validator="notEmpty">
                        {{ $message }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="fv-row mb-10">
            <div class="d-flex flex-stack mb-2">
                <label class="form-label fw-bolder text-dark fs-6 mb-0 required">
                    {{ __('Password') }}
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <input class="form-control form-control-lg form-control-solid {{ $errors->has('password') ? 'is-invalid' :'' }}" type="password" name="password" placeholder="********" autocomplete="off" required/>

            @error('password')
                <div class="fv-plugins-message-container invalid-feedback">
                    <div data-field="password" data-validator="notEmpty">
                        {{ $message }}
                    </div>
                </div>
            @enderror
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
            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">
                    {{ __('Log in') }}
                </span>
                <span class="indicator-progress">
                    Aguarde ...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
    </form>
</x-auth-layout>
