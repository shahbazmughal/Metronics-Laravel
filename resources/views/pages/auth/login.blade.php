<x-auth-layout>

    <div id="login"></div>
    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form d-none" data-kt-redirect-url="/" action="login" style="display:none">
        @csrf
        <div class="text-center mb-11">
            <a href="/">
                <img src="{{ image('logos/logo.png') }}" class="h-50px mb-5" />
            </a>
            <h1 class="text-dark fw-bolder mb-3">
                Mumara Email Login
            </h1>
            <div class="text-gray-500 fw-semibold fs-6">
                Provide your login details to proceed.
            </div>
        </div>
        <div class="fv-row mb-8">
            <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" value=""/>
        </div>
        <div class="fv-row mb-3">
            <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" value=""/>
        </div>
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>

            <a href="/forgot-password" class="link-success">
                Forgot Password ?
            </a>
        </div>
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                @include('partials/general/_button-indicator', ['label' => 'Sign In'])
            </button>
        </div>
        <div class="text-gray-500 text-center fw-semibold fs-6">
            Not a Member yet?

            <a href="/register" class="link-success">
                Sign up
            </a>
        </div>
    </form>

</x-auth-layout>
