@extends('demo.layouts.app')
@section('title', 'Email')

@section('content')
<div class="main-content">
	<div class="page-header">
		<div class="header-left-panel">
			<!--  Title Page -->
			<h1 class="page-title">Email</h1>
			<!--  Breadcrumb Section -->
			<ol class="breadcrumb">
				<li><a href="{{ route('demo.index') }}">Home</a></li>
				<li class="text-info">General Pages</li>
				<li class="active">Email</li>
			</ol>
		</div>
	</div>
	<div class="page-content container-fluid">
		<div class="panel">
			<div class="email-logo panel-title info-back">
				<!--  Logo Section -->
				<img src="{{ asset('assets/images/logo.png') }}" class="logo-email" title="Porish" alt="logo">
				<!--  Phone no -->
				<h3>Call Us : 1800-123-4567</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<!--  Logo Section -->
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="box-email">
							<a href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Ipsum feugiat et dolor" /></a>
							<h3 class="email-font text-info">Ipsum feugiat et dolor</h3>
							<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus.</p>
							<button type="button" class="btn btn-info waves-effect waves-light email-btn">Read More</button>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="box-email">
							<a href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Sed etiam lorem nulla" /></a>
							<h3 class="email-font text-info">Sed etiam lorem nulla</h3>
							<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus.</p>
							<button type="button" class="btn btn-info waves-effect waves-light email-btn">Read More</button>
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="box-email">
							<a href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Ipsum feugiat et dolor" /></a>
							<h3 class="email-font text-info">Ipsum feugiat et dolor</h3>
							<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus.</p>
							<button type="button" class="btn btn-info waves-effect waves-light email-btn">Read More</button>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="box-email">
							<a href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Sed etiam lorem nulla" /></a>
							<h3 class="email-font text-info">Sed etiam lorem nulla</h3>
							<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus.</p>
							<button type="button" class="btn btn-info waves-effect waves-light email-btn">Read More</button>
						</div>
					</div>
				</div>
				<div class="major-line">
					<h3>My Portfolio</h3>
				</div>
				<div class="row">
					<!--  Start Portfolio Box -->
					<div class="col-lg-4 col-sm-4 col-xl-6">
						<div class="box-email">
							<a href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Ipsum feugiat et dolor" /></a>
							<h3 class="email-font text-info">Ipsum feugiat et dolor</h3>
							<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus.</p>
							<button type="button" class="btn btn-info waves-effect waves-light email-btn">Read More</button>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 col-xl-6">
						<div class="box-email">
							<a href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Sed etiam lorem nulla" /></a>
							<h3 class="email-font text-info">Sed etiam lorem nulla</h3>
							<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus.</p>
							<button type="button" class="btn btn-info waves-effect waves-light email-btn">Read More</button>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 col-xl-6">
						<div class="box-email">
							<a href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Consequat et tempus" /></a>
							<h3 class="email-font text-info">Consequat et tempus</h3>
							<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus.</p>
							<button type="button" class="btn btn-info waves-effect waves-light email-btn">Read More</button>
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-4 col-sm-4 col-xl-6">
						<div class="box-email">
							<a href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Blandit sed adipiscing" /></a>
							<h3 class="email-font text-info">Blandit sed adipiscing</h3>
							<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus.</p>
							<button type="button" class="btn btn-info waves-effect waves-light email-btn">Read More</button>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 col-xl-6">
						<div class="box-email">
							<a href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Etiam nisl consequat" /></a>
							<h3 class="email-font text-info">Etiam nisl consequat</h3>
							<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus.</p>
							<button type="button" class="btn btn-info waves-effect waves-light email-btn">Read More</button>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 col-xl-6">
						<div class="box-email">
							<a href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Dolore nisl feugiat" /></a>
							<h3 class="email-font text-info">Dolore nisl feugiat</h3>
							<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus.</p>
							<button type="button" class="btn btn-info waves-effect waves-light email-btn">Read More</button>
						</div>
					</div>
					<!--  End Portfolio Box -->
				</div>
				<div class="major-line">
					<h3>The Blog</h3>
				</div>
				<div class="row">
					<div class="box-email">
						<!--  Start Blog Box -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="blog-list">
								<a class="inline-block" href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Ipsum feugiat et dolor" /></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="blog-list">
								<a class="inline-block" href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Ipsum feugiat et dolor" /></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="blog-list">
								<a class="inline-block" href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Ipsum feugiat et dolor" /></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="blog-list">
								<a class="inline-block" href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Ipsum feugiat et dolor" /></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="blog-list">
								<a class="inline-block" href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Ipsum feugiat et dolor" /></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="blog-list">
								<a class="inline-block" href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Ipsum feugiat et dolor" /></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="blog-list">
								<a class="inline-block" href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Ipsum feugiat et dolor" /></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="blog-list">
								<a class="inline-block" href="javascript:void(0)"><img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="Ipsum feugiat et dolor" /></a>
							</div>
						</div>
						<!--  End Blog Box -->
					</div>
				</div>
				<div class="text-center">
					<p>youremail@gmail.com to <a class="email-unsubscribe" href="javascript:void(0)">unsubscribe</a></p>
					<!--  Social Icon -->
					<ul class="social-icon">
						<li><a href="javascript:void(0)"><span class="social_facebook color-icon" aria-hidden="true"></span></a></li>
						<li><a href="javascript:void(0)"><span class="social_twitter color-icon" aria-hidden="true"></span></a></li>
						<li><a href="javascript:void(0)"><span class="social_googleplus color-icon" aria-hidden="true"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
	
