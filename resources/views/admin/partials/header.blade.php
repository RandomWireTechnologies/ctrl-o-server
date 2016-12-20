<!-- Start Header Section -->
<div class="main-header navbar navbar-default navbar-fixed-top navbar-inverse navbar-mega">
    <div class="navbar-header">
        <!--  Template Logo -->
        <a class="navbar-brand" href="{{ route('admin.index') }}">
            <img class="navbar-brand-logo navbar-brand-logo-normal" src="{{ asset('assets/images/logo.png') }}" title="{{ config('app.name') }}" alt="logo">
        </a>
        <div>
            <button class="button-menu-mobile open-left waves-effect">
                <i class="icon_menu"></i>
            </button>
        </div>
    </div>
    <div class="navbar-container container-fluid">
        <div class="collapse navbar-collapse navbar-block navbar-collapse-toolbar" id="site-navbar-collapse">
            <!--  Menu -->
            <ul class="nav navbar-nav navbar-toolbar">
                <li class="dropdown dropdown-fw dropdown-mega">
                    <a href="javascript:void(0)" class="dropdown-toggle waves-effect waves-light" data-hover="dropdown" data-toggle="dropdown"><i class="layout-icon icon_genius" aria-hidden="true"></i><span class="mega-text">Features </span><b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <div class="mega-menu-content">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3 col-lg-2 col-xs-12">
                                        <h5 class="mobile-megamenu waves-effect waves-light">Page Layouts <span class="icon_plus"></span> </h5>
                                        <ul class="list-menu">
                                            <li class="mega-menu">
                                                <a href="{{ route('features.userlist') }}">
                                                    <i class="arrow_triangle-right" aria-hidden="true"></i>
                                                    User List
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('features.invoice') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Invoice</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('features.profile') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Profile</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('features.gallery') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Gallery</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('features.gallery-grid') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Gallery grid</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('features.email') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Email</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-2 col-xs-12">
                                        <h5 class="mobile-megamenu waves-effect waves-light">Charts & Forms <span class="icon_plus"></span></h5>
                                        <ul class="list-menu">
                                            <li>
                                                <a href="{{ route('components.flot') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Flot</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('components.chartist') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Chartist</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('components.validation') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Form validation</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('components.layouts') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Form layouts</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('components.jsgrid') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>JsGrid</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('components.footable') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>FooTable</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xs-12">
                                        <h5 class="mobile-megamenu waves-effect waves-light mobile-margin">UI & Components <span class="icon_plus"></span></h5>
                                        <ul class="list-menu mega-item">
                                            <li class="mega-menu">
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('components.animation') }}">
                                                            <i class="arrow_triangle-right" aria-hidden="true"></i>
                                                            Animation
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('components.buttons') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Buttons</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('components.colors') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Colors</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('components.dropdowns') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Dropdowns</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('components.icons') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('components.lightbox') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Lightbox</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu">
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('components.tooltip-popover') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Tooltip &amp; popover</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('components.progress-bars') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Progress bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('components.sortable-nestable') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Sortable nestable</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('components.bootbox-sweetalert') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Bootbox &amp; sweetalert</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('components.ribbon') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Ribbon</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('components.pricing-tables') }}"><i class="arrow_triangle-right" aria-hidden="true"></i>Pricing tables</a>
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
                                                    <img src="{{ asset('assets/images/global/img_470x160.png') }}" alt="features-img"/>
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
                    <!--  Toggle Search  -->
                    <a class="icon icon_search waves-effect waves-light" href="javascript:void(0)" role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>
                <li class="dropdown">
                    <!--  Profile Section -->
                    <a class="navbar-avatar dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up" role="button">
                        <span class="avatar avatar-online">
                            <img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="Profile Image">
                            <i></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-top-border position-absolute" role="menu">
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
                        <span aria-hidden="true" class="arrow_expand"></span>
                    </a>
                </li>
                <li class="dropdown">
                    <!--  Notification Box -->
                    <a class="waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0)" title="Notifications" data-animation="scale-up" role="button">
                        <i class="icon icon_document_alt" aria-hidden="true"></i>
                        <span class="badge badge-danger up">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media dropdown-top-border position-absolute" role="menu">
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
                                                <i class="icon icon_profile bg-green white icon-circle" aria-hidden="true"></i>
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
                <li class="dropdown">
                    <!-- Flag Box -->
                    <a class="icon flag-avtar dropdown-toggle waves-effect waves-light" data-animation="scale-up" data-toggle="dropdown" href="javascript:void(0)" role="button">
                        <span aria-hidden="true" class="flag-icon flag-icon-background flag-icon-us"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-top-border position-absolute language-box" role="menu">
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