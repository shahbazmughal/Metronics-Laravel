<x-auth-layout>

    <div id="login"></div>
    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="/" action="login" style="display:none">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-11">
            <a href="/">
                <img src="{{ image('logos/logo.png') }}" class="h-50px mb-5" />
            </a>
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">
                Mumara Email Login
            </h1>
            <!--end::Title-->

            <!--begin::Subtitle-->
            <div class="text-gray-500 fw-semibold fs-6">
                Provide your login details to proceed.
            </div>
            <!--end::Subtitle--->
        </div>
        <!--begin::Heading-->

        <!--begin::Input group--->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" value=""/>
            <!--end::Email-->
        </div>

        <!--end::Input group--->
        <div class="fv-row mb-3">
            <!--begin::Password-->
            <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" value=""/>
            <!--end::Password-->
        </div>
        <!--end::Input group--->

        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>

            <!--begin::Link-->
            <a href="/forgot-password" class="link-success">
                Forgot Password ?
            </a>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                @include('partials/general/_button-indicator', ['label' => 'Sign In'])
            </button>
        </div>
        <!--end::Submit button-->

        <!--begin::Sign up-->
        <div class="text-gray-500 text-center fw-semibold fs-6">
            Not a Member yet?

            <a href="/register" class="link-success">
                Sign up
            </a>
        </div>
        <!--end::Sign up-->
    </form>

</x-auth-layout>
