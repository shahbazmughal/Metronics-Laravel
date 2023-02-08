<div class="card card-flush mt-xl-9"> 
	<div class="card-header mt-5"> 
		<div class="card-title flex-row">
		<button class="btn btn-success me-1"><i class="fa fa-plus"></i> Add New</button>
		<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#test-connection">Test Connection</button> 
		</div>
		<div class="card-toolbar my-1"> 
		<div class="me-3">
			<button class="btn btn-primary me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
			Actions <i class="fa fa-angle-down"></i>
			</button>
			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">
			<div class="menu-item px-3">
				<a href="#" class="menu-link px-3 delete"><i class="fa fa-times aiw"></i> Delete</a>
			</div>
			</div>
		</div>
		<div class="d-flex align-items-center position-relative my-1"> 
			<span class="svg-icon svg-icon-3 position-absolute ms-3">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
			<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
			<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
			</svg>
			</span> 
			<input type="text" id="filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order">
		</div>
		</div>
	</div>
	<div class="card-body pt-0"> 
		<div id="subscribers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table id="subscribers_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder dataTable no-footer" aria-describedby="subscribers_table_info">
		<thead class="fs-7 text-gray-600 text-uppercase">
			<tr><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
				
				
				
			" style="width: 29.25px;">
				<label class="form-check form-check-inline form-check-solid">
				<input class="form-check-input checkbox-all-index" type="checkbox">
				</label>
			</th><th class="min-w-250px text-start sorting" tabindex="0" aria-controls="subscribers_table" rowspan="1" colspan="1" aria-label="Contact: activate to sort column ascending" style="width: 250px;">Contact</th><th class="min-w-150px text-start sorting sorting_desc" tabindex="0" aria-controls="subscribers_table" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" style="width: 150px;" aria-sort="descending">Country</th><th class="min-w-90px text-center sorting" tabindex="0" aria-controls="subscribers_table" rowspan="1" colspan="1" aria-label="List: activate to sort column ascending" style="width: 94.3125px;">List</th><th class="min-w-90px text-center sorting" tabindex="0" aria-controls="subscribers_table" rowspan="1" colspan="1" aria-label="Added on: activate to sort column ascending" style="width: 94.5781px;">Added on</th><th class="min-w-50px text-center sorting" tabindex="0" aria-controls="subscribers_table" rowspan="1" colspan="1" aria-label="Bounced: activate to sort column ascending" style="width: 74px;">Bounced</th><th class="min-w-50px text-center sorting" tabindex="0" aria-controls="subscribers_table" rowspan="1" colspan="1" aria-label="Unsubscribed: activate to sort column ascending" style="width: 93.4844px;">Unsubscribed</th><th class="min-w-50px text-center sorting" tabindex="0" aria-controls="subscribers_table" rowspan="1" colspan="1" aria-label="Confirmed: activate to sort column ascending" style="width: 72.6875px;">Confirmed</th><th class="min-w-50px text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 55.1875px;">Actions</th></tr>
		</thead>
		<tbody class="fs-6 fw-semibold text-gray-600">
			
			
			
			
			
		<tr class="odd">
			<td>
				<label class="form-check form-check-inline form-check-solid">
				<input class="form-check-input checkbox-index" type="checkbox">
				</label>
			</td>
			<td>
				<div class="d-flex align-items-center"> 
				<div class="me-5 position-relative"> 
					<div class="symbol symbol-35px symbol-circle"> <span class="symbol-label bg-success text-light fw-bold">S</span> </div>
				</div>
				<div class="d-flex flex-column justify-content-center"> <div class="text-gray-800 fs-5 fw-bold">Emma Smith</div>
					<div class="text-gray-400 fw-semibold d-block fs-6">smith@kpmg.com</div>
				</div>
				</div>
			</td>
			<td class="text-start sorting_1">
				<span>
				<img src="{{ image('flags/united-states.svg') }}" class="cc-image" alt="United State" width="20" height="20"> United State
				</span>
			</td>
			<td class="text-center">
				<a href="javascript:;">Mumara Leads</a>
			</td>
			<td class="">Jan 23, 2023 06:23:20 PM</td>
			<td class="text-center">
				<span class="text-danger fw-semibold fs-7">Hard Bounced</span>
			</td>
			<td class="text-center">
				<span class="badge badge-light-info fw-bolder px-4 py-3">Unsubscribed</span>
			</td>
			<td class="text-center">
				<span class="text-primary fw-semibold fs-7">Confirmed</span>
			</td>
			<td class="text-center"><div class="card-toolbar">
				<div class="card-toolbar"> 
				<button type="button" class="btn btn-sm btn-icon btn-light-primary btn-color-primary btn-active-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"> 
					<i class="fa fa-ellipsis fa-lg"></i>
				</button>
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-5" data-kt-menu="true"> 
					<div class="menu-item px-3 text-start"> <a href="jacascript:;" data-bs-toggle="modal" data-bs-target="#contact-details" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600">
					<span class="svg-icon svg-icon-2">
						<i class="fa fa-eye"></i>
					</span> Contact Details 
					</a> 
					</div>
					<div class="menu-item px-3 text-start"> <a href="#" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600"> 
					<span class="svg-icon svg-icon-3">
						<i class="fa fa-edit"></i>
					</span>Edit
					</a> 
					</div>
					<div class="menu-item px-3 text-start"> <a href="#" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600 delete"> 
					<span class="svg-icon svg-icon-3">
						<i class="fa fa-times"></i>
					</span>Delete
					</a> 
					</div>
				</div>
				</div>
			</div></td>
			</tr><tr class="even">
			<td>
				<label class="form-check form-check-inline form-check-solid">
				<input class="form-check-input checkbox-index" type="checkbox">
				</label>
			</td>
			<td>
				<div class="d-flex align-items-center"> 
				<div class="me-5 position-relative"> 
					<div class="symbol symbol-35px symbol-circle"> <span class="symbol-label bg-info text-light fw-bold">J</span> </div>
				</div>
				<div class="d-flex flex-column justify-content-center"> <div class="text-gray-800 fs-5 fw-bold">Jessie Clarcson</div>
					<div class="text-gray-400 fw-semibold d-block fs-6">jessie@gmail.com</div>
				</div>
				</div>
			</td>
			<td class="text-start sorting_1">
				<span>
				<img src="{{ image('flags/united-states.svg') }}" class="cc-image" alt="United State" width="20" height="20"> United State
				</span>
			</td>
			<td class="text-center">
				<a href="javascript:;">Subscribers</a>
			</td>
			<td class="">Jan 16, 2023 08:15:15 PM</td>
			<td class="text-center">
				No
			</td>
			<td class="text-center">
				No
			</td>
			<td class="text-center">
				No
			</td>
			<td class="text-center"><div class="card-toolbar">
				<div class="card-toolbar"> 
				<button type="button" class="btn btn-sm btn-icon btn-light-primary btn-color-primary btn-active-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"> 
					<i class="fa fa-ellipsis fa-lg"></i>
				</button>
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-5" data-kt-menu="true"> 
					<div class="menu-item px-3 text-start"> <a href="jacascript:;" data-bs-toggle="modal" data-bs-target="#contact-details" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600">
					<span class="svg-icon svg-icon-2">
						<i class="fa fa-eye"></i>
					</span> Contact Details 
					</a> 
					</div>
					<div class="menu-item px-3 text-start"> <a href="#" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600"> 
					<span class="svg-icon svg-icon-3">
						<i class="fa fa-edit"></i>
					</span>Edit
					</a> 
					</div>
					<div class="menu-item px-3 text-start"> <a href="#" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600 delete"> 
					<span class="svg-icon svg-icon-3">
						<i class="fa fa-times"></i>
					</span>Delete
					</a> 
					</div>
				</div>
				</div>
			</div></td>
			</tr><tr class="odd">
			<td>
				<label class="form-check form-check-inline form-check-solid">
				<input class="form-check-input checkbox-index" type="checkbox">
				</label>
			</td>
			<td>
				<div class="d-flex align-items-center"> 
				<div class="me-5 position-relative"> 
					<div class="symbol symbol-35px symbol-circle"> <span class="symbol-label bg-primary text-light fw-bold">M</span> </div>
				</div>
				<div class="d-flex flex-column justify-content-center"> <div class="text-gray-800 fs-5 fw-bold">Melody Macy</div>
					<div class="text-gray-400 fw-semibold d-block fs-6">melody@altbox.com</div>
				</div> 
				</div>
			</td>
			<td class="text-start sorting_1">
				<span>
				<img src="{{ image('flags/united-kingdom.svg') }}" class="cc-image" alt="United Kingdom" width="20" height="20"> United Kingdom
				</span>
			</td>
			<td class="text-center">
				<a href="javascript:;">Mumara Leads</a>
			</td>
			<td class="text-center">Jan 21, 2023 08:21:45 AM</td>
			<td class="text-center">
				<span class="text-warning fw-semibold fs-7">Soft Bounced</span>
			</td>
			<td class="text-center">
				No
			</td>
			<td class="text-center">
				No
			</td>
			<td class="text-center"><div class="card-toolbar">
				<div class="card-toolbar"> 
				<button type="button" class="btn btn-sm btn-icon btn-light-primary btn-color-primary btn-active-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"> 
					<i class="fa fa-ellipsis fa-lg"></i>
				</button>
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-5" data-kt-menu="true"> 
					<div class="menu-item px-3 text-start"> <a href="jacascript:;" data-bs-toggle="modal" data-bs-target="#contact-details" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600">
					<span class="svg-icon svg-icon-2">
						<i class="fa fa-eye"></i>
					</span> Contact Details 
					</a> 
					</div>
					<div class="menu-item px-3 text-start"> <a href="#" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600"> 
					<span class="svg-icon svg-icon-3">
						<i class="fa fa-edit"></i>
					</span>Edit
					</a> 
					</div>
					<div class="menu-item px-3 text-start"> <a href="#" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600 delete"> 
					<span class="svg-icon svg-icon-3">
						<i class="fa fa-times"></i>
					</span>Delete
					</a> 
					</div>
				</div>
				</div>
			</div></td>
			</tr><tr class="even">
			<td>
				<label class="form-check form-check-inline form-check-solid">
				<input class="form-check-input checkbox-index" type="checkbox">
				</label>
			</td>
			<td>
				<div class="d-flex align-items-center"> 
				<div class="me-5 position-relative"> 
					<div class="symbol symbol-35px symbol-circle"> <span class="symbol-label bg-warning text-light fw-bold">A</span> </div>
				</div>
				<div class="d-flex flex-column justify-content-center"> <div class="text-gray-800 fs-5 fw-bold">Ana Simmons</div>
					<div class="text-gray-400 fw-semibold d-block fs-6">anasim@gmail.com</div>
				</div>
				</div>
			</td>
			<td class="text-start sorting_1">
				<span>
				<img src="{{ image('flags/turkey.svg') }}" class="cc-image" alt="Turkey" width="20" height="20"> Turkey
				</span>
			</td>
			<td class="text-center">
				<a href="javascript:;">Subscribers</a>
			</td>
			<td class="">Jan 19, 2023 10:10:20 AM</td>
			<td class="text-center">
				No
			</td>
			<td class="text-center">
				No
			</td>
			<td class="text-center">
				No
			</td>
			<td class="text-center"><div class="card-toolbar">
				<div class="card-toolbar"> 
				<button type="button" class="btn btn-sm btn-icon btn-light-primary btn-color-primary btn-active-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"> 
					<i class="fa fa-ellipsis fa-lg"></i>
				</button>
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-5" data-kt-menu="true"> 
					<div class="menu-item px-3 text-start"> <a href="jacascript:;" data-bs-toggle="modal" data-bs-target="#contact-details" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600">
					<span class="svg-icon svg-icon-2">
						<i class="fa fa-eye"></i>
					</span> Contact Details 
					</a> 
					</div>
					<div class="menu-item px-3 text-start"> <a href="#" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600"> 
					<span class="svg-icon svg-icon-3">
						<i class="fa fa-edit"></i>
					</span>Edit
					</a> 
					</div>
					<div class="menu-item px-3 text-start"> <a href="#" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600 delete"> 
					<span class="svg-icon svg-icon-3">
						<i class="fa fa-times"></i>
					</span>Delete
					</a> 
					</div>
				</div>
				</div>
			</div></td>
			</tr><tr class="odd">
			<td>
				<label class="form-check form-check-inline form-check-solid">
				<input class="form-check-input checkbox-index" type="checkbox">
				</label>
			</td>
			<td>
				<div class="d-flex align-items-center"> 
				<div class="me-5 position-relative"> 
					<div class="symbol symbol-35px symbol-circle"> <span class="symbol-label bg-dark text-light fw-bold">W</span> </div>
				</div>
				<div class="d-flex flex-column justify-content-center"> <div class="text-gray-800 fs-5 fw-bold">Wasif Ahmad</div>
					<div class="text-gray-400 fw-semibold d-block fs-6">wasif@mumara.com</div>
				</div>
				</div>
			</td>
			<td class="text-start sorting_1">
				<span>
				<img src="{{ image('flags/pakistan.svg') }}" class="cc-image" alt="Pakistan" width="20" height="20"> Pakistan
				</span>
			</td>
			<td class="text-center">
				<a href="javascript:;">Mumara Family</a>
			</td>
			<td class="">Jan 12, 2023 12:12:12 AM</td>
			<td class="text-center">
				No
			</td>
			<td class="text-center">
				No
			</td>
			<td class="text-center">
				No
			</td>
			<td class="text-center"><div class="card-toolbar">
				<div class="card-toolbar"> 
				<button type="button" class="btn btn-sm btn-icon btn-light-primary btn-color-primary btn-active-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"> 
					<i class="fa fa-ellipsis fa-lg"></i>
				</button>
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-5" data-kt-menu="true"> 
					<div class="menu-item px-3 text-start"> <a href="jacascript:;" data-bs-toggle="modal" data-bs-target="#contact-details" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600">
					<span class="svg-icon svg-icon-2">
						<i class="fa fa-eye"></i>
					</span> Contact Details 
					</a> 
					</div>
					<div class="menu-item px-3 text-start"> <a href="#" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600"> 
					<span class="svg-icon svg-icon-3">
						<i class="fa fa-edit"></i>
					</span>Edit
					</a> 
					</div>
					<div class="menu-item px-3 text-start"> <a href="#" class="btn btn-active-color-primary menu-box fs-6 fw-semibold text-gray-600 delete"> 
					<span class="svg-icon svg-icon-3">
						<i class="fa fa-times"></i>
					</span>Delete
					</a> 
					</div>
				</div>
				</div>
			</div></td>
			</tr></tbody>
		</table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_length" id="subscribers_table_length"><label><select name="subscribers_table_length" aria-controls="subscribers_table" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div><div class="dataTables_info" id="subscribers_table_info" role="status" aria-live="polite">Showing 1 to 5 of 5 records</div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="subscribers_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="subscribers_table_previous"><a href="#" aria-controls="subscribers_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="subscribers_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="subscribers_table_next"><a href="#" aria-controls="subscribers_table" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
	</div>
</div>
