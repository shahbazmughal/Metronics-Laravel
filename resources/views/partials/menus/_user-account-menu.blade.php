<!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
	<!--begin::Menu item-->
	<div class="menu-item px-3">
		<div class="menu-content d-flex align-items-center px-3">
			<!--begin::Avatar-->
			<div class="symbol symbol-50px me-5">
				<img alt="Logo" src="{{ image('avatars') }}/{{ isset(Auth::user()->photo) ? Auth::user()->photo : 'blank.png'  }}" />
			</div>
			<!--end::Avatar-->
			<!--begin::Username-->
			<div class="d-flex flex-column">
				<div class="fw-bold d-flex align-items-center fs-5">{{ isset(Auth::user()->name) ? Auth::user()->name : ''  }}
				<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"></span></div>
				<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ isset(Auth::user()->email) ? Auth::user()->email : ''  }}</a>
			</div>
			<!--end::Username-->
		</div>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu separator-->
	<div class="separator my-2"></div>
	<!--end::Menu separator-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
		<a href="/" class="menu-link px-5 text-dark text-hover-primary fw-bold" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="View or update your profile information">
			<i class="fa fa-user-circle fs-5 me-3 text-dark text-hover-primary"></i> My Profile
		</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
		<a href="/" class="menu-link px-5 text-dark text-hover-primary fw-bold" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Check account security or change password">
			<i class="fa fa-shield-alt fs-5 me-3 text-dark text-hover-primary"></i> Security
		</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
		<a href="/" class="menu-link px-5 text-dark text-hover-primary fw-bold" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Learn about your current plan">
			<i class="fa fa-dollar-sign fs-5 me-3 text-dark text-hover-primary"></i> Subscription
		</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
		<a href="/" class="menu-link px-5 text-dark text-hover-primary fw-bold" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Go to your billing area">
			<i class="fa fa-file-invoice fs-5 me-3 text-dark text-hover-primary"></i> Billing
		</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
		<a href="/" class="menu-link px-5 text-dark text-hover-primary fw-bold" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Control the notifications that you want to receive">
			<i class="fa fa-envelope fs-5 me-3 text-dark text-hover-primary"></i> Preferences
		</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu separator-->
	<div class="separator my-2"></div>
	<!--end::Menu separator-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
		<a href="{{ route('logout') }}" class="menu-link px-5 text-dark text-hover-primary fw-bold" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			<i class="fa fa-power-off fs-5 me-3 text-dark text-hover-primary"></i> Logout
		</a>
	</div>
	<!--end::Menu item-->
</div>
<!--end::User account menu-->
