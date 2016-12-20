@extends('demo.layouts.app')
@section('title', 'Contacts')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	<div class="page-header">
		<div class="header-left-panel">
			<!-- Title Page -->
			<h1 class="page-title">Contacts</h1>
			<!-- Breadcrumb Section -->
			<ol class="breadcrumb">
				<li><a href="{{ route('demo.index') }}">Home</a></li>
				<li class="text-info">Apps</li>
				<li class="active">Contacts</li>
			</ol>
		</div>
	</div>
	<div class="page-content app-contacts">
		<div class="panel">
			<div class="panel-body">
				<div class="page-left-side">
					<div class="content">
						<button class="code-toggle-button collapsed" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						<span class="icon arrow_carrot-up"></span>
						</button>
						<h4 class="panel-title contactTitle">Contact</h4>
					</div>
					<div class="sidebar-height collapse" id="collapseExample">
						<div class="text-center userimg ">
							<!-- Contact Detail -->
							<div class="profile-sm-bottom profile-bottom profile-mobile">
								<div class="name-profile">Munaro Jacob</div>
								<div class="post-profile">Project Manager</div>
							</div>
							<div class="profile-sm-image"><img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="profile image"></div>
						</div>
						<div class="page-aside-sections">
							<div class="list-group">
								<a class="list-group-item" href="javascript:void(0)">
								<span class="item-right">36</span><i class="icon icon_contacts text-info" aria-hidden="true"></i>All
								contacts</a>
							</div>
						</div>
						<div class="page-aside-section">
							<h5 class="page-aside-title">Contact Group</h5>
							<!-- Contact Menu -->
							<div class="list-group has-actions">
								<div class="list-group-item">
									<div class="list-content">
										<span class="item-right">8</span>
										<span class="list-text">Work</span>
									</div>
								</div>
								<div class="list-group-item">
									<div class="list-content">
										<span class="item-right">10</span>
										<span class="list-text">Family</span>
									</div>
								</div>
								<div class="list-group-item">
									<div class="list-content">
										<span class="item-right">20</span>
										<span class="list-text">Private</span>
									</div>
								</div>
								<div class="list-group-item">
									<div class="list-content">
										<span class="item-right">8</span>
										<span class="list-text">Friends</span>
									</div>
								</div>
								<!-- Add New Group -->
								<a class="list-group-item text-info" href="javascript:void(0)">
								<i class="icon icon_plus text-info" aria-hidden="true"></i> Add New Group
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-main-content">
					<div class="contact-col contact-padding-right">
						<div class="row">
							<div class="col-md-12 col-lg-5 col-sm-12">
								<div class="contact-body">
									<div class="nav-tabs-verticle">
										<form>
											<div class="input-search input-search-dark">
												<i aria-hidden="true" class="input-search-icon icon_search"></i>
												<input type="text" placeholder="Search.." name="search" class="form-control">
											</div>
										</form>
										<ul class="nav nav-tabs contact-list scroll hover forscroll">
											<!-- Start Chat List -->
											<li class="nav-item padding-small-0">
												<div class="contact-padding">
													<div class="list-left">
														<span class="contact-img">
														<img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="profile-image">
														</span>
													</div>
													<div class="list-body ng-binding">
														Domare Dos<br><small>abc@yahoo.com</small>
													</div>
													<div class="contact-btn">
														<a class="btn btn-info btn-sm waves-effect waves-light margin-sm-5" href="#contact1" data-toggle="tab">View </a>
														<button type="button" class="btn btn-sm waves-effect waves-light margin-sm-5 bgwhite bggray"><i class="icon_star_alt"></i></button>
													</div>
												</div>
											</li>
											<li class="nav-item padding-small-0">
												<div class="contact-padding">
													<div class="list-left">
														<span class="contact-img">
														<img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="profile-image">
														</span>
													</div>
													<div class="list-body ng-binding">
														Sevral Den<br><small>jack@yahoo.com</small> 
													</div>
													<div class="contact-btn">
														<a class="btn btn-info btn-sm waves-effect waves-light margin-sm-5" href="#contact2" data-toggle="tab">View </a>
														<button type="button" class="btn btn-sm waves-effect waves-light margin-sm-5 bgwhite bggray"><i class="icon_star text-info"></i></button>
													</div>
												</div>
											</li>
											<li class="nav-item padding-small-0">
												<div class="contact-padding">
													<div class="list-left">
														<span class="contact-img">
														<img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="profile-image">
														</span>
													</div>
													<div class="list-body ng-binding">
														Hinem Jome<br><small>levin@gmail.com</small> 
													</div>
													<div class="contact-btn">
														<a class="btn btn-info btn-sm waves-effect waves-light margin-sm-5" href="#contact3" data-toggle="tab">View </a>
														<button type="button" class="btn btn-sm waves-effect waves-light margin-sm-5 bgwhite bggray"><i class="icon_star text-info"></i></button>
													</div>
												</div>
											</li>
											<li class="nav-item padding-small-0">
												<div class="contact-padding">
													<div class="list-left">
														<span class="contact-img">
														<img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="profile-image">
														</span>
													</div>
													<div class="list-body ng-binding">
														Melissa Dock<br><small>john@gmail.com</small>
													</div>
													<div class="contact-btn">
														<a class="btn btn-info btn-sm waves-effect waves-light margin-sm-5" href="#contact4" data-toggle="tab">View </a>
														<button type="button" class="btn btn-sm waves-effect waves-light margin-sm-5 bgwhite bggray"><i class="icon_star_alt"></i></button>
													</div>
												</div>
											</li>
											<li class="nav-item padding-small-0">
												<div class="contact-padding">
													<div class="list-left">
														<span class="contact-img">
														<img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="profile-image">
														</span>
													</div>
													<div class="list-body ng-binding">
														Clay Peskin<br><small>mark@yahoo.com</small>
													</div>
													<div class="contact-btn">
														<a class="btn btn-info btn-sm waves-effect waves-light margin-sm-5" href="#contact5" data-toggle="tab">View </a>
														<button type="button" class="btn btn-sm waves-effect waves-light margin-sm-5 bgwhite bggray"><i class="icon_star_alt"></i></button>
													</div>
												</div>
											</li>
											<li class=" nav-item padding-small-0">
												<div class="contact-padding">
													<div class="list-left">
														<span class="contact-img">
														<img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="profile-image">
														</span>
													</div>
													<div class="list-body ng-binding">
														Verdell Rea<br><small>lisa@gmail.com</small>
													</div>
													<div class="contact-btn">
														<a class="btn btn-info btn-sm waves-effect waves-light margin-sm-5" href="#contact6" data-toggle="tab">View </a>
														<button type="button" class="btn btn-sm waves-effect waves-light margin-sm-5 bgwhite bggray"><i class="icon_star text-info"></i></button>
													</div>
												</div>
											</li>
											<li class="nav-item padding-small-0">
												<div class="contact-padding">
													<div class="list-left">
														<span class="contact-img">
														<img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="profile-image">
														</span>
													</div>
													<div class="list-body ng-binding">
														Brooks Lata<br><small>rony@gmail.com</small>
													</div>
													<div class="contact-btn">
														<a class="btn btn-info btn-sm waves-effect waves-light margin-sm-5" href="#contact7" data-toggle="tab">View </a>
														<button type="button" class="btn btn-sm waves-effect waves-light margin-sm-5 bgwhite bggray"><i class="icon_star text-info"></i></button>
													</div>
												</div>
											</li>
											<li class="nav-item padding-small-0">
												<div class="contact-padding">
													<div class="list-left">
														<span class="contact-img">
														<img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="profile-image">
														</span>
													</div>
													<div class="list-body ng-binding">
														Chempi Roke<br><small>kevin@gmail.com</small>
													</div>
													<div class="contact-btn">
														<a class="btn btn-info btn-sm waves-effect waves-light margin-sm-5" href="#contact8" data-toggle="tab">View </a>
														<button type="button" class="btn btn-sm waves-effect waves-light margin-sm-5 bgwhite bggray"><i class="icon_star_alt"></i></button>
													</div>
												</div>
											</li>
											<li class="nav-item padding-small-0">
												<div class="contact-padding">
													<div class="list-left">
														<span class="contact-img">
														<img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="profile-image">
														</span>
													</div>
													<div class="list-body ng-binding">
														Aerac Boara<br><small>aerac@gmail.com</small>
													</div>
													<div class="contact-btn">
														<a class="btn btn-info btn-sm waves-effect waves-light margin-sm-5" href="#contact9" data-toggle="tab">View </a>
														<button type="button" class="btn btn-sm waves-effect waves-light margin-sm-5 bgwhite bggray"><i class="icon_star_alt"></i></button>
													</div>
												</div>
											</li>
											<li class="nav-item padding-small-0">
												<div class="contact-padding">
													<div class="list-left">
														<span class="contact-img">
														<img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="profile-image">
														</span>
													</div>
													<div class="list-body ng-binding">
														Jonat Smith<br><small>jonat@gmail.com</small>
													</div>
													<div class="contact-btn">
														<a class="btn btn-info btn-sm waves-effect waves-light margin-sm-5" href="#contact10" data-toggle="tab">View </a>
														<button type="button" class="btn btn-sm waves-effect waves-light margin-sm-5 bgwhite bggray"><i class="icon_star_alt"></i></button>
													</div>
												</div>
											</li>
											<li class="nav-item padding-small-0">
												<div class="contact-padding">
													<div class="list-left">
														<span class="contact-img">
														<img src="{{ asset('assets/images/global/img_240x265.png') }}" alt="profile-image">
														</span>
													</div>
													<div class="list-body ng-binding">
														Miles Morales<br><small>miles@gmail.com</small>
													</div>
													<div class="contact-btn">
														<a class="btn btn-info btn-sm waves-effect waves-light margin-sm-5" href="#contact11" data-toggle="tab">View </a>
														<button type="button" class="btn btn-sm waves-effect waves-light margin-sm-5 bgwhite bggray"><i class="icon_star_alt"></i></button>
													</div>
												</div>
											</li>
											<!-- End Chat List -->
										</ul>
										<ul class="nav nav-tabs contact-list new-contact">
											<li class="padding-10 nav-item">
												<div class="text-center">
													<!-- Add New Contact -->
													<a href="#new-contact" class="btn" data-toggle="tab"><i class="fa fa-plus"></i> New Contact</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-lg-7">
								<div class="tab-content tab-padding-contact background-contact">
									<!-- Start Profile Detail -->
									<div class="padding-10 tab-pane active" id="contact1" role="tabpanel">
										<div class="full-info">
											<img src="{{ asset('assets/images/global/img_240x265.png') }}" class="contact-pic col-md-4" alt="profile-image">
											<div class="contact-info col-md-8">
												<b class="margin-bottom-5 text-info">Domare Dos</b>
												<ul class="social-icon">
													<li><a href="javascript:void(0)"><span class="icon_phone color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_facebook color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_twitter color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_googleplus color-icon" aria-hidden="true"></span></a></li>
												</ul>
											</div>
										</div>
										<table class="table user-info">
											<tr>
												<th class="text-info col-md-3">Email:</th>
												<td>
													<span>abc@yahoo.com</span>
													<div class="form-group form-material floating">
														<input type="email" class="form-control" name="inputFloating" value="abc@yahoo.com">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Call on:</th>
												<td>
													<span>123 456 789</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="123 456 789">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Birth-date:</th>
												<td>
													<span>15-05-1990</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="15-05-1990">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Company:</th>
												<td>
													<span>Google</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Google">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Position:</th>
												<td>
													<span>Assistant Manager</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Assistant Manager">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Country:</th>
												<td>
													<span>USA</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="USA">
													</div>
												</td>
											</tr>
										</table>
										<button type="button" data-toggle="edit" class="btn btn-info btn-sm waves-effect waves-light btn-contact-edit edit">Edit </button>
										<button type="button" class="btn btn-info btn-sm waves-effect waves-light pull-left">Delete </button>
									</div>
									<div class="padding-10 tab-pane" id="contact2" role="tabpanel">
										<div class="full-info">
											<img src="{{ asset('assets/images/global/img_240x265.png') }}" class="contact-pic col-md-4" alt="profile-image">
											<div class="contact-info col-md-8">
												<b class="margin-bottom-5 text-info">Sevral Den</b>
												<ul class="social-icon">
													<li><a href="javascript:void(0)"><span class="icon_phone color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_facebook color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_twitter color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_googleplus color-icon" aria-hidden="true"></span></a></li>
												</ul>
											</div>
										</div>
										<table class="table user-info">
											<tr>
												<th class="text-info col-md-3">Email:</th>
												<td>
													<span>abc@yahoo.com</span>
													<div class="form-group form-material floating">
														<input type="email" class="form-control" name="inputFloating" value="abc@yahoo.com">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Call on:</th>
												<td>
													<span>123 456 789</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="123 456 789">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Birth-date:</th>
												<td>
													<span>15-05-1990</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="15-05-1990">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Company:</th>
												<td>
													<span>Google</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Google">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Position:</th>
												<td>
													<span>Assistant Manager</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Assistant Manager">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Country:</th>
												<td>
													<span>USA</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="USA">
													</div>
												</td>
											</tr>
										</table>
										<button type="button" data-toggle="edit" class="btn btn-info btn-sm waves-effect waves-light btn-contact-edit edit">Edit </button>
										<button type="button" class="btn btn-info btn-sm waves-effect waves-light pull-left">Delete </button>
									</div>
									<div class="padding-10 tab-pane" id="contact3" role="tabpanel">
										<div class="full-info">
											<img src="{{ asset('assets/images/global/img_240x265.png') }}" class="contact-pic col-md-4" alt="profile-image">
											<div class="contact-info col-md-8">
												<b class="margin-bottom-5 text-info">Hinem Jome</b>
												<ul class="social-icon">
													<li><a href="javascript:void(0)"><span class="icon_phone color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_facebook color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_twitter color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_googleplus color-icon" aria-hidden="true"></span></a></li>
												</ul>
											</div>
										</div>
										<table class="table user-info">
											<tr>
												<th class="text-info col-md-3">Email:</th>
												<td>
													<span>abc@yahoo.com</span>
													<div class="form-group form-material floating">
														<input type="email" class="form-control" name="inputFloating" value="abc@yahoo.com">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Call on:</th>
												<td>
													<span>123 456 789</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="123 456 789">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Birth-date:</th>
												<td>
													<span>15-05-1990</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="15-05-1990">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Company:</th>
												<td>
													<span>Google</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Google">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Position:</th>
												<td>
													<span>Assistant Manager</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Assistant Manager">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Country:</th>
												<td>
													<span>USA</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="USA">
													</div>
												</td>
											</tr>
										</table>
										<button type="button" data-toggle="edit" class="btn btn-info btn-sm waves-effect waves-light btn-contact-edit edit">Edit </button>
										<button type="button" class="btn btn-info btn-sm waves-effect waves-light pull-left">Delete </button>
									</div>
									<div class="padding-10 tab-pane" id="contact4" role="tabpanel">
										<div class="full-info">
											<img src="{{ asset('assets/images/global/img_240x265.png') }}" class="contact-pic col-md-4" alt="profile-image">
											<div class="contact-info col-md-8">
												<b class="margin-bottom-5 text-info">Melissa Dock</b>
												<ul class="social-icon">
													<li><a href="javascript:void(0)"><span class="icon_phone color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_facebook color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_twitter color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_googleplus color-icon" aria-hidden="true"></span></a></li>
												</ul>
											</div>
										</div>
										<table class="table user-info">
											<tr>
												<th class="text-info col-md-3">Email:</th>
												<td>
													<span>abc@yahoo.com</span>
													<div class="form-group form-material floating">
														<input type="email" class="form-control" name="inputFloating" value="abc@yahoo.com">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Call on:</th>
												<td>
													<span>123 456 789</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="123 456 789">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Birth-date:</th>
												<td>
													<span>15-05-1990</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="15-05-1990">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Company:</th>
												<td>
													<span>Google</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Google">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Position:</th>
												<td>
													<span>Assistant Manager</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Assistant Manager">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Country:</th>
												<td>
													<span>USA</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="USA">
													</div>
												</td>
											</tr>
										</table>
										<button type="button" data-toggle="edit" class="btn btn-info btn-sm waves-effect waves-light btn-contact-edit edit">Edit </button>
										<button type="button" class="btn btn-info btn-sm waves-effect waves-light pull-left">Delete </button>
									</div>
									<div class="padding-10 tab-pane" id="contact5" role="tabpanel">
										<div class="full-info">
											<img src="{{ asset('assets/images/global/img_240x265.png') }}" class="contact-pic col-md-4" alt="profile-image">
											<div class="contact-info col-md-8">
												<b class="margin-bottom-5 text-info">Clay Peskin</b>
												<ul class="social-icon">
													<li><a href="javascript:void(0)"><span class="icon_phone color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_facebook color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_twitter color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_googleplus color-icon" aria-hidden="true"></span></a></li>
												</ul>
											</div>
										</div>
										<table class="table user-info">
											<tr>
												<th class="text-info col-md-3">Email:</th>
												<td>
													<span>abc@yahoo.com</span>
													<div class="form-group form-material floating">
														<input type="email" class="form-control" name="inputFloating" value="abc@yahoo.com">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Call on:</th>
												<td>
													<span>123 456 789</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="123 456 789">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Birth-date:</th>
												<td>
													<span>15-05-1990</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="15-05-1990">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Company:</th>
												<td>
													<span>Google</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Google">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Position:</th>
												<td>
													<span>Assistant Manager</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Assistant Manager">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Country:</th>
												<td>
													<span>USA</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="USA">
													</div>
												</td>
											</tr>
										</table>
										<button type="button" data-toggle="edit" class="btn btn-info btn-sm waves-effect waves-light btn-contact-edit edit">Edit </button>
										<button type="button" class="btn btn-info btn-sm waves-effect waves-light pull-left">Delete </button>
									</div>
									<div class="padding-10 tab-pane" id="contact6" role="tabpanel">
										<div class="full-info">
											<img src="{{ asset('assets/images/global/img_240x265.png') }}" class="contact-pic col-md-4" alt="profile-image">
											<div class="contact-info col-md-8">
												<b class="margin-bottom-5 text-info">Verdell Rea</b>
												<ul class="social-icon">
													<li><a href="javascript:void(0)"><span class="icon_phone color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_facebook color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_twitter color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_googleplus color-icon" aria-hidden="true"></span></a></li>
												</ul>
											</div>
										</div>
										<table class="table user-info">
											<tr>
												<th class="text-info col-md-3">Email:</th>
												<td>
													<span>abc@yahoo.com</span>
													<div class="form-group form-material floating">
														<input type="email" class="form-control" name="inputFloating" value="abc@yahoo.com">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Call on:</th>
												<td>
													<span>123 456 789</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="123 456 789">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Birth-date:</th>
												<td>
													<span>15-05-1990</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="15-05-1990">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Company:</th>
												<td>
													<span>Google</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Google">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Position:</th>
												<td>
													<span>Assistant Manager</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Assistant Manager">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Country:</th>
												<td>
													<span>USA</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="USA">
													</div>
												</td>
											</tr>
										</table>
										<button type="button" data-toggle="edit" class="btn btn-info btn-sm waves-effect waves-light btn-contact-edit edit">Edit </button>
										<button type="button" class="btn btn-info btn-sm waves-effect waves-light pull-left">Delete </button>
									</div>
									<div class="padding-10 tab-pane" id="contact7" role="tabpanel">
										<div class="full-info">
											<img src="{{ asset('assets/images/global/img_240x265.png') }}" class="contact-pic col-md-4" alt="profile-image">
											<div class="contact-info col-md-8">
												<b class="margin-bottom-5 text-info">Brooks Lata</b>
												<ul class="social-icon">
													<li><a href="javascript:void(0)"><span class="icon_phone color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_facebook color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_twitter color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_googleplus color-icon" aria-hidden="true"></span></a></li>
												</ul>
											</div>
										</div>
										<table class="table user-info">
											<tr>
												<th class="text-info col-md-3">Email:</th>
												<td>
													<span>abc@yahoo.com</span>
													<div class="form-group form-material floating">
														<input type="email" class="form-control" name="inputFloating" value="abc@yahoo.com">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Call on:</th>
												<td>
													<span>123 456 789</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="123 456 789">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Birth-date:</th>
												<td>
													<span>15-05-1990</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="15-05-1990">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Company:</th>
												<td>
													<span>Google</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Google">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Position:</th>
												<td>
													<span>Assistant Manager</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Assistant Manager">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Country:</th>
												<td>
													<span>USA</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="USA">
													</div>
												</td>
											</tr>
										</table>
										<button type="button" data-toggle="edit" class="btn btn-info btn-sm waves-effect waves-light btn-contact-edit edit">Edit </button>
										<button type="button" class="btn btn-info btn-sm waves-effect waves-light pull-left">Delete </button>
									</div>
									<div class="padding-10 tab-pane" id="contact8" role="tabpanel">
										<div class="full-info">
											<img src="{{ asset('assets/images/global/img_240x265.png') }}" class="contact-pic col-md-4" alt="profile-image">
											<div class="contact-info col-md-8">
												<b class="margin-bottom-5 text-info">Chempi Roke</b>
												<ul class="social-icon">
													<li><a href="javascript:void(0)"><span class="icon_phone color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_facebook color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_twitter color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_googleplus color-icon" aria-hidden="true"></span></a></li>
												</ul>
											</div>
										</div>
										<table class="table user-info">
											<tr>
												<th class="text-info col-md-3">Email:</th>
												<td>
													<span>abc@yahoo.com</span>
													<div class="form-group form-material floating">
														<input type="email" class="form-control" name="inputFloating" value="abc@yahoo.com">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Call on:</th>
												<td>
													<span>123 456 789</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="123 456 789">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Birth-date:</th>
												<td>
													<span>15-05-1990</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="15-05-1990">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Company:</th>
												<td>
													<span>Google</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Google">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Position:</th>
												<td>
													<span>Assistant Manager</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Assistant Manager">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Country:</th>
												<td>
													<span>USA</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="USA">
													</div>
												</td>
											</tr>
										</table>
										<button type="button" data-toggle="edit" class="btn btn-info btn-sm waves-effect waves-light btn-contact-edit edit">Edit </button>
										<button type="button" class="btn btn-info btn-sm waves-effect waves-light pull-left">Delete </button>
									</div>
									<div class="padding-10 tab-pane" id="contact9" role="tabpanel">
										<div class="full-info">
											<img src="{{ asset('assets/images/global/img_240x265.png') }}" class="contact-pic col-md-4" alt="profile-image">
											<div class="contact-info col-md-8">
												<b class="margin-bottom-5 text-info">Aerace Boara</b>
												<ul class="social-icon">
													<li><a href="javascript:void(0)"><span class="icon_phone color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_facebook color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_twitter color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_googleplus color-icon" aria-hidden="true"></span></a></li>
												</ul>
											</div>
										</div>
										<table class="table user-info">
											<tr>
												<th class="text-info col-md-3">Email:</th>
												<td>
													<span>abc@yahoo.com</span>
													<div class="form-group form-material floating">
														<input type="email" class="form-control" name="inputFloating" value="abc@yahoo.com">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Call on:</th>
												<td>
													<span>123 456 789</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="123 456 789">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Birth-date:</th>
												<td>
													<span>15-05-1990</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="15-05-1990">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Company:</th>
												<td>
													<span>Google</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Google">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Position:</th>
												<td>
													<span>Assistant Manager</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Assistant Manager">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Country:</th>
												<td>
													<span>USA</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="USA">
													</div>
												</td>
											</tr>
										</table>
										<button type="button" data-toggle="edit" class="btn btn-info btn-sm waves-effect waves-light btn-contact-edit edit">Edit </button>
										<button type="button" class="btn btn-info btn-sm waves-effect waves-light pull-left">Delete </button>
									</div>
									<div class="padding-10 tab-pane" id="contact10" role="tabpanel">
										<div class="full-info">
											<img src="{{ asset('assets/images/global/img_240x265.png') }}" class="contact-pic col-md-4" alt="profile-image">
											<div class="contact-info col-md-8">
												<b class="margin-bottom-5 text-info">Jonat Smith</b>
												<ul class="social-icon">
													<li><a href="javascript:void(0)"><span class="icon_phone color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_facebook color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_twitter color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_googleplus color-icon" aria-hidden="true"></span></a></li>
												</ul>
											</div>
										</div>
										<table class="table user-info">
											<tr>
												<th class="text-info col-md-3">Email:</th>
												<td>
													<span>abc@yahoo.com</span>
													<div class="form-group form-material floating">
														<input type="email" class="form-control" name="inputFloating" value="abc@yahoo.com">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Call on:</th>
												<td>
													<span>123 456 789</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="123 456 789">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Birth-date:</th>
												<td>
													<span>15-05-1990</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="15-05-1990">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Company:</th>
												<td>
													<span>Google</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Google">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Position:</th>
												<td>
													<span>Assistant Manager</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Assistant Manager">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Country:</th>
												<td>
													<span>USA</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="USA">
													</div>
												</td>
											</tr>
										</table>
										<button type="button" data-toggle="edit" class="btn btn-info btn-sm waves-effect waves-light btn-contact-edit edit">Edit </button>
										<button type="button" class="btn btn-info btn-sm waves-effect waves-light pull-left">Delete </button>
									</div>
									<div class="padding-10 tab-pane" id="contact11" role="tabpanel">
										<div class="full-info">
											<img src="{{ asset('assets/images/global/img_240x265.png') }}" class="contact-pic col-md-4" alt="profile-image">
											<div class="contact-info col-md-8">
												<b class="margin-bottom-5 text-info">Miles Morales</b>
												<ul class="social-icon">
													<li><a href="javascript:void(0)"><span class="icon_phone color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_facebook color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_twitter color-icon" aria-hidden="true"></span></a></li>
													<li><a href="javascript:void(0)"><span class="social_googleplus color-icon" aria-hidden="true"></span></a></li>
												</ul>
											</div>
										</div>
										<table class="table user-info">
											<tr>
												<th class="text-info col-md-3">Email:</th>
												<td>
													<span>abc@yahoo.com</span>
													<div class="form-group form-material floating">
														<input type="email" class="form-control" name="inputFloating" value="abc@yahoo.com">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Call on:</th>
												<td>
													<span>123 456 789</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="123 456 789">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Birth-date:</th>
												<td>
													<span>15-05-1990</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="15-05-1990">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Company:</th>
												<td>
													<span>Google</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Google">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Position:</th>
												<td>
													<span>Assistant Manager</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="Assistant Manager">
													</div>
												</td>
											</tr>
											<tr>
												<th class="text-info">Country:</th>
												<td>
													<span>USA</span>
													<div class="form-group form-material floating">
														<input type="text" class="form-control" name="inputFloating" value="USA">
													</div>
												</td>
											</tr>
										</table>
										<button type="button" data-toggle="edit" class="btn btn-info btn-sm waves-effect waves-light btn-contact-edit edit">Edit </button>
										<button type="button" class="btn btn-info btn-sm waves-effect waves-light pull-left">Delete </button>
									</div>
									<div class="padding-10 tab-pane animation-slide-right" id="new-contact" role="tabpanel">
										<a class="full padding-bottom-20"><img src="" class="contact-pic" alt="image"></a>
										<form autocomplete="off">
											<div class="validate contact-form">
												<div class="form-group form-material material floatlabl">
													<input type="text" class="form-control empty" name="inputFloatingEmail">
													<label class="control-label">Full Name</label>
												</div>
												<div class="form-group form-material material floatlabl">
													<input type="email" class="form-control empty">
													<label class="control-label">Email</label>
												</div>
												<div class="form-group form-material material floatlabl">
													<input type="text" class="form-control empty">
													<label class="control-label">Contact Number</label>
												</div>
												<div class="form-group form-material material floatlabl">
													<input type="text" class="form-control empty">
													<label class="control-label">Country</label>
												</div>
												<div class="text-right">
													<button type="submit" class="btn btn-info">Save</button>
													<button type="submit" class="btn btn-info" onclick="close()">Close</button>
												</div>
											</div>
										</form>
									</div>
									<!-- End Profile Detail -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('page-template-js')
<script src="{{ asset('assets/js/material/material.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/contact/contact-custom.js') }}" type="text/javascript"></script>
@endsection
<script src="{{ asset('assets/js/message/chat-sticky.js') }}" type="text/javascript"></script>
	