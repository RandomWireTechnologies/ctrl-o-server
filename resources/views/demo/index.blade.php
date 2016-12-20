@extends('demo.layouts.app')
@section('title', 'Welcome to the Admin')

@section('page-plugin-css')
<link rel="stylesheet" href="{{ asset('assets/css/google-map/custom-map.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/plugin/magnific-popup/css/magnific-popup.min.css') }}" />
@endsection

@section('page-css')
<link rel="stylesheet" href="{{ asset('assets/css/dashboard/dashboard_v2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/float-chart/custom.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/sort-nestable/tasklist.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/chartist/chartist.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/chartist/custom-chartist.css') }}" />
@endsection

@section('content')  
<!-- Start Contain Section -->
<div class="main-content">
    <div class="main-dash">
        <div class="inner-shads1">
            <div class="dash-content-header dash-content-header-media ">
                <img class="animation-pulseSlow" alt="header image" src="{{ asset('assets/images/dashboard/dash-vector-wallpaper.jpg') }}">
                <div class="dash-content-image-color">
                    <div class="dash-header-section">
                        <div>
                            <div class="row">
                                <div class="col-md-4 col-lg-6 col-sm-12">
                                    <!-- breadcrumb -->
                                    <h1>Welcome <strong>Admin</strong><br><small>Home/Dashboard</small></h1>
                                </div>
                                <div class="col-md-8 col-lg-6 col-sm-12">
                                    <div class="text-center">
                                        <!-- Start Right Event Section -->
                                        <div class="dash-header-content">
                                            <div class="col-xs-3 col-sm-3">
                                                <div class="row">
                                                    <h2 class="animation-hatch">
                                                        $<strong>99.7k</strong><br>
                                                        <small><i class="fa fa-thumbs-o-up"></i> Great</small>
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-sm-3">
                                                <div class="row">
                                                    <h2 class="animation-hatch">
                                                        <strong>199k</strong><br>
                                                        <small><i class="fa fa-heart-o"></i> Likes</small>
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-sm-3">
                                                <div class="row">
                                                    <h2 class="animation-hatch">
                                                        <strong>117</strong><br>
                                                        <small><i class="fa fa-calendar-o"></i> Events</small>
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-sm-3">
                                                <div class="row">
                                                    <h2 class="animation-hatch">
                                                        <strong>29° C</strong><br>
                                                        <small><i class="fa fa-map-marker"></i> Sydney</small>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Right Event Section -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                <div class="bg-white widget widgett-shadow">
                    <div class="heading-top-index-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Start Chart Section -->
                                <div class="left-dash-head">
                                    <h3 class="list-title">Chart</h3>
                                </div>
                                <div class="right-dash-head">
                                    <div class="btn-group mar-button dash-select">
                                        <a class="btn-group mar-button dash-select" data-toggle="dropdown" aria-expanded="false"> 
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Action</a></li>
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Another action</a></li>
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Something else here</a></li>
                                            <li></li>
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Chart Section -->
                            </div>
                        </div>
                    </div>
                    <div class="chart-main-div">
                        <div id="non-ribbon-chord" class="echart-size"></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="bg-white widget widgett-shadow">
                    <!-- Start Analysis Section -->
                    <div class="heading-top-index-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="left-dash-head">
                                    <h3 class="list-title">Live Analysis</h3>
                                </div>
                                <div class="right-dash-head">
                                    <div class="btn-group mar-button dash-select">
                                        <a class="btn-group mar-button dash-select"  data-toggle="dropdown" aria-expanded="false"> 
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Action</a></li>
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Another action</a></li>
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Something else here</a></li>
                                            <li></li>
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chart-float2">
                        <div id="realtime-flot" class="placeholder-float echart-size"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="counter text-left padding-20">
                                <div class="counter-number-group font-size-24 margin-bottom-5">
                                    <h3 class="margin-top-0">82,219 K</h3>
                                </div>
                                <div class="counter-label">Lifetime earnings</div>
                                <div class="">
                                    <span class="sparkline-bar5">6,3,8,6,5,4,7,4,9</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="padding-20">
                                <div class="font-size-20 text-uppercase multi-daigram-dash">SYSTEM STATUS</div>
                                <ul class="list-unstyled margin-md-0">
                                    <li>
                                        <div class="text-left">
                                            <span class="text-info">Handles - 79 %</span>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-info bg-blue-600" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 79%" role="progressbar">
                                                <span class="sr-only">79%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-left">
                                            <span class="text-info">Threads - 55 %</span>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-info bg-red-600" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 55%" role="progressbar">
                                                <span class="sr-only">55%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-left">
                                            <span class="text-info">Proccess - 45 %</span>
                                        </div>
                                        <div class="progress progress-xs margin-md-0">
                                            <div class="progress-bar progress-bar-info bg-green-600" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 45%" role="progressbar">
                                                <span class="sr-only">45%</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Analysis Section -->
                </div>
            </div>
        </div>
        <div class="widget-box">
            <!-- Start Box Section -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 widget-in-box">
                <div class="row">
                    <div class="card-box widget-user-icon">
                        <i class="fa fa-tasks  fa-5x dash-icon-head blue"></i>
                        <div class="wid-u-info">
                            <div class="huge">49.98%</div>
                            <div>Total Database Load</div>
                            <span class="line-info">2,3,2,2,1,3,6,3,2,1</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 widget-in-box">
                <div class="row">
                    <div class="card-box widget-user-icon">
                        <i class="fa fa-picture-o fa-5x dash-icon-head yellow"></i>
                        <div class="wid-u-info">
                            <div class="huge">+47 Photos</div>
                            <div>Gallery</div>
                            <span class="line-info">1,1,0,2,3,4,2,1,2,2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 widget-in-box">
                <div class="row">
                    <div class="card-box widget-user-icon ">
                        <i class="fa fa-file-text fa-5x dash-icon-head purple"></i>
                        <div class="wid-u-info">
                            <div class="huge">14/331</div>
                            <div>Notification</div>
                            <span class="line-info">9,2,5,5,7,4,4,3,2,2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 widget-in-box">
                <div class="row">
                    <div class="card-box widget-user-icon">
                        <i class="fa fa-envelope-o fa-5x dash-icon-head light-red "></i>
                        <div class="wid-u-info">
                            <div class="huge">5 Messages</div>
                            <div>Support center</div>
                            <span class="line-info">3,3,1,62,4,3,7,3,2,5</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Box Section -->
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="widgett-shadow widget-bottom-margin">
                    <!-- Start Contacts Section -->
                    <div class="heading-top-index-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="left-dash-head">
                                    <h3 class="list-title">Contacts</h3>
                                </div>
                                <div class="right-dash-head">
                                    <div class="btn-group mar-button dash-select">
                                        <a class="btn-group mar-button dash-select" data-toggle="dropdown" aria-expanded="false"> 
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Action</a></li>
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Another action</a></li>
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Something else here</a></li>
                                            <li></li>
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="static-box contact-list-div widget-bottom-spacing">
                        <div class="example table-responsive padding-top-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ela</td>
                                        <td>Emmett</td>
                                        <td>@Elijah</td>
                                        <td>
                                            <span class="label label-danger">admin</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Andy</td>
                                        <td>Moronta</td>
                                        <td>@Ramiro</td>
                                        <td>
                                            <span class="label label-info">member</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Odaniel</td>
                                        <td>Oswaldo</td>
                                        <td>@Maxime</td>
                                        <td>
                                            <span class="label label-warning">developer</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Florene</td>
                                        <td>Farwell</td>
                                        <td>@Farwell</td>
                                        <td>
                                            <span class="label label-success">supporter</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Mccarville</td>
                                        <td>Murray</td>
                                        <td>@Mmurray</td>
                                        <td>
                                            <span class="label label-info">member</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Feeley</td>
                                        <td>Fermina</td>
                                        <td>@Fmina</td>
                                        <td>
                                            <span class="label label-success">supporter</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Contacts Section -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-4 col-md-6">
                <div class="widgett-shadow widget-small-space">
                    <!-- Start Message Section -->
                    <div class="heading-top-index-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="left-dash-head">
                                    <h3 class="list-title">Messages</h3>
                                </div>
                                <div class="right-dash-head">
                                    <div class="btn-group mar-button dash-select">
                                        <a class="btn-group mar-button dash-select" data-toggle="dropdown" aria-expanded="false"> 
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Action</a></li>
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Another action</a></li>
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Something else here</a></li>
                                            <li></li>
                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="static-box margin-bottom-0">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="chat_message_wrapper">
                                    <div class="chat_user_avatar">
                                        <img class="user-image-left" src="{{ asset('assets/images/global/img_240x265.png') }}" alt="chat-img">
                                    </div>
                                    <ul class="chat_message_left">
                                        <li class="chat_margin">
                                            <h3 class="chat-name-left">Verdell Rea</h3>
                                            <p>It has survived not only five centuries <span class="chat_message_time_left"><i class="icon icon_clock_alt"></i> 19 JUN 1:30 PM</span> </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="chat_message_wrapper">
                                    <div class="chat_user_avatar">
                                        <img class="user-image-right" src="{{ asset('assets/images/global/img_240x265.png') }}" alt="chat-img">
                                    </div>
                                    <ul class="chat_message_right">
                                        <li class="chat_margin">
                                            <h3 class="chat-name-right">Sevral Den</h3>
                                            <p>Maecenas nec odio et ante tincidunt tempus..<span class="chat_message_time_right"><i class="icon icon_clock_alt"></i> 13:39</span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="chat_message_wrapper">
                                    <div class="chat_user_avatar">
                                        <img class="user-image-left" src="{{ asset('assets/images/global/img_240x265.png') }}" alt="chat-img">
                                    </div>
                                    <ul class="chat_message_left">
                                        <li class="chat_margin">
                                            <h3 class="chat-name-left">Verdell Rea</h3>
                                            <p>Donec sodales sagittis magna. <span class="chat_message_time_left"><i class="icon icon_clock_alt"></i> 19 JUN 1:30 PM</span> </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="chat_message_wrapper">
                                    <div class="chat_user_avatar">
                                        <img class="user-image-right" src="{{ asset('assets/images/global/img_240x265.png') }}" alt="chat-img">
                                    </div>
                                    <ul class="chat_message_right">
                                        <li class="chat_margin">
                                            <h3 class="chat-name-right">Sevral Den</h3>
                                            <p>Lorem Ipsum is simply dummy <span class="chat_message_time_right"><i class="icon icon_clock_alt"></i> 13:39</span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="chat_message_wrapper">
                                    <div class="chat_user_avatar">
                                        <img class="user-image-left" src="{{ asset('assets/images/global/img_240x265.png') }}" alt="chat-img">
                                    </div>
                                    <ul class="chat_message_left">
                                        <li class="chat_margin">
                                            <h3 class="chat-name-left">Verdell Rea</h3>
                                            <p>Sed aliquam ultrices mauris. <span class="chat_message_time_left"><i class="icon icon_clock_alt"></i> 19 JUN 1:30 PM</span> </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <form>
                                <div class="input-group">
                                    <span class="input-group-btn margin-0">
                                        <a href="#" class="btn fa fa-camera"></a>
                                    </span>
                                    <textarea class="form-control dash-form-group"  placeholder="Type message here ..."></textarea>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn margin-0 send-messages-dash"><i class="fa fa-paper-plane"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Message Section -->
                </div>
            </div>
            <div class="col-sm-12 col-lg-8 col-md-6">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6 activities-res-width">
                                <div class="dash-widget widgett-shadow">
                                    <!-- Start Activities Section -->  
                                    <div class="heading-top-index-3">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="left-dash-head">
                                                    <h3 class="list-title">Activities</h3>
                                                </div>
                                                <div class="right-dash-head">
                                                    <div class="btn-group mar-button dash-select">
                                                        <a class="btn-group mar-button dash-select" data-toggle="dropdown" aria-expanded="false"> 
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Action</a></li>
                                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Another action</a></li>
                                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Something else here</a></li>
                                                            <li></li>
                                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="  simple-timeline">
                                        <div class="static-box padding-bottom-10 margin-bottom-0">
                                            <ul class="timeline timeline-simple">
                                                <li class="timeline-item timeline-reverse padding-left-0 margin-vertical-0">
                                                    <div class="timeline-point" data-placement="right" data-toggle="tooltip" data-trigger="hover" data-original-title="9.30 am"></div>
                                                    <div class="timeline-content">
                                                        <div class="widgett widgett-article widgett-shadow">
                                                            <div class="widgett-body padding-vertical-10">
                                                                <p class="text-info margin-bottom-5">1 hour ago</p>
                                                                <p>Integer cubilia mollis. Fringilla tincidunt  mollis.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-item timeline-reverse padding-left-0 margin-vertical-0">
                                                    <div class="timeline-point bg-green-500" data-placement="right" data-toggle="tooltip" data-trigger="hover" data-original-title="4.00 am"></div>
                                                    <div class="timeline-content">
                                                        <div class="widgett widgett-article widgett-shadow">
                                                            <div class="widgett-body padding-vertical-10">
                                                                <p class="text-info margin-bottom-5">5 hour ago</p>
                                                                <p>Pulvinar ornare varius faucibus quisque quis ornare id purus ut.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-item timeline-reverse padding-left-0 margin-vertical-0">
                                                    <div class="timeline-point bg-orange-500" data-placement="right" data-toggle="tooltip" data-trigger="hover" data-original-title="6.30 pm"></div>
                                                    <div class="timeline-content">
                                                        <div class="widgett widgett-article widgett-shadow">
                                                            <div class="widgett-body padding-vertical-10">
                                                                <p class="text-info margin-bottom-5">Yesterday</p>
                                                                <p>Leo class cras fringilla dis torquent faucibus natoque curabitur ornare.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Activities Section -->
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6 task-res-width">
                                <div class="dash-widget widgett-shadow">
                                    <!-- Start Task Section -->
                                    <div class="heading-top-index-3">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="left-dash-head">
                                                    <h3 class="list-title">Tasks</h3>
                                                </div>
                                                <div class="right-dash-head">
                                                    <div class="btn-group mar-button dash-select">
                                                        <a class="btn-group mar-button dash-select " data-toggle="dropdown" aria-expanded="false"> 
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Action</a></li>
                                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Another action</a></li>
                                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Something else here</a></li>
                                                            <li></li>
                                                            <li><a href="javascript:void(0)" class=" waves-effect waves-light">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="static-box padding-bottom-5 margin-bottom-0">
                                        <div class="task-main-div">
                                            <ul class="list-task list-group sortable" data-role="tasklist" id='nestable'>
                                                <li class="list-group-item task-done" data-role="task">
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule" checked>
                                                        <label for="inputSchedule">
                                                            <i class="icon icon_calendar" aria-hidden="true"></i>
                                                            <span>Variable length pagination</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item" data-role="task">
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                                        <label for="inputCall">
                                                            <i class="icon icon_phone" aria-hidden="true"></i>
                                                            <span>Includes jQuery Plugin</span>
                                                            <span class="label label-danger">Today</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item" data-role="task">
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                                        <label for="inputBook">
                                                            <i class="icon icon_calendar" aria-hidden="true"></i>
                                                            <span>On-the-fly filtering</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item" data-role="task">
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                                        <label for="inputForward">
                                                            <span>Hide certain columns at different sizes</span>
                                                            <span class="label btn-info">2 weeks</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item" data-role="task">
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="inputBook2" name="inputCheckboxesBook">
                                                        <label for="inputBook2">
                                                            <i class="icon icon_calendar" aria-hidden="true"></i>
                                                            <span>On-the-fly filtering</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item" data-role="task">
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                                        <label for="inputRecieve">
                                                            <span>Includes LESS and CSS</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Task Section -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-md-12">
                        <div class="widgett-shadow widget-bottom-margin">
                            <!-- Start Product Section -->
                            <div class="heading-top-index-3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="left-dash-head">
                                            <h3 class="list-title">Products</h3>
                                        </div>
                                        <div class="right-dash-head">
                                            <div class="btn-group mar-button dash-select">
                                                <a class="btn-group mar-button dash-select" data-toggle="dropdown" aria-expanded="false"> 
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <li><a href="javascript:void(0)" class=" waves-effect waves-light">Action</a></li>
                                                    <li><a href="javascript:void(0)" class=" waves-effect waves-light">Another action</a></li>
                                                    <li><a href="javascript:void(0)" class=" waves-effect waves-light">Something else here</a></li>
                                                    <li></li>
                                                    <li><a href="javascript:void(0)" class=" waves-effect waves-light">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="static-box product-list-div widget-bottom-spacing">
                                <!-- Start Contact Table Section -->
                                <div class="example table-responsive">
                                    <div class="responsive-table">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Products</th>
                                                    <th>Popularity</th>
                                                    <th>Sales</th>
                                                    <th>Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Protin Powder</td>
                                                    <td>
                                                        <span data-plugin="peityBar" data-skin="blue" style="display: none;">5,3,9,6,5,9,7,3,5,2</span>
                                                        <svg class="peity" height="22" width="44">
                                                        <rect x="0.44000000000000006" y="9.777777777777777" width="3.52" height="12.222222222222223"></rect>
                                                        <rect x="4.840000000000001" y="14.666666666666668" width="3.5199999999999987" height="7.333333333333332"></rect>
                                                        <rect x="9.24" y="0" width="3.5199999999999996" height="22"></rect>
                                                        <rect x="13.64" y="7.333333333333334" width="3.5199999999999996" height="14.666666666666666"></rect>
                                                        <rect x="18.04" y="9.777777777777777" width="3.520000000000003" height="12.222222222222223"></rect>
                                                        <rect x="22.439999999999998" y="0" width="3.520000000000003" height="22"></rect>
                                                        <rect x="26.839999999999996" y="4.888888888888889" width="3.5200000000000067" height="17.11111111111111"></rect>
                                                        <rect x="31.24" y="14.666666666666668" width="3.5200000000000067" height="7.333333333333332"></rect>
                                                        <rect x="35.64" y="9.777777777777777" width="3.520000000000003" height="12.222222222222223"></rect>
                                                        <rect x="40.04" y="17.11111111111111" width="3.520000000000003" height="4.888888888888889"></rect>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger text-semibold">28.76%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger text-semibold">Down</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Air Conditioner</td>
                                                    <td>
                                                        <span data-plugin="peityBar" data-skin="blue" style="display: none;">10,6,2,4,5,8,4,1,8,7</span>
                                                        <svg class="peity" height="22" width="44">
                                                        <rect x="0.44000000000000006" y="0" width="3.52" height="22"></rect>
                                                        <rect x="4.840000000000001" y="8.8" width="3.5199999999999987" height="13.2"></rect>
                                                        <rect x="9.24" y="17.6" width="3.5199999999999996" height="4.399999999999999"></rect>
                                                        <rect x="13.64" y="13.2" width="3.5199999999999996" height="8.8"></rect>
                                                        <rect x="18.04" y="11" width="3.520000000000003" height="11"></rect>
                                                        <rect x="22.439999999999998" y="4.399999999999999" width="3.520000000000003" height="17.6"></rect>
                                                        <rect x="26.839999999999996" y="13.2" width="3.5200000000000067" height="8.8"></rect>
                                                        <rect x="31.24" y="19.8" width="3.5200000000000067" height="2.1999999999999993"></rect>
                                                        <rect x="35.64" y="4.399999999999999" width="3.520000000000003" height="17.6"></rect>
                                                        <rect x="40.04" y="6.600000000000001" width="3.520000000000003" height="15.399999999999999"></rect>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="text-warning text-semibold">8.55%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-warning text-semibold">Down</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>RC Cars</td>
                                                    <td>
                                                        <span data-plugin="peityBar" data-skin="blue" style="display: none;">2,8,3,10,7,4,9,8,4,3</span>
                                                        <svg class="peity" height="22" width="44">
                                                        <rect x="0.44000000000000006" y="17.6" width="3.52" height="4.399999999999999"></rect>
                                                        <rect x="4.840000000000001" y="4.399999999999999" width="3.5199999999999987" height="17.6"></rect>
                                                        <rect x="9.24" y="15.4" width="3.5199999999999996" height="6.6"></rect>
                                                        <rect x="13.64" y="0" width="3.5199999999999996" height="22"></rect>
                                                        <rect x="18.04" y="6.600000000000001" width="3.520000000000003" height="15.399999999999999"></rect>
                                                        <rect x="22.439999999999998" y="13.2" width="3.520000000000003" height="8.8"></rect>
                                                        <rect x="26.839999999999996" y="2.1999999999999993" width="3.5200000000000067" height="19.8"></rect>
                                                        <rect x="31.24" y="4.399999999999999" width="3.5200000000000067" height="17.6"></rect>
                                                        <rect x="35.64" y="13.2" width="3.520000000000003" height="8.8"></rect>
                                                        <rect x="40.04" y="15.4" width="3.520000000000003" height="6.6"></rect>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="text-success text-semibold">58.56%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success text-semibold">Up</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Down Coat</td>
                                                    <td>
                                                        <span data-plugin="peityBar" data-skin="blue" style="display: none;">0,5,8,7,6,2,8,3,9,10</span>
                                                        <svg class="peity" height="22" width="44">
                                                        <rect x="0.44000000000000006" y="21" width="3.52" height="1"></rect>
                                                        <rect x="4.840000000000001" y="11" width="3.5199999999999987" height="11"></rect>
                                                        <rect x="9.24" y="4.399999999999999" width="3.5199999999999996" height="17.6"></rect>
                                                        <rect x="13.64" y="6.600000000000001" width="3.5199999999999996" height="15.399999999999999"></rect>
                                                        <rect x="18.04" y="8.8" width="3.520000000000003" height="13.2"></rect>
                                                        <rect x="22.439999999999998" y="17.6" width="3.520000000000003" height="4.399999999999999"></rect>
                                                        <rect x="26.839999999999996" y="4.399999999999999" width="3.5200000000000067" height="17.6"></rect>
                                                        <rect x="31.24" y="15.4" width="3.5200000000000067" height="6.6"></rect>
                                                        <rect x="35.64" y="2.1999999999999993" width="3.520000000000003" height="19.8"></rect>
                                                        <rect x="40.04" y="0" width="3.520000000000003" height="22"></rect>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="text-info text-semibold">35.76%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-info text-semibold">Up</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Android Phone</td>
                                                    <td>
                                                        <span data-plugin="peityBar" data-skin="blue" style="display: none;">2,4,6,4,7,6,3,6,8,10</span>
                                                        <svg class="peity" height="22" width="44">
                                                        <rect x="0.44000000000000006" y="17.6" width="3.52" height="4.399999999999999"></rect>
                                                        <rect x="4.840000000000001" y="13.2" width="3.5199999999999987" height="8.8"></rect>
                                                        <rect x="9.24" y="8.8" width="3.5199999999999996" height="13.2"></rect>
                                                        <rect x="13.64" y="13.2" width="3.5199999999999996" height="8.8"></rect>
                                                        <rect x="18.04" y="6.600000000000001" width="3.520000000000003" height="15.399999999999999"></rect>
                                                        <rect x="22.439999999999998" y="8.8" width="3.520000000000003" height="13.2"></rect>
                                                        <rect x="26.839999999999996" y="15.4" width="3.5200000000000067" height="6.6"></rect>
                                                        <rect x="31.24" y="8.8" width="3.5200000000000067" height="13.2"></rect>
                                                        <rect x="35.64" y="4.399999999999999" width="3.520000000000003" height="17.6"></rect>
                                                        <rect x="40.04" y="0" width="3.520000000000003" height="22"></rect>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <span class="text-warning text-semibold">21.13%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-warning text-semibold">down</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- End Contact Table Section -->
                            </div>
                            <!-- End Product Section -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contain Section -->
