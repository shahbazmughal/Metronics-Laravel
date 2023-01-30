<div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px quick-links" data-kt-menu="true" data-popper-placement="bottom-end">
	<div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url({{ image('misc/menu-header-bg.jpg')}})">
		<h3 class="text-white fw-bold"> Initial Setup Guide <i class="fas fa-exclamation-circle fs-7 text-light ms-3" data-bs-toggle="tooltip"
			data-bs-original-title="Complete the following basic steps to qualify for the first broadcast."></i>
		</h3>
	</div>
	<div class="scroll-y mh-350px m-0 p-3 initial-guide">
		<div class="m-0">
		  <div
			class="d-flex align-items-center justify-content-between collapsible py-3 toggle mb-0 text-link px-5 collapsed"
			data-bs-toggle="collapse"
			data-bs-target="#setup_1"
			aria-expanded="false"
		  >
			<h4
			  class="text-gray-700 fw-bold cursor-pointer mb-0 fs-5"
			>
			  1- Download Geoip Dependencies
			</h4>
			<div
			  class="btn btn-sm btn-icon mw-20px btn-active-color-primary"
			>
			  <span
				class="svg-icon toggle-on svg-icon-primary svg-icon-1"
			  >
				<i class="fa fa-angle-up fa-lg"></i>
			  </span>
			  <span class="svg-icon toggle-off svg-icon-1">
				<i class="fa fa-angle-down fa-lg"></i>
			  </span>
			</div>
		  </div>
		  <div id="setup_1" class="fs-6 ms-1 collapse">
			<div class="text-gray-600 fw-semibold fs-6 p-5">
			  Download geo IP location for fast development
			  <button
				type="button"
				class="btn btn-primary btn-sm mt-4 d-flex"
				id="download_dependencies"
			  >
				Geoip Dependencies
			  </button>
			  <div
				class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row w-100 p-5 mt-3"
				id="geoipDownloadFailed"
			  >
				<span
				  class="svg-icon svg-icon-danger me-4 alert-icon"
				></span>
				<div
				  class="d-flex align-items-center pe-0 fw-normal text-dark fs-7"
				>
				  <span>License Verification Failed</span>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="separator separator-dashed"></div>
		</div>
		<div class="m-0">
		  <div
			class="d-flex align-items-center justify-content-between collapsible py-3 toggle mb-0 text-link px-5 collapsed"
			data-bs-toggle="collapse"
			data-bs-target="#setup_2"
			aria-expanded="false"
		  >
			<h4
			  class="text-gray-700 fw-bold cursor-pointer mb-0 fs-5"
			>
			  2 -Add Sending Domain
			</h4>
			<div
			  class="btn btn-sm btn-icon mw-20px btn-active-color-primary"
			>
			  <span
				class="svg-icon toggle-on svg-icon-primary svg-icon-1"
			  >
				<i class="fa fa-angle-up fa-lg"></i>
			  </span>
			  <span class="svg-icon toggle-off svg-icon-1">
				<i class="fa fa-angle-down fa-lg"></i>
			  </span>
			</div>
		  </div>
		  <div id="setup_2" class="fs-6 ms-1 collapse">
			<div class="text-gray-600 fw-semibold fs-6 p-5">
			  Sending domain appears as the sender’s domain when
			  your recipients receive emails. E.g if a person
			  receives an email from joseph@letscommunicate.com,
			  the sending domain is letscommunicate.com.
			  <button
				type="button"
				class="btn btn-primary btn-sm mt-4 d-flex"
				id="opts1"
				onclick='window.location.href="/domain/add"'
			  >
				Add Sending Domain
			  </button>
			</div>
		  </div>
		  <div class="separator separator-dashed"></div>
		</div>
		<div class="m-0">
		  <div
			class="d-flex align-items-center justify-content-between collapsible py-3 toggle mb-0 text-link px-5 collapsed"
			data-bs-toggle="collapse"
			data-bs-target="#setup_3"
			aria-expanded="false"
		  >
			<h4
			  class="text-gray-700 fw-bold cursor-pointer mb-0 fs-5"
			>
			  3 - Add a Bounce Address
			</h4>
			<div
			  class="btn btn-sm btn-icon mw-20px btn-active-color-primary"
			>
			  <span
				class="svg-icon toggle-on svg-icon-primary svg-icon-1"
			  >
				<i class="fa fa-angle-up fa-lg"></i>
			  </span>
			  <span class="svg-icon toggle-off svg-icon-1">
				<i class="fa fa-angle-down fa-lg"></i>
			  </span>
			</div>
		  </div>
		  <div id="setup_3" class="fs-6 ms-1 collapse">
			<div class="text-gray-600 fw-semibold fs-6 p-5">
			  Bounce address is the mailbox where Mumara Site
			  sends delivery reports of the failed attempts.
			  <button
				type="button"
				class="btn btn-primary btn-sm mt-4 d-flex"
				id="opts2"
				onclick='window.location.href="/bounce/mailbox/add"'
			  >
				Add a Bounce Address
			  </button>
			</div>
		  </div>
		  <div class="separator separator-dashed"></div>
		</div>
		<div class="m-0">
		  <div
			class="d-flex align-items-center justify-content-between collapsible py-3 toggle mb-0 text-link px-5 collapsed"
			data-bs-toggle="collapse"
			data-bs-target="#setup_4"
			aria-expanded="false"
		  >
			<h4
			  class="text-gray-700 fw-bold cursor-pointer mb-0 fs-5"
			>
			  4 - Connect Sending Node
			</h4>
			<div
			  class="btn btn-sm btn-icon mw-20px btn-active-color-primary"
			>
			  <span
				class="svg-icon toggle-on svg-icon-primary svg-icon-1"
			  >
				<i class="fa fa-angle-up fa-lg"></i>
			  </span>
			  <span class="svg-icon toggle-off svg-icon-1">
				<i class="fa fa-angle-down fa-lg"></i>
			  </span>
			</div>
		  </div>
		  <div id="setup_4" class="fs-6 ms-1 collapse">
			<div class="text-gray-600 fw-semibold fs-6 p-5">
			  Sending Node is your email courier and technically
			  called an MTA. You can connect an SMTP or an ESP
			  account from the supported providers.
			  <button
				type="button"
				class="btn btn-primary btn-sm mt-4 d-flex"
				id="opts3"
				onclick='window.location.href="/node/list/view"'
			  >
				Connect Sending Node
			  </button>
			</div>
		  </div>
		  <div class="separator separator-dashed"></div>
		</div>
		<div class="m-0">
		  <div
			class="d-flex align-items-center justify-content-between collapsible py-3 toggle mb-0 text-link px-5 collapsed"
			data-bs-toggle="collapse"
			data-bs-target="#setup_5"
			aria-expanded="false"
		  >
			<h4
			  class="text-gray-700 fw-bold cursor-pointer mb-0 fs-5"
			>
			  5 - Add Contact List
			</h4>
			<div
			  class="btn btn-sm btn-icon mw-20px btn-active-color-primary"
			>
			  <span
				class="svg-icon toggle-on svg-icon-primary svg-icon-1"
			  >
				<i class="fa fa-angle-up fa-lg"></i>
			  </span>
			  <span class="svg-icon toggle-off svg-icon-1">
				<i class="fa fa-angle-down fa-lg"></i>
			  </span>
			</div>
		  </div>
		  <div id="setup_5" class="fs-6 ms-1 collapse">
			<div class="text-gray-600 fw-semibold fs-6 p-5">
			  Create a contact list that can store your
			  contacts/subscribers information.
			  <button
				type="button"
				class="btn btn-primary btn-sm mt-4 d-flex"
				id="opts4"
				onclick='window.location.href="/list/add"'
			  >
				Add Contact List
			  </button>
			</div>
		  </div>
		  <div class="separator separator-dashed"></div>
		</div>
		<div class="m-0">
		  <div
			class="d-flex align-items-center justify-content-between collapsible py-3 toggle mb-0 text-link px-5 collapsed"
			data-bs-toggle="collapse"
			data-bs-target="#setup_6"
			aria-expanded="false"
		  >
			<h4
			  class="text-gray-700 fw-bold cursor-pointer mb-0 fs-5"
			>
			  6 - Import Contacts
			</h4>
			<div
			  class="btn btn-sm btn-icon mw-20px btn-active-color-primary"
			>
			  <span
				class="svg-icon toggle-on svg-icon-primary svg-icon-1"
			  >
				<i class="fa fa-angle-up fa-lg"></i>
			  </span>
			  <span class="svg-icon toggle-off svg-icon-1">
				<i class="fa fa-angle-down fa-lg"></i>
			  </span>
			</div>
		  </div>
		  <div id="setup_6" class="fs-6 ms-1 collapse">
			<div class="text-gray-600 fw-semibold fs-6 p-5">
			  <span class="d-flex"
				>Add/Import your contacts whom you want to send
				your first broadcast.</span
			  >
			  <button
				type="button"
				class="btn btn-primary btn-sm mt-4"
				id="opts5"
				onclick='window.location.href="/contact/add"'
			  >
				Add a Contact
			  </button>
			  <button
				type="button"
				class="btn btn-primary btn-sm mt-4"
				id="opts55"
				onclick='window.location.href="/contacts/import"'
			  >
				Import Contacts
			  </button>
			</div>
		  </div>
		  <div class="separator separator-dashed"></div>
		</div>
		<div class="m-0">
		  <div
			class="d-flex align-items-center justify-content-between collapsible py-3 toggle mb-0 text-link px-5 collapsed"
			data-bs-toggle="collapse"
			data-bs-target="#setup_7"
			aria-expanded="false"
		  >
			<h4
			  class="text-gray-700 fw-bold cursor-pointer mb-0 fs-5"
			>
			  7 - Create Your First Broadcast
			</h4>
			<div
			  class="btn btn-sm btn-icon mw-20px btn-active-color-primary"
			>
			  <span
				class="svg-icon toggle-on svg-icon-primary svg-icon-1"
			  >
				<i class="fa fa-angle-up fa-lg"></i>
			  </span>
			  <span class="svg-icon toggle-off svg-icon-1">
				<i class="fa fa-angle-down fa-lg"></i>
			  </span>
			</div>
		  </div>
		  <div id="setup_7" class="fs-6 ms-1 collapse">
			<div class="text-gray-600 fw-semibold fs-6 p-5">
			  Add/Import your contacts whom you want to send
			  your first broadcast.
			  <button
				type="button"
				class="btn btn-primary btn-sm mt-4 d-flex"
				id="opts6"
				onclick='window.location.href="/broadcast/add"'
			  >
				Add New Broadcast
			  </button>
			</div>
		  </div>
		  <div class="separator separator-dashed"></div>
		</div>
		<div class="m-0">
		  <div
			class="d-flex align-items-center justify-content-between collapsible py-3 toggle mb-0 text-link px-5 collapsed"
			data-bs-toggle="collapse"
			data-bs-target="#setup_8"
			aria-expanded="false"
		  >
			<h4
			  class="text-gray-700 fw-bold cursor-pointer mb-0 fs-5"
			>
			  8 - Schedule Your First Broadcast
			</h4>
			<div
			  class="btn btn-sm btn-icon mw-20px btn-active-color-primary"
			>
			  <span
				class="svg-icon toggle-on svg-icon-primary svg-icon-1"
			  >
				<i class="fa fa-angle-up fa-lg"></i>
			  </span>
			  <span class="svg-icon toggle-off svg-icon-1">
				<i class="fa fa-angle-down fa-lg"></i>
			  </span>
			</div>
		  </div>
		  <div id="setup_8" class="fs-6 ms-1 collapse">
			<div class="text-gray-600 fw-semibold fs-6 p-5">
			  You’re doing excellent job so far. It’s the time
			  now to schedule a broadcast and see how does it
			  perform.
			  <button
				type="button"
				class="btn btn-primary btn-sm mt-4 d-flex"
				id="opts7"
				onclick='window.location.href="/schedule/new"'
			  >
				Schedule Broadcast
			  </button>
			</div>
		  </div>
		  <div class="separator separator-dashed"></div>
		</div>
	  </div>
  </div>