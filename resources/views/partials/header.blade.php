<!-- Start Header Section -->
<div class="main-header navbar navbar-default navbar-fixed-top navbar-inverse navbar-mega">
    <div class="navbar-header">
        <!--  Template Logo -->
        <a class="navbar-brand" href="{{ (auth()->user()) ? route('app.dashboard') : route('app.index') }}">
            <img class="navbar-brand-logo navbar-brand-logo-normal" src="{{ asset('assets/images/logo.png') }}" title="{{ config('app.name') }}" alt="logo">
        </a>
        <div>
            <button class="button-menu-mobile open-left waves-effect">
                <i class="icon_menu"></i>
            </button>
        </div>
    </div>
    <div class="navbar-container container-fluid">
        @include('partials.breadcrumbs')
        <div class="collapse navbar-collapse navbar-block navbar-collapse-toolbar" id="site-navbar-collapse">
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
                            <a href="{{ route('profile.index') }}" role="menuitem"><i class="icon icon_profile" aria-hidden="true"></i> Profile</a>
                        </li>
                        <li role="presentation">
                            <a href="" role="menuitem"><i class="icon icon_creditcard" aria-hidden="true"></i> Billing</a>
                        </li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation">
                            <a href="{{ route('auth.logout') }}" role="menuitem"><i class="icon icon_lock_alt" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
                </li>
                <li id="toggleFullscreen">
                    <!--  Full Screen -->
                    <a class="icon icon-fullscreen waves-effect waves-light" id="toggle" data-toggle="fullscreen" href="javascript:void(0)" role="button">
                        <span aria-hidden="true" class="arrow_expand"></span>
                    </a>
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