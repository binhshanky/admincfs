<?php
	require_once __DIR__."/server/admin.php";

	require_once __DIR__."/server/csdl.connect.php";
	$csdl = new csdl;
	$conn = $csdl->ConnectCSDL();
	$csdl->getConfig();
	$result = $conn->query("SELECT * FROM `cfs` WHERE `type`='cfs' ORDER BY `id` DESC LIMIT 100");
	$conn->close();
?>
<!DOCTYPE html>

<html lang="vi">
 
	<head>

	
		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Quản lí Gia Định's Confession</title>
		<meta name="description" content="Trang quản lí Confession THPT Gia Định">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700","Noto Sans JP:400,500"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link  href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link  href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		

		<!--begin::Global Theme Styles(used by all pages) -->
		<link  href="assets/css/demo4/style.bundle.css?ver=4" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<link  href="assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link  href="assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link  href="assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link  href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon"  href="assets/media/logos/logo.png" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body style="background-image: url(./assets/media/demos/demo4/header.jpg); background-position: center top; background-size: 100% 350px;" class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

		<!-- begin::Page loader -->

		<!-- end::Page Loader -->

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="./">
					<img alt="Logo" src="assets/media/logos/logo.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
						<div class="kt-container ">

							<!-- begin:: Brand -->
							<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
								<a class="kt-header__brand-logo" href="/">
									<img alt="Logo" src="assets/media/logos/logo.png" class="kt-header__brand-logo-default" />
								</a>
							</div>

							<!-- end:: Brand -->

							<? require_once "server/menu/header.php"; ?>

							<!-- begin:: Header Topbar -->
							<div class="kt-header__topbar kt-grid__item">

								


								<!--begin: User bar -->
								<? require_once __DIR__."/server/menu/userbar.php";?>
								<!--end: User bar -->
							</div>

							<!-- end:: Header Topbar -->
						</div>
					</div>

					<!-- end:: Header -->
					<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
						<div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

							<!-- begin:: Subheader -->
							<div class="kt-subheader   kt-grid__item" id="kt_subheader">
								<div class="kt-container ">
									<div class="kt-subheader__main">
										<h3 class="kt-subheader__title">Trang chủ</h3>
										<div class="kt-subheader__breadcrumbs">
											<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
											<span class="kt-subheader__breadcrumbs-separator"></span>
											<a href="" class="kt-subheader__breadcrumbs-link">
												Quản lí </a>
											<span class="kt-subheader__breadcrumbs-separator"></span>
											<a href="" class="kt-subheader__breadcrumbs-link">
												Trang chủ </a>
										</div>
									</div>
									<div class="kt-subheader__toolbar">
										<div class="kt-subheader__wrapper">
											<a id="duyetcfs" class="btn kt-subheader__btn-secondary">
												Chỉnh sửa và đăng Confession
											</a>
											
										</div>
									</div>
								</div>
							</div>

							<!-- end:: Subheader -->

							<!-- begin:: Content -->
							<div class="kt-container  kt-grid__item kt-grid__item--fluid">

								<!--Begin::Dashboard 4-->


								<!--Begin::Row-->
								<div class="row">
									<div class="col-xl-12 col-lg-12 order-lg-12 order-xl-12">

										<!--begin:: Widgets/Sale Reports-->
										<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
											<div class="kt-portlet__head">
												<div class="kt-portlet__head-label">
													<h3 class="kt-portlet__head-title">
														Confession
													</h3>
												</div>
												<div class="kt-portlet__head-toolbar">
													<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
																Gần đây
															</a>
														</li>
														
													</ul>
												</div>
											</div>
											<div class="kt-portlet__body">

												<!--Begin::Tab Content-->
												<div class="tab-content">

													<!--begin::tab 1 content-->
													<div class="tab-pane active" id="kt_widget11_tab1_content">

														<!--begin::Widget 11-->
														<div class="kt-widget11">
															<div class="table-responsive">
																<table class="table">
																	<thead>
																		<tr>
																			<td style="width:5%"></td>
																			<td style="width:10%">Ngày gửi</td>
																			<td style="width:65%">Nội dung</td>
																			<td style="width:10%">IP</td>
																			<td style="width:10%">Thao tác</td>
																		</tr>
																	</thead>
																	<tbody>
																		
																	<? while ($cfs = $result->fetch_assoc()){ ?>
																		
																		<tr>
																			<td>
																				<label class="kt-checkbox kt-checkbox--single">
																					<input type="checkbox" class="xacnhan" data-id="<? echo $cfs['id']; ?>"><span class="tick"></span>
																				</label>
																			</td>
																			<td><? echo $cfs['date']; ?></td>
																			<td style="text-align:justify;"><? echo nl2br(base64_decode($cfs['cfs'])); ?></td>
																			<td class="kt-font-brand kt-font-bold kt-align-center"><? echo $cfs['ip']; ?></td>
																			<td class="kt-align-center"><button type="button" class="btn btn-danger btn-elevate ">Xóa</button></td>
																		</tr>
																		<? }?>
																		
																	</tbody>
																</table>
															</div>
															<!-- <div class="kt-widget11__action kt-align-right">
																<button type="button" class="btn btn-label-brand btn-bold btn-sm">Duyệt Confession</button>
															</div> -->
														</div>

														<!--end::Widget 11-->
													</div>

													<!--end::tab 1 content-->

												</div>

												<!--End::Tab Content-->
											</div>
										</div>

										<!--end:: Widgets/Sale Reports-->
									</div>
									
								</div>

								<!--End::Row-->

							

								<!--End::Dashboard 4-->
							</div>

							<!-- end:: Content -->
						</div>
					</div>

					<!-- begin:: Footer -->
					<div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer" style="background-image: url('./assets/media/bg/bg-2.jpg');">
						<div class="kt-footer__top">
							<div class="kt-container ">
								<div class="row">
									<div class="col-lg-4">
										<div class="kt-footer__section">
											<h3 class="kt-footer__title">Giới thiệu</h3>
											<div class="kt-footer__content">
												Code by Thanh Bình
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->


		<!--ENd:: Chat-->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#366cf3",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		
		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="assets/js/demo4/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->
		<script src="assets/js/duyet.js" type="text/javascript"></script>


	</body>

	<!-- end::Body -->
</html>