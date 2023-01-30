<div class="app-navbar flex-shrink-0">
    <div class="app-navbar-item ms-1 ms-lg-3">
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            {!! getSvgIcon('duotune/general/setup.svg', 'svg-icon svg-icon-1') !!}
        </div>
        @include('partials/menus/_setup-menu')
    </div>
    <div class="app-navbar-item ms-1 ms-lg-3">
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            {!! getSvgIcon('duotune/general/processes.svg', 'svg-icon svg-icon-1') !!}
        </div>
        @include('partials/menus/_processing-menu')
    </div>
    <div class="app-navbar-item ms-1 ms-lg-3">
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            {!! getSvgIcon('duotune/general/issues.svg', 'svg-icon svg-icon-1') !!}
        </div>
        @include('partials/menus/_issues-menu')
    </div>
    <div class="app-navbar-item ms-1 ms-lg-3">
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            {!! getSvgIcon('duotune/general/gen022.svg', 'svg-icon svg-icon-1') !!}
            <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
        </div>
        @include('partials/menus/_notifications-menu')
    </div>
    <div class="app-navbar-item ms-1 ms-lg-3">
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            {!! getSvgIcon('duotune/general/app.svg', 'svg-icon svg-icon-1') !!}
        </div>
        @include('partials/menus/_my-apps-menu')
    </div>
    <div class="app-navbar-item ms-1 ms-lg-3">
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            {!! getSvgIcon('duotune/general/gen025.svg', 'svg-icon svg-icon-1') !!}
        </div>
        @include('partials/menus/_quick-links-menu')
    </div>
    <div class="app-navbar-item ms-1 ms-lg-3">
        @include('partials/theme-mode/_main')
    </div>
    <div class="app-navbar-item ms-1 ms-lg-3">
    </div>
    <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
        <div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img src="{{ image('avatars') }}/{{ isset(Auth::user()->photo) ? Auth::user()->photo : 'blank.png'  }}" alt="user" />
        </div>
        @include('partials/menus/_user-account-menu')
    </div>
</div>