@endsection

@section('page-plugin-js')
<!-- Start Page Plugin JavaScript -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArv9ALhBv6ihfhABHEAkFg0-JHywhtgjM"></script>
<script src="{{ asset('assets/js/peity-charts/jquery.peity2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/float-chart/flot.jquery.js') }}"></script>
<script src="{{ asset('assets/js/float-chart/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/sort-nesttable/tasklist.min.js') }}"></script>
<script src="{{ asset('assets/js/sort-nesttable/html.sortable.min.js') }}"></script>
<script src="{{ asset('assets/plugin/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/chartist/chartist.min.js') }}" type="text/javascript"></script>
<!-- End Page Plugin JavaScript -->
@endsection
@section('page-js')
<!-- Start Page JavaScript -->          
<script src="{{ asset('assets/js/echarts/echarts-all.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/dashboard/dashboard_v2.js') }}"></script>
<script src="{{ asset('assets/js/media/media.min.js') }}"></script>
<!-- End Page JavaScript -->   
@endsection
@section('page-template-js')
<!-- Start Page Template JavaScript -->
<script src="{{ asset('assets/js/peity-charts/jquery.peity2.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/peity-charts/jquery.peity2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/peity-charts/peity.js') }}" type="text/javascript"></script>
<!-- End Page Template JavaScript -->
@endsection
    