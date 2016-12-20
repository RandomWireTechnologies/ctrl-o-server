<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="bootstrap material admin template">
		<meta name="viewport" content="width=device-width">
		<title>Datatable | Porish Material Admin Template</title>
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
		<!--  Icon CSS -->
		<link rel="stylesheet" href="../assets/css/global/iconstyle.css" />
		<link rel="stylesheet" href="../assets/fonts/font-awasome/font-awesome.min.css" />
		<!-- Global plugin CSS -->
		<link class="nor-css" rel="stylesheet" href="../assets/css/global/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/css/switchery/switchery.min.css" />
		<link rel="stylesheet" href="../assets/css/global/slidePanel.min.css" />
		<link rel="stylesheet" href="../assets/css/global/waves.min.css" />
		<link rel="stylesheet" href="../assets/plugin/bootstrap-tour/css/bootstrap-tour.css" />
		<!--  Global Template CSS -->
		<link rel="stylesheet" href="../assets/css/global/style.css" />
		<link id="site-color" rel="stylesheet" href="../assets/css/colors/default.css" />
		<link rel="stylesheet" href="../assets/css/global/responsive.css" />
		<link rel="stylesheet" href="../assets/css/global/site.min.css" />
		<!-- Page plugin CSS -->
		<link rel="stylesheet" href="../assets/css/datatable/dataTables.bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/datatable/responsive.bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/datatable/scroll-datatable.css">
		<link rel="stylesheet" href="../assets/css/editable-table/editable-table.min.css">
	</head>
	<body class="dashboard site-navbar-small list">
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
		<div class="main-content datatable">
			<div class="page-header">
				<div class="header-left-panel">
					<!-- Title Page -->
					<h1 class="page-title">Datatable</h1>
					<!-- Breadcrumb Section -->
					<ol class="breadcrumb">
						<li><a href="../dashboard_v1.html">Home</a></li>
						<li class="text-info">Tables</li>
						<li class="active">Datatable</li>
					</ol>
				</div>
			</div>
			<div class="page-content validation">
				<div class="panel">
					<!-- Start Basic Datatable -->
					<div class="panel-heading">
						<h3 class="panel-title">Basic</h3>
					</div>
					<div class="panel-body container-fluid">
						<div class="table-rasponsive">
							<table id="basic-table" class="table table-striped table-bordered dt-responsive nowrap">
								<thead>
									<tr>
										<th>First name</th>
										<th>Last name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Start date</th>
										<th>Salary</th>
										<th>E-mail</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Adam</td>
										<td>Ada</td>
										<td>System Architect</td>
										<td>Landon</td>
										<td>2016/05/12</td>
										<td>$15,400</td>
										<td>Adam@example.com</td>
									</tr>
									<tr>
										<td>Garrett</td>
										<td>Winters</td>
										<td>System Architect</td>
										<td>Landon</td>
										<td>2016/05/12</td>
										<td>$15,400</td>
										<td>Garrett@example.com</td>
									</tr>
									<tr>
										<td>Ashton</td>
										<td>Cox</td>
										<td>System Architect</td>
										<td>Landon</td>
										<td>2016/05/12</td>
										<td>$15,400</td>
										<td>Ashton@example.com</td>
									</tr>
									<tr>
										<td>Brielle</td>
										<td>Williamson</td>
										<td>System Architect</td>
										<td>Landon</td>
										<td>2016/05/12</td>
										<td>$15,400</td>
										<td>Brielle@example.com</td>
									</tr>
									<tr>
										<td>Donna</td>
										<td>Snider</td>
										<td>System Architect</td>
										<td>Landon</td>
										<td>2016/05/12</td>
										<td>$15,400</td>
										<td>Donna@example.com</td>
									</tr>
									<tr>
										<td>Michael</td>
										<td>Bruce</td>
										<td>System Architect</td>
										<td>Landon</td>
										<td>2016/05/12</td>
										<td>$15,400</td>
										<td>Michael@example.com</td>
									</tr>
									<tr>
										<td>Jonas</td>
										<td>Alexander</td>
										<td>System Architect</td>
										<td>Landon</td>
										<td>2016/05/12</td>
										<td>$15,400</td>
										<td>Jonas@example.com</td>
									</tr>
									<tr>
										<td>Cara</td>
										<td>Stevens</td>
										<td>System Architect</td>
										<td>Landon</td>
										<td>2016/05/12</td>
										<td>$15,400</td>
										<td>Cara@example.com</td>
									</tr>
									<tr>
										<td>Hermione</td>
										<td>Butler</td>
										<td>System Architect</td>
										<td>Landon</td>
										<td>2016/05/12</td>
										<td>$15,400</td>
										<td>Hermione@example.com</td>
									</tr>
									<tr>
										<td>Howard</td>
										<td>Hatfield</td>
										<td>System Architect</td>
										<td>Landon</td>
										<td>2016/05/12</td>
										<td>$15,400</td>
										<td>Howard@example.com</td>
									</tr>
									<tr>
										<td>Vivian</td>
										<td>Harrell</td>
										<td>System Architect</td>
										<td>Landon</td>
										<td>2016/05/12</td>
										<td>$15,400</td>
										<td>Adam@example.com</td>
									</tr>
									<tr>
										<td>Bruno</td>
										<td>Nash</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>2011/05/03</td>
										<td>$163,500</td>
										<td>Bruno@example.com</td>
									</tr>
									<tr>
										<td>Sakura</td>
										<td>Yamamoto</td>
										<td>Support Engineer</td>
										<td>Tokyo</td>
										<td>2009/08/19</td>
										<td>$139,575</td>
										<td>Sakura@example.com</td>
									</tr>
									<tr>
										<td>Thor</td>
										<td>Walton</td>
										<td>Developer</td>
										<td>New York</td>
										<td>2013/08/11</td>
										<td>$98,540</td>
										<td>Thor@example.com</td>
									</tr>
									<tr>
										<td>Finn</td>
										<td>Camacho</td>
										<td>Support Engineer</td>
										<td>San Francisco</td>
										<td>2009/07/07</td>
										<td>$87,500</td>
										<td>Finn@example.com</td>
									</tr>
									<tr>
										<td>Serge</td>
										<td>Baldwin</td>
										<td>Data Coordinator</td>
										<td>Singapore</td>
										<td>2012/04/09</td>
										<td>$138,575</td>
										<td>Serge@example.com</td>
									</tr>
									<tr>
										<td>Zenaida</td>
										<td>Frank</td>
										<td>Software Engineer</td>
										<td>New York</td>
										<td>2010/01/04</td>
										<td>$125,250</td>
										<td>Zenaida@example.com</td>
									</tr>
									<tr>
										<td>Zorita</td>
										<td>Serrano</td>
										<td>Software Engineer</td>
										<td>San Francisco</td>
										<td>2012/06/01</td>
										<td>$115,000</td>
										<td>Zorita@example.com</td>
									</tr>
									<tr>
										<td>Jennifer</td>
										<td>Acosta</td>
										<td>Junior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>2013/02/01</td>
										<td>$75,650</td>
										<td>Jennifer@example.com</td>
									</tr>
									<tr>
										<td>Cara</td>
										<td>Stevens</td>
										<td>Sales Assistant</td>
										<td>New York</td>
										<td>2011/12/06</td>
										<td>$145,600</td>
										<td>Cara@example.com</td>
									</tr>
									<tr>
										<td>Hermione</td>
										<td>Butler</td>
										<td>Regional Director</td>
										<td>London</td>
										<td>2011/03/21</td>
										<td>$356,250</td>
										<td>Hermione@example.com</td>
									</tr>
									<tr>
										<td>Gavin</td>
										<td>Joyce</td>
										<td>Developer</td>
										<td>Edinburgh</td>
										<td>2010/12/22</td>
										<td>$92,575</td>
										<td>Gavin@example.com</td>
									</tr>
									<tr>
										<td>Jennifer</td>
										<td>Chang</td>
										<td>Regional Director</td>
										<td>Singapore</td>
										<td>2010/11/14</td>
										<td>$357,650</td>
										<td>Chang@example.com</td>
									</tr>
									<tr>
										<td>Brenden</td>
										<td>Wagner</td>
										<td>Software Engineer</td>
										<td>San Francisco</td>
										<td>2011/06/07</td>
										<td>$206,850</td>
										<td>Wagner@example.com</td>
									</tr>
									<tr>
										<td>Fiona</td>
										<td>Green</td>
										<td>Chief Operating Officer (COO)</td>
										<td>San Francisco</td>
										<td>2010/03/11</td>
										<td>$850,000</td>
										<td>Green@example.com</td>
									</tr>
									<tr>
										<td>Shou</td>
										<td>Itou</td>
										<td>Regional Marketing</td>
										<td>Tokyo</td>
										<td>2011/08/14</td>
										<td>$163,000</td>
										<td>Shou@example.com</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- End Basic Datatable -->
				</div>
				<div class="panel">
					<!-- Start Table With Add Row Datatable -->
					<div class="panel-heading">
						<h3 class="panel-title">Table With Add Row</h3>
					</div>
					<div class="panel-body container-fluid">
						<button class="btn btn-info w-icon waves-effect margin-bottom-15" id="addRow"><i class="icon_plus"></i>ADD NEW ROW</button>
						<table id="table-addrow" class="table table-hover dataTable table-striped dt-responsive">
							<thead>
								<tr>
									<th>Column 1</th>
									<th>Column 2</th>
									<th>Column 3</th>
									<th>Column 4</th>
									<th>Column 5</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Column 1</th>
									<th>Column 2</th>
									<th>Column 3</th>
									<th>Column 4</th>
									<th>Column 5</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- End Table With Add Row Datatable -->
				</div>
				<div class="panel">
					<!-- Start Table Column Searching Datatable -->
					<div class="panel-heading">
						<h3 class="panel-title">Table Individual Column Searching</h3>
					</div>
					<div  class="panel-body container-fluid">
						<div class="page-wrap margin-bottom-0">
							<table id="table-individual" class="table table-striped table-bordered dt-responsive nowrap">
								<thead>
									<tr>
										<th>Name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Age</th>
										<th>Start date</th>
										<th>Salary</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>61</td>
										<td>2011/04/25</td>
										<td>$320,800</td>
									</tr>
									<tr>
										<td>Garrett Winters</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>63</td>
										<td>2011/07/25</td>
										<td>$170,750</td>
									</tr>
									<tr>
										<td>Ashton Cox</td>
										<td>Junior Technical Author</td>
										<td>San Francisco</td>
										<td>66</td>
										<td>2009/01/12</td>
										<td>$86,000</td>
									</tr>
									<tr>
										<td>Cedric Kelly</td>
										<td>Senior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>22</td>
										<td>2012/03/29</td>
										<td>$433,060</td>
									</tr>
									<tr>
										<td>Airi Satou</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>33</td>
										<td>2008/11/28</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td>Brielle Williamson</td>
										<td>Integration Specialist</td>
										<td>New York</td>
										<td>61</td>
										<td>2012/12/02</td>
										<td>$372,000</td>
									</tr>
									<tr>
										<td>Herrod Chandler</td>
										<td>Sales Assistant</td>
										<td>San Francisco</td>
										<td>59</td>
										<td>2012/08/06</td>
										<td>$137,500</td>
									</tr>
									<tr>
										<td>Rhona Davidson</td>
										<td>Integration Specialist</td>
										<td>Tokyo</td>
										<td>55</td>
										<td>2010/10/14</td>
										<td>$327,900</td>
									</tr>
									<tr>
										<td>Colleen Hurst</td>
										<td>Javascript Developer</td>
										<td>San Francisco</td>
										<td>39</td>
										<td>2009/09/15</td>
										<td>$205,500</td>
									</tr>
									<tr>
										<td>Sonya Frost</td>
										<td>Software Engineer</td>
										<td>Edinburgh</td>
										<td>23</td>
										<td>2008/12/13</td>
										<td>$103,600</td>
									</tr>
									<tr>
										<td>Jena Gaines</td>
										<td>Office Manager</td>
										<td>London</td>
										<td>30</td>
										<td>2008/12/19</td>
										<td>$90,560</td>
									</tr>
									<tr>
										<td>Quinn Flynn</td>
										<td>Support Lead</td>
										<td>Edinburgh</td>
										<td>22</td>
										<td>2013/03/03</td>
										<td>$342,000</td>
									</tr>
									<tr>
										<td>Charde Marshall</td>
										<td>Regional Director</td>
										<td>San Francisco</td>
										<td>36</td>
										<td>2008/10/16</td>
										<td>$470,600</td>
									</tr>
									<tr>
										<td>Haley Kennedy</td>
										<td>Senior Marketing Designer</td>
										<td>London</td>
										<td>43</td>
										<td>2012/12/18</td>
										<td>$313,500</td>
									</tr>
									<tr>
										<td>Tatyana Fitzpatrick</td>
										<td>Regional Director</td>
										<td>London</td>
										<td>19</td>
										<td>2010/03/17</td>
										<td>$385,750</td>
									</tr>
									<tr>
										<td>Michael Silva</td>
										<td>Marketing Designer</td>
										<td>London</td>
										<td>66</td>
										<td>2012/11/27</td>
										<td>$198,500</td>
									</tr>
									<tr>
										<td>Paul Byrd</td>
										<td>Chief Financial Officer (CFO)</td>
										<td>New York</td>
										<td>64</td>
										<td>2010/06/09</td>
										<td>$725,000</td>
									</tr>
									<tr>
										<td>Gloria Little</td>
										<td>Systems Administrator</td>
										<td>New York</td>
										<td>59</td>
										<td>2009/04/10</td>
										<td>$237,500</td>
									</tr>
									<tr>
										<td>Bradley Greer</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>41</td>
										<td>2012/10/13</td>
										<td>$132,000</td>
									</tr>
									<tr>
										<td>Dai Rios</td>
										<td>Personnel Lead</td>
										<td>Edinburgh</td>
										<td>35</td>
										<td>2012/09/26</td>
										<td>$217,500</td>
									</tr>
									<tr>
										<td>Jenette Caldwell</td>
										<td>Development Lead</td>
										<td>New York</td>
										<td>30</td>
										<td>2011/09/03</td>
										<td>$345,000</td>
									</tr>
									<tr>
										<td>Yuri Berry</td>
										<td>Chief Marketing Officer (CMO)</td>
										<td>New York</td>
										<td>40</td>
										<td>2009/06/25</td>
										<td>$675,000</td>
									</tr>
									<tr>
										<td>Caesar Vance</td>
										<td>Pre-Sales Support</td>
										<td>New York</td>
										<td>21</td>
										<td>2011/12/12</td>
										<td>$106,450</td>
									</tr>
									<tr>
										<td>Doris Wilder</td>
										<td>Sales Assistant</td>
										<td>Sidney</td>
										<td>23</td>
										<td>2010/09/20</td>
										<td>$85,600</td>
									</tr>
									<tr>
										<td>Angelica Ramos</td>
										<td>Chief Executive Officer (CEO)</td>
										<td>London</td>
										<td>47</td>
										<td>2009/10/09</td>
										<td>$1,200,000</td>
									</tr>
									<tr>
										<td>Gavin Joyce</td>
										<td>Developer</td>
										<td>Edinburgh</td>
										<td>42</td>
										<td>2010/12/22</td>
										<td>$92,575</td>
									</tr>
									<tr>
										<td>Jennifer Chang</td>
										<td>Regional Director</td>
										<td>Singapore</td>
										<td>28</td>
										<td>2010/11/14</td>
										<td>$357,650</td>
									</tr>
									<tr>
										<td>Brenden Wagner</td>
										<td>Software Engineer</td>
										<td>San Francisco</td>
										<td>28</td>
										<td>2011/06/07</td>
										<td>$206,850</td>
									</tr>
									<tr>
										<td>Fiona Green</td>
										<td>Chief Operating Officer (COO)</td>
										<td>San Francisco</td>
										<td>48</td>
										<td>2010/03/11</td>
										<td>$850,000</td>
									</tr>
									<tr>
										<td>Shou Itou</td>
										<td>Regional Marketing</td>
										<td>Tokyo</td>
										<td>20</td>
										<td>2011/08/14</td>
										<td>$163,000</td>
									</tr>
									<tr>
										<td>Michelle House</td>
										<td>Integration Specialist</td>
										<td>Sidney</td>
										<td>37</td>
										<td>2011/06/02</td>
										<td>$95,400</td>
									</tr>
									<tr>
										<td>Suki Burks</td>
										<td>Developer</td>
										<td>London</td>
										<td>53</td>
										<td>2009/10/22</td>
										<td>$114,500</td>
									</tr>
									<tr>
										<td>Prescott Bartlett</td>
										<td>Technical Author</td>
										<td>London</td>
										<td>27</td>
										<td>2011/05/07</td>
										<td>$145,000</td>
									</tr>
									<tr>
										<td>Gavin Cortez</td>
										<td>Team Leader</td>
										<td>San Francisco</td>
										<td>22</td>
										<td>2008/10/26</td>
										<td>$235,500</td>
									</tr>
									<tr>
										<td>Martena Mccray</td>
										<td>Post-Sales support</td>
										<td>Edinburgh</td>
										<td>46</td>
										<td>2011/03/09</td>
										<td>$324,050</td>
									</tr>
									<tr>
										<td>Unity Butler</td>
										<td>Marketing Designer</td>
										<td>San Francisco</td>
										<td>47</td>
										<td>2009/12/09</td>
										<td>$85,675</td>
									</tr>
									<tr>
										<td>Hope Fuentes</td>
										<td>Secretary</td>
										<td>San Francisco</td>
										<td>41</td>
										<td>2010/02/12</td>
										<td>$109,850</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>Name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Age</th>
										<th>Start date</th>
										<th>Salary</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<!-- End Table Column Searching Datatable -->
				</div>
				<div class="panel">
					<!-- Start Editable Datatable -->
					<div class="panel-heading">
						<h3 class="panel-title">Editable Datatable</h3>
					</div>
					<div  class="panel-body container-fluid">
						<div class="page-wrap">
							<table id="dataeditableTable" class="editable-table edit-table table table-hover dataTable table-striped dt-responsive">
								<thead>
									<tr>
										<th>Product</th>
										<th>Price</th>
										<th>Profit</th>
										<th>Fun</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Watch</td>
										<td>100</td>
										<td>200</td>
										<td>67</td>
									</tr>
									<tr>
										<td>Bike</td>
										<td>330</td>
										<td>240</td>
										<td>76</td>
									</tr>
									<tr>
										<td>Books</td>
										<td>430</td>
										<td>540</td>
										<td>38</td>
									</tr>
									<tr>
										<td>Remote Car</td>
										<td>100</td>
										<td>200</td>
										<td>50</td>
									</tr>
									<tr>
										<td>Computer</td>
										<td>330</td>
										<td>240</td>
										<td>90</td>
									</tr>
									<tr>
										<td>Android Phone</td>
										<td>650</td>
										<td>789</td>
										<td>100</td>
									</tr>
									<tr>
										<td>Power Bank</td>
										<td>400</td>
										<td>456</td>
										<td>20</td>
									</tr>
									<tr>
										<td>Laptop</td>
										<td>900</td>
										<td>410</td>
										<td>120</td>
									</tr>
									<tr>
										<td>Mouse</td>
										<td>252</td>
										<td>693</td>
										<td>50</td>
									</tr>
									<tr>
										<td>Keyboard</td>
										<td>300</td>
										<td>150</td>
										<td>40</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>
											<strong>Total</strong>
										</th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<!-- End Editable Datatable -->
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
		<!-- Page Plugin JavaScript -->
		<script src="../assets/js/datatable/datatables.min.js"></script>
		<script src="../assets/js/datatable/datatables.bootstrap.js"></script>
		<script src="../assets/js/datatable/dataTables.responsive.min.js"></script>
		<script src="../assets/js/datatable/responsive.bootstrap.min.js"></script>
		<script src="../assets/js/editable-table/mindmup-editabletable.js"></script>
		<script src="../assets/js/editable-table/numeric-input-example.js"></script>
		<!-- Global Template JavaScript -->
		<script src="../assets/js/global/site.min.js"></script>
		<script src="../assets/js/sitesettings/site-settings.js"></script>
		<script src="../assets/js/custom/custom-side-menu.js"></script>
		<!-- Page JavaScript -->
		<script src="../assets/js/editable-table/editable-table.min.js"></script>
		<script src="../assets/js/datatable/custom.js"></script>
	</body>
</html>
