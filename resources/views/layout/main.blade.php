<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
		<title>SIM INVENTARIS - Dashboard Admin</title>
		<meta charset="utf-8" />
		<meta name="description" content="Sistem Informasi Management" />
		<meta name="keywords" content="Sim inventaris" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<link rel="shortcut icon" href="" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		{{-- <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" /> --}}
		{{-- <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" /> --}}
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="aside-enabled">
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Aside Toolbarl-->
					<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
						<!--begin::Aside user-->
						<!--begin::User-->
						<div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
							<!--begin::Symbol-->
							<div class="symbol symbol-50px">
								<img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="" />
							</div>
							<!--end::Symbol-->
							<!--begin::Wrapper-->
							<div class="aside-user-info flex-row-fluid flex-wrap ms-5">
								<!--begin::Section-->
								<div class="d-flex">
									<!--begin::Info-->
									<div class="flex-grow-1 me-2">
										<!--begin::Username-->
										<a href="{{route('admin.dashboard')}}" class="text-white text-hover-primary fs-6 fw-bold">{{ Auth::user()->name }}</a>
										<!--end::Username-->
										<!--begin::Description-->
										<span class="text-gray-600 fw-semibold d-block fs-8 mb-1">{{ Auth::user()->email }}</span>
										<!--end::Description-->
										<!--begin::Label-->
										<div class="d-flex align-items-center text-success fs-9">
										<span class="bullet bullet-dot bg-success me-1"></span>{{ Auth::user()->role }}</div>
										<!--end::Label-->
									</div>
									<!--end::Info-->
									<!--begin::User menu-->
									<div class="me-n2">
										<!--begin::Action-->
										<a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
											<i class="ki-duotone ki-setting-2 text-muted fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</a>
										<!--begin::User account menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="{{asset('assets/media/avatars/300-1.jpg')}}" />
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}</div>
														<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
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
												<a href="../../demo8/dist/account/overview.html" class="menu-link px-5">My Profile</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../../demo8/dist/apps/projects/list.html" class="menu-link px-5">
													<span class="menu-text">My Projects</span>
													<span class="menu-badge">
														<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
													</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5 my-1">
												<a href="" class="menu-link px-5">Account Settings</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="" class="menu-link px-5">Sign Out</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::User account menu-->
										<!--end::Action-->
									</div>
									<!--end::User menu-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::User-->
						<!--begin::Aside search-->
						<div class="aside-search py-5">
							<!--begin::Search-->
							<div id="kt_header_search" class="header-search d-flex align-items-center w-100" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="false" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
								<!--begin::Tablet and mobile search toggle-->
								<div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
									<div class="d-flex">
										<i class="ki-duotone ki-magnifier fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Tablet and mobile search toggle-->
								<!--begin::Form-->
								<form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
									<!--begin::Hidden input(Added to disable form autocomplete)-->
									<input type="hidden" />
									<!--end::Hidden input-->
									<!--begin::Icon-->
									<i class="ki-duotone ki-magnifier fs-2 search-icon position-absolute top-50 translate-middle-y ms-4">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
									<!--end::Icon-->
									<!--begin::Input-->
									<input type="text" class="search-input form-control ps-13 fs-7 h-40px" name="search" value="" placeholder="Quick Search" data-kt-search-element="input" />
									<!--end::Input-->
									<!--begin::Spinner-->
									<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
										<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
									</span>
									<!--end::Spinner-->
									<!--begin::Reset-->
									<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
										<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Reset-->
								</form>
								<!--end::Form-->
								<!--begin::Menu-->
								<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
									<!--begin::Wrapper-->
									<div data-kt-search-element="wrapper">
										<!--begin::Recently viewed-->
										<div data-kt-search-element="results" class="d-none">
											<!--begin::Items-->
											<div class="scroll-y mh-200px mh-lg-350px">
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-6.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Karina Clark</span>
														<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-2.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Olivia Bold</span>
														<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-9.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Ana Clark</span>
														<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-14.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Nick Pitola</span>
														<span class="fs-7 fw-semibold text-muted">Art Director</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-11.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Edward Kulnic</span>
														<span class="fs-7 fw-semibold text-muted">System Administrator</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Company Rbranding</span>
														<span class="fs-7 fw-semibold text-muted">UI Design</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Company Re-branding</span>
														<span class="fs-7 fw-semibold text-muted">Web Development</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Business Analytics App</span>
														<span class="fs-7 fw-semibold text-muted">Administration</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
														<span class="fs-7 fw-semibold text-muted">Marketing</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Tower Group Website</span>
														<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-notepad fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
														<span class="fs-7 fw-semibold text-muted">#45670</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-frame fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
														<span class="fs-7 fw-semibold text-muted">#45690</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-message-text-2 fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
														<span class="fs-7 fw-semibold text-muted">#21090</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-profile-circle fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
														<span class="fs-7 fw-semibold text-muted">#34560</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Recently viewed-->
										<!--begin::Recently viewed-->
										<div class="" data-kt-search-element="main">
											<!--begin::Heading-->
											<div class="d-flex flex-stack fw-semibold mb-4">
												<!--begin::Label-->
												<span class="text-muted fs-6 me-2">Recently Searched:</span>
												<!--end::Label-->
												<!--begin::Toolbar-->
												<div class="d-flex" data-kt-search-element="toolbar">
													<!--begin::Preferences toggle-->
													<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
														<i class="ki-duotone ki-setting-2 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Preferences toggle-->
													<!--begin::Advanced search toggle-->
													<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
														<i class="ki-duotone ki-down fs-2"></i>
													</div>
													<!--end::Advanced search toggle-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Heading-->
											<!--begin::Items-->
											<div class="scroll-y mh-200px mh-lg-325px">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-laptop fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
														<span class="fs-7 text-muted fw-semibold">#45789</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-chart-simple fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
														<span class="fs-7 text-muted fw-semibold">#84050</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-chart fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
														<span class="fs-7 text-muted fw-semibold">#84250</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
														<span class="fs-7 text-muted fw-semibold">#67945</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-sms fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
														<span class="fs-7 text-muted fw-semibold">#84250</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-bank fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
														<span class="fs-7 text-muted fw-semibold">#45690</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
														<span class="fs-7 text-muted fw-semibold">#24005</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Recently viewed-->
										<!--begin::Empty-->
										<div data-kt-search-element="empty" class="text-center d-none">
											<!--begin::Icon-->
											<div class="pt-10 pb-10">
												<i class="ki-duotone ki-search-list fs-4x opacity-50">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</div>
											<!--end::Icon-->
											<!--begin::Message-->
											<div class="pb-15 fw-semibold">
												<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
												<div class="text-muted fs-7">Please try again with a different query</div>
											</div>
											<!--end::Message-->
										</div>
										<!--end::Empty-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Preferences-->
									<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
										<!--begin::Heading-->
										<h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<!--begin::Radio group-->
											<div class="nav-group nav-group-fluid">
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="users" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="orders" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="projects" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Radio group-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<!--begin::Radio group-->
											<div class="nav-group nav-group-fluid">
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="attachment" value="any" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Radio group-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
												<option value="next">Within the next</option>
												<option value="last">Within the last</option>
												<option value="between">Between</option>
												<option value="on">On</option>
											</select>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-8">
											<!--begin::Col-->
											<div class="col-6">
												<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-6">
												<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
													<option value="days">Days</option>
													<option value="weeks">Weeks</option>
													<option value="months">Months</option>
													<option value="years">Years</option>
												</select>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
											<a href="../../demo8/dist/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Preferences-->
									<!--begin::Preferences-->
									<form data-kt-search-element="preferences" class="pt-1 d-none">
										<!--begin::Heading-->
										<h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="pb-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
												<input class="form-check-input" type="checkbox" value="1" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
												<input class="form-check-input" type="checkbox" value="1" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end pt-7">
											<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
											<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Preferences-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Search-->
						</div>
						<!--end::Aside search-->
						<!--end::Aside user-->
					</div>
					<!--end::Aside Toolbarl-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y mx-3 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
							<!--begin::Menu-->
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard')}}">
										<span class="menu-icon">
											<i class="ki-duotone ki-element-11 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</span>
										<span class="menu-title">Dashboard</span>
									</a>
									<!--end:Menu link-->
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-element-11 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</span>
										<span class="menu-title">Data</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link {{ request()->routeIs('tanah.index') ? 'active' : '' }}" href="{{ route('barang.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Data Tanah </span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link {{ request()->routeIs('gedung.index') ? 'active' : '' }}" href="{{ route('barang.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Data Gedung</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link {{ request()->routeIs('ruangan.index') ? 'active' : '' }}" href="{{ route('barang.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Data Ruangan</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link {{ request()->routeIs('barang.index') ? 'active' : '' }}" href="{{ route('barang.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Data Barang</span>
											</a>
										</div>
									</div>
								</div>

								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-element-11 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</span>
										<span class="menu-title">Peminjaman</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link {{ request()->routeIs('peminjamanGedung.index') ? 'active' : '' }}" href="{{ route('peminjamanGedung.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Peminjaman Gedung</span>
											</a>
										</div>

										<div class="menu-item">
											<a class="menu-link {{ request()->routeIs('peminjamanRuangan.index') ? 'active' : '' }}" href="{{ route('peminjamanRuangan.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Peminjaman Ruangan</span>
											</a>
										</div>

										<div class="menu-item">
											<a class="menu-link {{ request()->routeIs('peminjamanBarang.index') ? 'active' : '' }}" href="{{ route('peminjamanBarang.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Peminjaman Barang</span>
											</a>
										</div>
									</div>
								</div>

								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-element-11 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</span>
										<span class="menu-title">Pengembalian</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link {{ request()->routeIs('peminjamanGedung.index') ? 'active' : '' }}" href="{{ route('peminjamanGedung.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Pengembalian Gedung</span>
											</a>
										</div>

										<div class="menu-item">
											<a class="menu-link {{ request()->routeIs('peminjamanGedung.index') ? 'active' : '' }}" href="{{ route('peminjamanGedung.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Pengembalian Ruangan</span>
											</a>
										</div>

										<div class="menu-item">
											<a class="menu-link {{ request()->routeIs('peminjamanGedung.index') ? 'active' : '' }}" href="{{ route('peminjamanGedung.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Pengembalian Barang</span>
											</a>
										</div>
									</div>
								</div>
								
                                <div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link {{ request()->routeIs('pengguna.index') ? 'active' : '' }}" href="{{ route('pengguna.index')}}">
										<span class="menu-icon">
											<i class="ki-duotone ki-address-book fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
										<span class="menu-title">Pengguna</span>
									</a>
									<!--end:Menu link-->
								</div>
								
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
					<!--begin::Footer-->
					<div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
						<form action="/logout" method="POST">
							@csrf
								{{-- <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</button> --}}
								<button type="submit" class="btn btn-flex btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="Log Out">
									<i class="fas fa-sign-out-alt"></i>
									<span class="btn-label">Logout</span>
								</button>
							</form>
						
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Brand-->
						<div class="header-brand">
							<!--begin::Logo-->
							<a href="{{route('admin.dashboard')}} " class="d-flex align-item-center justify-content-center">
								{{-- <img alt="Logo" src="" class="h-25px h-lg-25px" /> --}}
                                <h3 class="text-white text-center ms-3">
                                    SIM INVENTARIS
								</h3>
							</a>
							<!--end::Logo-->
							<!--begin::Aside minimize-->
							<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
								<i class="ki-duotone ki-entrance-right fs-1 me-n1 minimize-default">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<i class="ki-duotone ki-entrance-left fs-1 minimize-active">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Aside minimize-->
							<!--begin::Aside toggle-->
							<div class="d-flex align-items-center d-lg-none me-n2" title="Show aside menu">
								<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
									<i class="ki-duotone ki-abstract-14 fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
							</div>
							<!--end::Aside toggle-->
						</div>
						<!--end::Brand-->
						<!--begin::Toolbar-->
						<div class="toolbar d-flex align-items-stretch">
							<!--begin::Toolbar container-->
							<div class="container-xxl py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
								<!--begin::Page title-->
								<div class="page-title d-flex justify-content-center flex-column me-5">
									<!--begin::Title-->
									<h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Dashboard</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Dashboards</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">{{$title}}</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Action group-->
								<div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">
									
									<!--begin::Theme mode-->
									<div class="d-flex align-items-center">
										<!--begin::Menu toggle-->
										<a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-night-day theme-light-show fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
												<span class="path6"></span>
												<span class="path7"></span>
												<span class="path8"></span>
												<span class="path9"></span>
												<span class="path10"></span>
											</i>
											<i class="ki-duotone ki-moon theme-dark-show fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</a>
										<!--begin::Menu toggle-->
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-night-day fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
															<span class="path7"></span>
															<span class="path8"></span>
															<span class="path9"></span>
															<span class="path10"></span>
														</i>
													</span>
													<span class="menu-title">Light</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-moon fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Dark</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-screen fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
													<span class="menu-title">System</span>
												</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Theme mode-->
								</div>
								<!--end::Action group-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								@yield('content')
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">2023&copy;</span>
								<a href="{{route('admin.dashboard')}}" target="_blank" class="text-gray-800 text-hover-primary">SIM INVENTARIS</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a href="" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets/js/custom/datatable/data-table.js')}}"></script>
		<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>