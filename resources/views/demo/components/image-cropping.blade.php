<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="bootstrap material admin template">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Image Cropping | Porish Material Admin Template</title>
		<!-- Favicons -->
		<link rel="shortcut icon" href="../assets/favicon/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="../assets/favicon/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="../assets/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="../assets/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="../assets/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="../assets/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="../assets/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="../assets/favicon/apple-touch-icon-152x152.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon-180x180.png" />
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300%7CRaleway:400,300%7CRoboto:400,700,300%7CLato' rel='stylesheet' type='text/css' />
		<!-- Icon CSS -->
		<link rel="stylesheet" href="../assets/css/global/iconstyle.css" />
		<link rel="stylesheet" href="../assets/fonts/font-awasome/font-awesome.min.css" />
		<!-- Global plugin CSS -->
		<link rel="stylesheet" href="../assets/css/global/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/css/switchery/switchery.min.css" />
		<link rel="stylesheet" href="../assets/css/global/slidePanel.min.css" />
		<link rel="stylesheet" href="../assets/css/global/waves.min.css" />
		<link rel="stylesheet" href="../assets/plugin/bootstrap-tour/css/bootstrap-tour.css" />
		<!--  Global Template CSS -->
		<link rel="stylesheet" href="../assets/css/global/style.css" />
		<link id="site-color" rel="stylesheet" href="../assets/css/colors/default.css" />
		<link rel="stylesheet" href="../assets/css/global/responsive.css" />
		<link rel="stylesheet" href="../assets/css/global/site.min.css" />
		<!-- Page CSS -->
		<link rel="stylesheet" href="../assets/css/image-cropping/main.css">
		<link rel="stylesheet" href="../assets/css/image-cropping/cropper.min.css">
		<link rel="stylesheet" href="../assets/css/image-cropping/qunit.css">
	</head>
	<body class="dashboard site-navbar-small">
		<!-- Start Header Section -->
		<div class="main-header navbar navbar-default navbar-fixed-top navbar-inverse navbar-mega">
			<div class="navbar-header">
				<!--  Template Logo -->
				<a class="navbar-brand" href="../dashboard_v1.html">
				<img class="navbar-brand-logo navbar-brand-logo-normal" src="../assets/images/logo.png" title="Porish" alt="logo">
				</a>
			</div>
			<div class="navbar-container container-fluid">
				<div class="collapse navbar-collapse navbar-block navbar-collapse-toolbar" id="site-navbar-collapse">
					<!--  Menu -->
					<div class="utmenucontainer">
						<div class="overlapblackbg"></div>
						<a id="wsnavtoggle" class="animated-arrow"><span></span></a>
						<nav class="utmenu">
							<ul class="mobile-sub utmenu-list">
								<li>
									<div class="navbar-header mobile-res-logo">
										<a class="navbar-brand" href="javascript:void(0)">
										<img class="navbar-brand-logo navbar-brand-logo-normal" src="../assets/images/logo.png" title="Porish" alt="logo">
										</a>
									</div>
								</li>
								<li>
									<a class="waves-effect waves-light" href="javascript:void(0)"> <i class="layout-icon icon_archive_alt" aria-hidden="true"></i> Layouts <span class="arrow_carrot-down" aria-hidden="true"></span></a>
									<ul class="utmenu-submenu">
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Dashboard<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../dashboard_v1.html">Dashboard 1</a></li>
												<li><a class="waves-effect waves-light" href="../dashboard_v2.html">Dashboard 2</a></li>
												<li><a class="waves-effect waves-light" href="../dashboard_v3.html">Dashboard 3</a></li>
											</ul>
										</li>
										<li><a class="waves-effect waves-light" href="../layouts/grids.html">Grid System</a></li>
										<li><a class="waves-effect waves-light" href="../layouts/layout-grid.html">Layout Grids</a></li>
									</ul>
								</li>
								<li>
									<a class="waves-effect waves-light" href="javascript:void(0)"> <i class="layout-icon icon_document_alt" aria-hidden="true"></i> Features <span class="arrow_carrot-down" aria-hidden="true"></span></a>
									<ul class="utmenu-submenu">
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">General Pages<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../features/faq.html">FAQ</a></li>
												<li><a class="waves-effect waves-light" href="../features/userlist.html">User List</a></li>
												<li><a class="waves-effect waves-light" href="../features/Invoice.html">Invoice</a></li>
												<li><a class="waves-effect waves-light" href="../features/blank.html">Blank</a></li>
												<li><a class="waves-effect waves-light" href="../features/profile.html">Profile</a></li>
												<li><a class="waves-effect waves-light" href="../features/search.html">Search</a></li>
												<li><a class="waves-effect waves-light" href="../features/gallery.html">Gallery</a></li>
												<li><a class="waves-effect waves-light" href="../features/gallery-grid.html">Gallery Grid</a></li>
												<li><a class="waves-effect waves-light" href="../features/maintenance.html">Maintenance</a></li>
												<li><a class="waves-effect waves-light" href="../features/email.html">Email</a></li>
											</ul>
										</li>
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Error Pages<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../features/error-400.html">Error 400</a></li>
												<li><a class="waves-effect waves-light" href="../features/error-403.html">Error 403</a></li>
												<li><a class="waves-effect waves-light" href="../features/error-404.html">Error 404</a></li>
												<li><a class="waves-effect waves-light" href="../features/error-405.html">Error 405</a></li>
												<li><a class="waves-effect waves-light" href="../features/error-500.html">Error 500</a></li>
												<li><a class="waves-effect waves-light" href="../features/error-503.html">Error 503</a></li>
											</ul>
										</li>
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Maps<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../features/maps.html">Google Maps</a></li>
												<li><a class="waves-effect waves-light" href="../features/vector-map.html">Vector Map</a></li>
											</ul>
										</li>
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Login<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../features/login.html">Login Page 1</a></li>
												<li><a class="waves-effect waves-light" href="../features/login_v2.html">Login Page 2</a></li>
												<li><a class="waves-effect waves-light" href="../features/login_v3.html">Login Page 3</a></li>
											</ul>
										</li>
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Register<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../features/register.html">Register Page 1</a></li>
												<li><a class="waves-effect waves-light" href="../features/register_v2.html">Register Page 2</a></li>
												<li><a class="waves-effect waves-light" href="../features/register_v3.html">Register Page 3</a></li>
											</ul>
										</li>
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Forgot Password<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../features/forgot_password.html">Forgot Password 1</a></li>
												<li><a class="waves-effect waves-light" href="../features/forgot_password_v2.html">Forgot Password 2</a></li>
											</ul>
										</li>
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Lockscreen<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../features/lockscreen.html">Lockscreen 1</a></li>
												<li><a class="waves-effect waves-light" href="../features/lockscreen_v2.html">Lockscreen 2</a></li>
											</ul>
										</li>
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Apps<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../features/contacts.html">Contacts</a></li>
												<li><a class="waves-effect waves-light" href="../features/calendar.html">Calendar</a></li>
												<li><a class="waves-effect waves-light" href="../features/project.html">Project</a></li>
												<li><a class="waves-effect waves-light" href="../features/mailbox.html">Mailbox</a></li>
												<li><a class="waves-effect waves-light" href="../features/message.html">Message</a></li>
												<li><a class="waves-effect waves-light" href="../features/media.html">Media</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<span class="wsmenu-click"></span><a class="waves-effect waves-light" href="javascript:void(0)"> <i class="layout-icon icon_ribbon_alt" aria-hidden="true"></i> Components <span class="arrow_carrot-down" aria-hidden="true"></span></a>
									<ul class="utmenu-submenu">
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Basic UI<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li>
													<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Panel<span class="arrow_carrot-down" aria-hidden="true"></span></a>
													<ul class="utmenu-submenu-sub-sub">
														<li><a class="waves-effect waves-light" href="../components/panel-structure.html">Panel Structure</a></li>
														<li><a class="waves-effect waves-light" href="../components/panel-action.html">Panel Action</a></li>
														<li><a class="waves-effect waves-light" href="../components/panel-transition.html">Panel Transition</a></li>
													</ul>
												</li>
												<li><a class="waves-effect waves-light" href="../components/buttons.html">Buttons</a></li>
												<li><a class="waves-effect waves-light" href="../components/icons.html">Icons</a></li>
												<li><a class="waves-effect waves-light" href="../components/list.html">List</a></li>
												<li><a class="waves-effect waves-light" href="../components/dropdowns.html">Dropdowns</a></li>
												<li><a class="waves-effect waves-light" href="../components/image.html">Images</a></li>
												<li><a class="waves-effect waves-light" href="../components/modals.html">Modals</a></li>
												<li><a class="waves-effect waves-light" href="../components/scrollable.html">Scrollable</a></li>
												<li><a class="waves-effect waves-light" href="../components/typography.html">Typography</a></li>
												<li><a class="waves-effect waves-light" href="../components/utilities.html">Utilities</a></li>
												<li><a class="waves-effect waves-light" href="../components/colors.html">Colors</a></li>
												<li><a class="waves-effect waves-light" href="../components/carousel.html">Carousel</a></li>
												<li><a class="waves-effect waves-light" href="../components/tabs-accordions.html">Tabs & Accordions</a></li>
												<li><a class="waves-effect waves-light" href="../components/badges-labels.html">Badges & Labels</a></li>
												<li><a class="waves-effect waves-light" href="../components/tooltip-popover.html">Tooltip & Popover</a></li>
												<li><a class="waves-effect waves-light" href="../components/progress_bars.html">Progress Bars</a></li>
											</ul>
										</li>
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Advanced UI<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li id="demo" class="site-menu-item hidden-xs demo"><a class="waves-effect waves-light" href="javascript:void(0)">Tour</a></li>
												<li><a class="waves-effect waves-light" href="../components/animation.html">Animation</a></li>
												<li><a class="waves-effect waves-light" href="../components/highlight.html">Highlight</a></li>
												<li><a class="waves-effect waves-light" href="../components/alertify.html">Alertify</a></li>
												<li><a class="waves-effect waves-light" href="../components/masonry.html">Masonry</a></li>
												<li><a class="waves-effect waves-light" href="../components/rating.html">Rating</a></li>
												<li><a class="waves-effect waves-light" href="../components/context-menu.html">Context Menu</a></li>
												<li><a class="waves-effect waves-light" href="../components/sortable-nestable.html">Sortable & Nestable</a></li>
												<li><a class="waves-effect waves-light" href="../components/toastr.html">Toastr</a></li>
												<li><a class="waves-effect waves-light" href="../components/lightbox.html">Lightbox</a></li>
												<li><a class="waves-effect waves-light" href="../components/treeview.html">Treeview</a></li>
												<li><a class="waves-effect waves-light" href="../components/google_maps.html">Google Maps</a></li>
												<li><a class="waves-effect waves-light" href="../components/vector_maps.html">Vector Maps</a></li>
												<li><a class="waves-effect waves-light" href="../components/bootbox_sweetalert.html">Bootbox Sweetalert</a></li>
											</ul>
										</li>
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Elements<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../components/alerts.html">Alerts</a></li>
												<li><a class="waves-effect waves-light" href="../components/ribbon.html">Ribbon</a></li>
												<li><a class="waves-effect waves-light" href="../components/pricing-tables.html">Pricing Table</a></li>
												<li><a class="waves-effect waves-light" href="../components/overlay.html">Overlay</a></li>
												<li><a class="waves-effect waves-light" href="../components/step.html">Step</a></li>
												<li><a class="waves-effect waves-light" href="../components/cover.html">Cover</a></li>
												<li><a class="waves-effect waves-light" href="../components/timeline-simple.html">Simple Timeline</a></li>
												<li><a class="waves-effect waves-light" href="../components/timeline.html">Timeline</a></li>
												<li><a class="waves-effect waves-light" href="../components/testimonials.html">Testimonials</a></li>
												<li><a class="waves-effect waves-light" href="../components/blockquotes.html">Blockquotes</a></li>
												<li><a class="waves-effect waves-light" href="../components/breadcrumbs.html">Breadcrumbs</a></li>
												<li><a class="waves-effect waves-light" href="../components/comments.html">Comments</a></li>
												<li><a class="waves-effect waves-light" href="../components/media.html">Media</a></li>
												<li><a class="waves-effect waves-light" href="../components/chat.html">Chat</a></li>
												<li><a class="waves-effect waves-light" href="../components/nav.html">Nav</a></li>
												<li><a class="waves-effect waves-light" href="../components/navbars.html">Navbars</a></li>
												<li><a class="waves-effect waves-light" href="../components/pagination.html">Pagination</a></li>
												<li><a class="waves-effect waves-light" href="../components/headers.html">Different Headers</a></li>
											</ul>
										</li>
										<li>
											<a class="waves-effect waves-light" href="javascript:void(0)">Forms <span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../components/general.html">General Elements</a></li>
												<li><a class="waves-effect waves-light" href="../components/material-element.html">Material Elements</a></li>
												<li><a class="waves-effect waves-light" href="../components/layouts.html">Form Layouts</a></li>
												<li><a class="waves-effect waves-light" href="../components/validation.html">Form Validation</a></li>
												<li><a class="waves-effect waves-light" href="../components/masks.html">Form Masks</a></li>
												<li><a class="waves-effect waves-light" href="../components/form-advanced.html">Advanced Elements</a></li>
												<li><a class="waves-effect waves-light" href="../components/form-wizard.html">Form Wizard</a></li>
												<li>
													<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Editor<span class="arrow_carrot-down" aria-hidden="true"></span></a>
													<ul class="utmenu-submenu-sub-sub">
														<li><a class="waves-effect waves-light" href="../components/editor-ace.html">Ace Editor</a></li>
														<li><a class="waves-effect waves-light" href="../components/editor-markdown.html">Markdown</a></li>
														<li><a class="waves-effect waves-light" href="../components/editor-markdown-flav.html">Markdown Flav</a></li>
														<li><a class="waves-effect waves-light" href="../components/code-editor.html">Code Editor</a></li>
													</ul>
												</li>
												<li><a class="waves-effect waves-light" href="../components/Image-cropping.html">Image Cropping</a></li>
											</ul>
										</li>
										<li>
											<a class="waves-effect waves-light" href="javascript:void(0)">Tables <span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../components/basic.html">Basic Tables</a></li>
												<li><a class="waves-effect waves-light" href="../components/bootstrap.html">Bootstrap Tables</a></li>
												<li><a class="waves-effect waves-light" href="../components/floatthead.html">floatThead</a></li>
												<li><a class="waves-effect waves-light" href="../components/responsive.html">Responsive Tables</a></li>
												<li><a class="waves-effect waves-light" href="../components/editable.html">Editable Tables</a></li>
												<li><a class="waves-effect waves-light" href="../components/datatable.html">Datatable</a></li>
												<li><a class="waves-effect waves-light" href="../components/ajax_datatable.html">Ajax Datatable</a></li>
												<li><a class="waves-effect waves-light" href="../components/jsgrid.html">jsGrid</a></li>
												<li><a class="waves-effect waves-light" href="../components/footable.html">FooTable</a></li>
											</ul>
										</li>
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Charts<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../components/chart.html">Chart.js</a></li>
												<li><a class="waves-effect waves-light" href="../components/gauges.html">Gauges</a></li>
												<li><a class="waves-effect waves-light" href="../components/flot.html">Flot</a></li>
												<li><a class="waves-effect waves-light" href="../components/peitycharts.html">Peity Charts</a></li>
												<li><a class="waves-effect waves-light" href="../components/morrischarts.html">Morris Charts</a></li>
												<li><a class="waves-effect waves-light" href="../components/chartist.html">Chartist</a></li>
												<li><a class="waves-effect waves-light" href="../components/c3-chart.html">C3 Chart</a></li>
												<li><a class="waves-effect waves-light" href="../components/easypiechart.html">Easy Pie Chart</a></li>
												<li><a class="waves-effect waves-light" href="../components/echarts.html">EChart</a></li>
												<li><a class="waves-effect waves-light" href="../components/rickshaw.html">Rickshaw</a></li>
												<li><a class="waves-effect waves-light" href="../components/sparkline.html">Sparkline</a></li>
											</ul>
										</li>
										<li>
											<span class="wsmenu-click02"></span><a class="waves-effect waves-light" href="javascript:void(0)">Widgets<span class="arrow_carrot-down" aria-hidden="true"></span></a>
											<ul class="utmenu-submenu-sub">
												<li><a class="waves-effect waves-light" href="../components/static-widget.html">Static Widgets</a></li>
												<li><a class="waves-effect waves-light" href="../components/data-widget.html">Data Widgets</a></li>
												<li><a class="waves-effect waves-light" href="../components/blog-widget.html">Blog Widgets</a></li>
												<li><a class="waves-effect waves-light" href="../components/social-widget.html">Social Widgets</a></li>
												<li><a class="waves-effect waves-light" href="../components/chart-widget.html">Chart Widgets</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
					<ul class="nav navbar-nav navbar-toolbar">
						<!--  Mega Menu -->
						<li class="dropdown dropdown-fw dropdown-mega">
							<a href="javascript:void(0)" class="dropdown-toggle waves-effect waves-light" data-hover="dropdown" data-toggle="dropdown"><i class="layout-icon icon_genius" aria-hidden="true"></i><span class="mega-text">Extra Features </span><span class="arrow_carrot-down"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<div class="mega-menu-content">
										<div class="row">
											<div class="col-sm-12 col-md-3 col-lg-2 col-xs-12">
												<h5 class="mobile-megamenu waves-effect waves-light">Page Layouts <span class="icon_plus"></span> </h5>
												<ul class="list-menu">
													<li class="mega-menu">
														<a href="../features/userlist.html">
														<i class="arrow_triangle-right" aria-hidden="true"></i>
														User List
														</a>
													</li>
													<li>
														<a href="../features/Invoice.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Invoice</a>
													</li>
													<li>
														<a href="../features/profile.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Profile</a>
													</li>
													<li>
														<a href="../features/gallery.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Gallery</a>
													</li>
													<li>
														<a href="../features/gallery-grid.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Gallery grid</a>
													</li>
													<li>
														<a href="../features/email.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Email</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-12 col-md-3 col-lg-2 col-xs-12">
												<h5 class="mobile-megamenu waves-effect waves-light">Charts & Forms <span class="icon_plus"></span></h5>
												<ul class="list-menu">
													<li>
														<a href="../components/flot.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Flot</a>
													</li>
													<li>
														<a href="../components/chartist.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Chartist</a>
													</li>
													<li>
														<a href="../components/validation.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Form validation</a>
													</li>
													<li>
														<a href="../components/layouts.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Form layouts</a>
													</li>
													<li>
														<a href="../components/jsgrid.html"><i class="arrow_triangle-right" aria-hidden="true"></i>JsGrid</a>
													</li>
													<li>
														<a href="../components/footable.html"><i class="arrow_triangle-right" aria-hidden="true"></i>FooTable</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-4 col-xs-12">
												<h5 class="mobile-megamenu waves-effect waves-light mobile-margin">UI & Components <span class="icon_plus"></span></h5>
												<ul class="list-menu mega-item">
													<li class="mega-menu">
														<ul>
															<li>
																<a href="../components/animation.html">
																<i class="arrow_triangle-right" aria-hidden="true"></i>
																Animation
																</a>
															</li>
															<li>
																<a href="../components/buttons.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Buttons</a>
															</li>
															<li>
																<a href="../components/colors.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Colors</a>
															</li>
															<li>
																<a href="../components/dropdowns.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Dropdowns</a>
															</li>
															<li>
																<a href="../components/icons.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Icons</a>
															</li>
															<li>
																<a href="../components/lightbox.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Lightbox</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu">
														<ul>
															<li>
																<a href="../components/tooltip-popover.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Tooltip &amp; popover</a>
															</li>
															<li>
																<a href="../components/progress_bars.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Progress bars</a>
															</li>
															<li>
																<a href="../components/sortable-nestable.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Sortable nestable</a>
															</li>
															<li>
																<a href="../components/bootbox_sweetalert.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Bootbox &amp; sweetalert</a>
															</li>
															<li>
																<a href="../components/ribbon.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Ribbon</a>
															</li>
															<li>
																<a href="../components/pricing-tables.html"><i class="arrow_triangle-right" aria-hidden="true"></i>Pricing tables</a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<div class="col-sm-12 col-lg-4 col-xs-12 mobile-image-mega">
												<h5>Image</h5>
												<ul class="list-menu">
													<li class="mega-menu">
														<a href="javascript:void(0)">
														<img src="../assets/images/global/img_470x160.png" alt="features-img"/>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-toolbar navbar-right">
						<li id="search-icon">
							<!--  Toggle Search -->
							<a class="icon icon_search waves-effect waves-light" href="javascript:void(0)" role="button">
							<span class="sr-only">Toggle Search</span>
							</a>
						</li>
						<li class="dropdown">
							<!--  Profile Section -->
							<a class="navbar-avatar dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up" role="button">
							<span class="avatar avatar-online">
							<img src="../assets/images/global/img_240x265.png" alt="Profile Image">
							<i></i>
							</span>
							</a>
							<ul class="dropdown-menu position-absolute" role="menu">
								<li role="presentation">
									<a href="javascript:void(0)" role="menuitem"><i class="icon icon_profile" aria-hidden="true"></i> Profile</a>
								</li>
								<li role="presentation">
									<a href="javascript:void(0)" role="menuitem"><i class="icon icon_balance" aria-hidden="true"></i> Billing</a>
								</li>
								<li role="presentation">
									<a href="javascript:void(0)" role="menuitem"><i class="icon icon_cog" aria-hidden="true"></i> Settings</a>
								</li>
								<li class="divider" role="presentation"></li>
								<li role="presentation">
									<a href="javascript:void(0)" role="menuitem"><i class="icon icon_lock_alt" aria-hidden="true"></i> Logout</a>
								</li>
							</ul>
						</li>
						<li id="toggleFullscreen">
							<!--  Full Screen -->
							<a class="icon icon-fullscreen waves-effect waves-light" id="toggle" data-toggle="fullscreen" href="javascript:void(0)" role="button">
							<i aria-hidden="true" class="arrow_expand"></i>
							</a>
						</li>
						<li class="dropdown">
							<!--  Notification Box -->
							<a class="waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0)" title="Notifications" data-animation="scale-up" role="button">
							<i class="icon icon_document_alt" aria-hidden="true"></i>
							<span class="badge badge-danger up">5</span>
							</a>
							<ul class="dropdown-menu dropdown-menu-right dropdown-menu-media position-absolute" role="menu">
								<li class="dropdown-menu-header" role="presentation">
									<h5>NEW UPDATES
										<a class="dropdown-menu-noti-btn" href="javascript:void(0)" role="button">
										<i class="icon icon_cog" aria-hidden="true"></i>
										</a>
									</h5>
									<span class="label label-round label-danger">New 5</span>
								</li>
								<li class="list-group hover-item" role="presentation">
									<div data-role="container">
										<div data-role="content">
											<a class="list-group-item" href="javascript:void(0)" role="menuitem">
												<div class="media">
													<div class="media-left padding-right-10">
														<i class="icon icon_documents_alt bg-red white icon-circle" aria-hidden="true"></i>
													</div>
													<div class="media-body">
														<h6 class="media-heading">New tasks needs to be done</h6>
														<time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 min ago</time>
													</div>
													<div class="media-right">
														<div class="btn-group">
															<span class="btn btn-info btn-sm waves-effect waves-dark"><i class="icon_check"></i></span>
															<span class="btn btn-default btn-sm waves-effect waves-dark">
															<i class="icon_cog"></i>
															</span>
														</div>
													</div>
												</div>
											</a>
											<a class="list-group-item" href="javascript:void(0)" role="menuitem">
												<div class="media">
													<div class="media-left padding-right-10">
														<i class="icon icon_gift_alt bg-green white icon-circle" aria-hidden="true"></i>
													</div>
													<div class="media-body">
														<h6 class="media-heading">New feature added</h6>
														<time class="media-meta" datetime="2015-06-11T18:29:20+08:00">1 hours ago</time>
													</div>
													<div class="media-right">
														<div class="btn-group">
															<span class="btn btn-info btn-sm waves-effect waves-dark">
															<i class="icon_check"></i>
															</span>
															<span class="btn btn-default btn-sm waves-effect waves-dark">
															<i class="icon_pencil"></i>
															</span>
														</div>
													</div>
												</div>
											</a>
											<a class="list-group-item" href="javascript:void(0)" role="menuitem">
												<div class="media">
													<div class="media-left padding-right-10">
														<i class="icon  icon_adjust-vert bg-red white icon-circle" aria-hidden="true"></i>
													</div>
													<div class="media-body">
														<h6 class="media-heading">Change your password</h6>
														<time class="media-meta" datetime="2015-06-11T14:05:00+08:00">2 days ago</time>
													</div>
													<div class="media-right">
														<div class="btn-group">
															<span class="btn btn-info btn-sm waves-effect waves-dark">
															<i class="icon_check"></i>
															</span>
															<span class="btn btn-default btn-sm waves-effect waves-dark">
															<i class="icon_key_alt"></i>
															</span>
														</div>
													</div>
												</div>
											</a>
											<a class="list-group-item" href="javascript:void(0)" role="menuitem">
												<div class="media">
													<div class="media-left padding-right-10">
														<i class="icon icon_calendar bg-blue white icon-circle" aria-hidden="true"></i>
													</div>
													<div class="media-body">
														<h6 class="media-heading">New Product order</h6>
														<time class="media-meta" datetime="2015-06-10T13:50:18+08:00">3 days ago</time>
													</div>
													<div class="media-right">
														<div class="btn-group">
															<span class="btn btn-info btn-sm waves-effect waves-dark">
															<i class="icon_check"></i>
															</span>
															<span class="btn btn-default btn-sm waves-effect waves-dark">
															<i class="icon_cart_alt"></i>
															</span>
														</div>
													</div>
												</div>
											</a>
											<a class="list-group-item" href="javascript:void(0)" role="menuitem">
												<div class="media">
													<div class="media-left padding-right-10">
														<i class="icon icon_comment bg-orange white icon-circle" aria-hidden="true"></i>
													</div>
													<div class="media-body">
														<h6 class="media-heading">New User review</h6>
														<time class="media-meta" datetime="2015-06-10T12:34:48+08:00">3 days ago</time>
													</div>
													<div class="media-right">
														<div class="btn-group">
															<span class="btn btn-info btn-sm waves-effect waves-dark">
															<i class="icon_check"></i>
															</span>
															<span class="btn btn-default btn-sm waves-effect waves-dark">
															<i class="icon_cog"></i>
															</span>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li class="dropdown-menu-footer" role="presentation">
									<a href="javascript:void(0)" role="menuitem">
									All notifications
									</a>
								</li>
							</ul>
						</li>
						<li id="chatbox">
							<!--  Chat Box -->
							<a class="waves-effect waves-light" data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="../include/site-sidebar.tpl">
							<i class="icon icon_comment_alt" aria-hidden="true"></i>
							</a>
						</li>
						<li class="dropdown">
							<!-- Flag Box -->
							<a class="icon flag-avtar dropdown-toggle waves-effect waves-light" data-animation="scale-up" data-toggle="dropdown" href="javascript:void(0)" role="button">
							<span aria-hidden="true" class="flag-icon flag-icon-background flag-icon-us"></span>
							</a>
							<ul class="dropdown-menu position-absolute language-box" role="menu">
								<li class="active" role="presentation">
									<a class="waves-effect waves-light" href="javascript:void(0)" role="menuitem"><span aria-hidden="true" class="icon flag-icon flag-icon-background flag-icon-us"></span><span class="flag-country" data-country='us'>US</span></a>
								</li>
								<li role="presentation">
									<a class="waves-effect waves-light" href="javascript:void(0)" role="menuitem"><span aria-hidden="true" class="icon flag-icon flag-icon-background flag-icon-au"></span><span class="flag-country" data-country='au'>AU</span></a>
								</li>
								<li role="presentation">
									<a class="waves-effect waves-light" href="javascript:void(0)" role="menuitem"><span aria-hidden="true" class="icon flag-icon flag-icon-background flag-icon-in"></span><span class="flag-country" data-country='in'>IN</span></a>
								</li>
								<li role="presentation">
									<a class="waves-effect waves-light" href="javascript:void(0)" role="menuitem"><span aria-hidden="true" class="icon flag-icon flag-icon-background flag-icon-pt"></span><span class="flag-country" data-country='pt'>PT</span></a>
								</li>
								<li role="presentation">
									<a class="waves-effect waves-light" href="javascript:void(0)" role="menuitem"><span aria-hidden="true" class="icon flag-icon flag-icon-background flag-icon-de"></span><span class="flag-country" data-country='de'>DE</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="navbar-search-overlap" id="site-navbar-search">
					<form role="search">
						<div class="form-group">
							<!--  Search Box -->
							<div class="input-search">
								<i class="input-search-icon icon_search" aria-hidden="true"></i>
								<input type="text" class="form-control" name="site-search" placeholder="Search...">
								<button type="button" class="input-search-close icon icon_close" aria-label="Close"></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- End Header Section -->
		<!-- Start Contain Section -->
		<div class="main-content">
			<div class="page-header">
				<div class="header-left-panel">
					<!-- Title Page -->
					<h1 class="page-title">Image cropping</h1>
					<!-- Breadcrumb Section -->
					<ol class="breadcrumb">
						<li><a href="../index.html">Home</a></li>
						<li class="text-info">Forms</li>
						<li class="active">Image cropping</li>
					</ol>
				</div>
			</div>
			<div class="page-content">
				<div class="panel">
					<!-- Start Visible Labels -->
					<div class="panel-heading">
						<h3 class="panel-title">Visible labels</h3>
					</div>
					<div class="panel-body container-fluid">
						<div class="row margin-bottom-10">
							<div class="col-md-8 col-sm-12">
								<div class="img-container">
									<img id="image" src="../assets/images/media/img_720x480.jpg" alt="Picture">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="docs-preview clearfix">
									<div class="img-preview preview-lg"></div>
									<div class="img-preview preview-md"></div>
									<div class="img-preview preview-sm"></div>
									<div class="img-preview preview-xs"></div>
								</div>
								<div class="docs-data">
									<div class="input-group input-group-sm">
										<label class="input-group-addon" for="dataX">X</label>
										<input type="text" class="form-control" id="dataX" placeholder="x">
										<span class="input-group-addon">px</span>
									</div>
									<div class="input-group input-group-sm">
										<label class="input-group-addon" for="dataY">Y</label>
										<input type="text" class="form-control" id="dataY" placeholder="y">
										<span class="input-group-addon">px</span>
									</div>
									<div class="input-group input-group-sm">
										<label class="input-group-addon" for="dataWidth">Width</label>
										<input type="text" class="form-control" id="dataWidth" placeholder="width">
										<span class="input-group-addon">px</span>
									</div>
									<div class="input-group input-group-sm">
										<label class="input-group-addon" for="dataHeight">Height</label>
										<input type="text" class="form-control" id="dataHeight" placeholder="height">
										<span class="input-group-addon">px</span>
									</div>
									<div class="input-group input-group-sm">
										<label class="input-group-addon" for="dataRotate">Rotate</label>
										<input type="text" class="form-control" id="dataRotate" placeholder="rotate">
										<span class="input-group-addon">deg</span>
									</div>
									<div class="input-group input-group-sm">
										<label class="input-group-addon" for="dataScaleX">ScaleX</label>
										<input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
									</div>
									<div class="input-group input-group-sm">
										<label class="input-group-addon" for="dataScaleY">ScaleY</label>
										<input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-9 col-sm-12 docs-buttons">
								<div class="btn-group">
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="setDragMode" data-option="move" title="Move">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;setDragMode&quot;, &quot;move&quot;">
									<span class="fa fa-arrows"></span>
									</span>
									</button>
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="setDragMode" data-option="crop" title="Crop">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;setDragMode&quot;, &quot;crop&quot;">
									<span class="fa fa-crop"></span>
									</span>
									</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="zoom" data-option="0.1" title="Zoom In">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;zoom&quot;, 0.1">
									<span class="fa fa-search-plus"></span>
									</span>
									</button>
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="zoom" data-option="-0.1" title="Zoom Out">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;zoom&quot;, -0.1">
									<span class="fa fa-search-minus"></span>
									</span>
									</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;move&quot;, -10, 0">
									<span class="fa fa-arrow-left"></span>
									</span>
									</button>
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="move" data-option="10" data-second-option="0" title="Move Right">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;move&quot;, 10, 0">
									<span class="fa fa-arrow-right"></span>
									</span>
									</button>
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;move&quot;, 0, -10">
									<span class="fa fa-arrow-up"></span>
									</span>
									</button>
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="move" data-option="0" data-second-option="10" title="Move Down">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;move&quot;, 0, 10">
									<span class="fa fa-arrow-down"></span>
									</span>
									</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="rotate" data-option="-45" title="Rotate Left">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;rotate&quot;, -45">
									<span class="fa fa-rotate-left"></span>
									</span>
									</button>
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="rotate" data-option="45" title="Rotate Right">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;rotate&quot;, 45">
									<span class="fa fa-rotate-right"></span>
									</span>
									</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="scaleX" data-option="-1" title="Flip Horizontal">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;scaleX&quot;, -1">
									<span class="fa fa-arrows-h"></span>
									</span>
									</button>
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="scaleY" data-option="-1" title="Flip Vertical">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;scaleY&quot;-1">
									<span class="fa fa-arrows-v"></span>
									</span>
									</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="crop" title="Crop">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;crop&quot;">
									<span class="fa fa-check"></span>
									</span>
									</button>
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="clear" title="Clear">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;clear&quot;">
									<span class="fa fa-remove"></span>
									</span>
									</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="disable" title="Disable">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;disable&quot;">
									<span class="fa fa-lock"></span>
									</span>
									</button>
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="enable" title="Enable">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;enable&quot;">
									<span class="fa fa-unlock"></span>
									</span>
									</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="reset" title="Reset">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;reset&quot;">
									<span class="fa fa-refresh"></span>
									</span>
									</button>
									<label class="btn btn-info btn-upload" for="inputImage" title="Upload image file">
									<input type="file" class="sr-only waves-effect waves-light" id="inputImage" name="file" accept="image/*">
									<span class="docs-tooltip" data-toggle="tooltip" title="Import image">
									<span class="fa fa-upload"></span>
									</span>
									</label>
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="destroy" title="Destroy">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;destroy&quot;">
									<span class="fa fa-power-off"></span>
									</span>
									</button>
								</div>
								<div class="btn-group btn-group-crop">
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="getCroppedCanvas">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;getCroppedCanvas&quot;">
									Save Image
									</span>
									</button>
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;getCroppedCanvas&quot;, { width: 160, height: 90 }">
									160&times;90
									</span>
									</button>
									<button type="button" class="btn btn-info waves-effect waves-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
									<span class="docs-tooltip" data-toggle="tooltip" title="&quot;getCroppedCanvas&quot;, { width: 320, height: 180 }">
									320&times;180
									</span>
									</button>
								</div>
								<!-- Show the cropped image in modal -->
								<div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
											</div>
											<div class="modal-body"></div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
												<a class="btn btn-info waves-effect waves-light" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /.modal -->
								<input type="text" class="form-control" id="putData" placeholder="Get data to here or set data with this value">
							</div>
							<div class="col-md-3 col-sm-12 docs-toggles">
								<!-- <h3 class="page-header">Toggles:</h3> -->
								<div class="btn-group btn-group-justified" data-toggle="buttons">
									<label class="btn btn-info active waves-effect waves-light">
									<input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
									<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
									16:9
									</span>
									</label>
									<label class="btn btn-info waves-effect waves-light">
									<input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
									<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
									4:3
									</span>
									</label>
									<label class="btn btn-info waves-effect waves-light">
									<input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
									<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
									1:1
									</span>
									</label>
									<label class="btn btn-info waves-effect waves-light">
									<input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
									<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
									2:3
									</span>
									</label>
									<label class="btn btn-info waves-effect waves-light">
									<input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
									<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
									Free
									</span>
									</label>
								</div>
								<div class="btn-group btn-group-justified" data-toggle="buttons">
									<label class="btn btn-info active waves-effect waves-light">
									<input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
									<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
									VM0
									</span>
									</label>
									<label class="btn btn-info waves-effect waves-light">
									<input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
									<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
									VM1
									</span>
									</label>
									<label class="btn btn-info waves-effect waves-light">
									<input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
									<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
									VM2
									</span>
									</label>
									<label class="btn btn-info waves-effect waves-light">
									<input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
									<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
									VM3
									</span>
									</label>
								</div>
								<div class="dropdown dropup docs-options">
									<button type="button" class="btn btn-info btn-block dropdown-toggle waves-effect waves-light" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
									Toggle Options
									<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="responsive" checked>
											responsive
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="restore" checked>
											restore
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="checkCrossOrigin" checked>
											checkCrossOrigin
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="checkOrientation" checked>
											checkOrientation
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="modal" checked>
											modal
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="guides" checked>
											guides
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="center" checked>
											center
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="highlight" checked>
											highlight
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="background" checked>
											background
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="autoCrop" checked>
											autoCrop
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="movable" checked>
											movable
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="rotatable" checked>
											rotatable
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="scalable" checked>
											scalable
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="zoomable" checked>
											zoomable
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="zoomOnTouch" checked>
											zoomOnTouch
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="zoomOnWheel" checked>
											zoomOnWheel
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="cropBoxMovable" checked>
											cropBoxMovable
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="cropBoxResizable" checked>
											cropBoxResizable
											</label>
										</li>
										<li role="presentation">
											<label class="checkbox-inline">
											<input type="checkbox" name="toggleDragModeOnDblclick" checked>
											toggleDragModeOnDblclick
											</label>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- End Visible Labels -->
				</div>
				<div class="panel margin-bottom-0">
					<!-- Start Basic cropping -->
					<div class="panel-heading">
						<h3 class="panel-title">Basic Cropping</h3>
					</div>
					<div class="panel-body container-fluid">
						<div class="row margin-bottom-10">
							<div class="col-md-8 col-sm-12">
								<div class="img-container">
									<img id="image2" src="../assets/images/media/img_720x480.jpg" alt="Picture">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="docs-preview clearfix">
									<div class="img-preview2 preview-lg"></div>
									<div class="img-preview2 preview-md"></div>
									<div class="img-preview2 preview-sm"></div>
									<div class="img-preview2 preview-xs"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Basic cropping -->
				</div>
			</div>
		</div>
		<!-- End Contain Section -->
		<!-- Start Footer Section -->
		<footer class="main-footer">
			<div class="footer-copyright">
				© 2016 <a href="../dashboard_v1.html">Porish</a>
			</div>
			<div class="footer-right-text">
				All Rights Reserved.
			</div>
		</footer>
		<!--  Start Site Right Setting Section -->
		<div class="right-side-setting">
			<div class="icon-setting">
				<div class="icon-mainten icon-in-setting"><span class="icon_cog hi-icon" aria-hidden="true"></span></div>
			</div>
			<div class="color-change-setting">
				<!--  Color Section -->
				<h3 class="title-color">Colors</h3>
				<div class="border-setting"></div>
				<div class="color-section">
					<div class="both-color site_color_default active_color" data-site-color="cyan">
						<div class="first-color bg-cyan-900"> </div>
					</div>
					<div class="both-color" data-site-color="default">
						<div class="first-color bg-info"> </div>
					</div>
					<div class="both-color" data-site-color="deep-orange">
						<div class="first-color bg-deep-orange-900"> </div>
					</div>
					<div class="both-color" data-site-color="orange">
						<div class="first-color bg-orange-700"> </div>
					</div>
					<div class="both-color" data-site-color="dark-green">
						<div class="first-color bg-color-dark-green"> </div>
					</div>
					<div class="both-color" data-site-color="dark-cyan">
						<div class="first-color bg-cyan-800"> </div>
					</div>
					<div class="both-color" data-site-color="pink">
						<div class="first-color bg-pink-700"> </div>
					</div>
					<div class="both-color" data-site-color="gray">
						<div class="first-color bg-grey-500"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
				<!--  Fonts Section -->
				<h3 class="title-color margin-top-30">Fonts</h3>
				<div class="border-setting"></div>
				<div class="fonts-section">
					<div class="both-font site_font_default active_font" data-site-font="">
						<div class="first-font"></div>
					</div>
					<label>Dafault</label>
					<div class="clearfix"></div>
					<div class="both-font" data-site-font="fonts1">
						<div class="first-font"></div>
					</div>
					<label>Lato / Raleway</label>
					<div class="clearfix"></div>
					<div class="both-font" data-site-font="fonts2">
						<div class="first-font"></div>
					</div>
					<label>Source Sans Pro</label>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<h3 class="title-color margin-top-30">Templates</h3>
				<div class="border-setting"></div>
				<div class="darkcolor-section">
					<div class="both-dark active_color" data-dark-color="">
						<div class="first-dark color-light">Light</div>
					</div>
					<div class="both-dark" data-dark-color="gray">
						<div class="first-dark gray">Gray</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<!--  Texture Section -->
				<h3 class="title-color margin-top-30">Background Image</h3>
				<div class="border-setting"></div>
				<div class="texture-section margin-top-30 texture-click">
					<input type="checkbox" id="rtl-checkbox" class="js-switch-small checkbox-texture" data-plugin="switchery" data-size="small"/>
					<label>Texture Background</label>
				</div>
				<div class="image-section">
					<div class="both-image default_texture active_texture" data-image-bg="texture2">
						<div class="first-image bg-texture2"> </div>
					</div>
					<div class="both-image" data-image-bg="texture9">
						<div class="first-image bg-texture9"> </div>
					</div>
					<div class="both-image" data-image-bg="texture1">
						<div class="first-image bg-texture1"> </div>
					</div>
					<div class="both-image" data-image-bg="texture8">
						<div class="first-image bg-texture8"> </div>
					</div>
					<div class="both-image" data-image-bg="texture10">
						<div class="first-image bg-texture10"> </div>
					</div>
					<div class="both-image icon-black" data-image-bg="texture11">
						<div class="first-image bg-texture11"> </div>
					</div>
					<div class="both-image icon-black" data-image-bg="texture5">
						<div class="first-image bg-texture5"> </div>
					</div>
					<div class="both-image icon-black" data-image-bg="texture4">
						<div class="first-image bg-texture4"> </div>
					</div>
					<div class="both-image icon-black" data-image-bg="texture7">
						<div class="first-image bg-texture7"> </div>
					</div>
					<div class="both-image icon-black" data-image-bg="texture6">
						<div class="first-image bg-texture6"> </div>
					</div>
				</div>
			</div>
		</div>
		<!--  End Site Right Setting Section -->        <!-- End Footer Section -->
		<!-- Global Plugin JavaScript -->
		<script src="../assets/js/global/jquery.min.js"></script>
		<script src="../assets/js/global/bootstrap.min.js"></script>
		<script src="../assets/plugin/bootstrap-tour/js/bootstrap-tour.js"></script>
		<script src="../assets/js/global/waves.min.js"></script>
		<script src="../assets/js/switchery/jQuery.switchery.min.js"></script>
		<script src="../assets/js/full-screen-page/screenfull.min.js"></script>
		<script src="../assets/js/home-page/jquery-slidePanel.min.js"></script>
		<script src="../assets/js/home-page/sidebar.min.js"></script>
		<!-- Global Template JavaScript -->
		<script src="../assets/js/global/site.min.js"></script>
		<script src="../assets/js/sitesettings/site-settings.js"></script>
		<script src="../assets/js/custom/custom-side-menu.js"></script>
		<!-- Page Plugin JavaScript -->
		<script src="../assets/js/image-cropping/main.js"></script>
		<script src="../assets/js/image-cropping/cropper.min.js"></script>
		<script src="../assets/js/image-cropping/qunit.js"></script>
	</body>
</html>
