@extends('demo.layouts.app')
@section('title', 'Gallery')

@section('page-plugin-css')
<link rel="stylesheet" href="{{ asset('assets/plugin/magnific-popup/css/magnific-popup.min.css') }}" />
@endsection

@section('content')	
<!-- Start Contain Section -->
<div class="main-content">
	<div class="page-header">
		<div class="header-left-panel">
			<!--  Title Page -->
			<h1 class="page-title">Gallery</h1>
			<!--  Breadcrumb Section -->
			<ol class="breadcrumb">
				<li><a href="{{ route('demo.index') }}">Home</a></li>
				<li class="text-info">General Pages</li>
				<li class="active">Gallery</li>
			</ol>
		</div>
	</div>
	<div class="page-content gallary">
		<div class="filters-li-group">
			<ul class="nav nav-tabs nav-tabs-line margin-bottom-15 li-group hover-none" role="tablist">
				<!--  Gallery Navigation -->
				<li role="presentation" class="active">
					<a href="#gallerylistlist"  data-filter="*" aria-controls="gallerylist" role="tab"
						data-toggle="tab">All</a>
				</li>
				<li role="presentation">
					<a data-filter=".cloud" href="#gallerylist" role="tab" data-toggle="tab" aria-controls="gallerylist">Cloud</a>
				</li>
				<li role="presentation">
					<a data-filter=".flower" href="#gallerylist" role="tab" data-toggle="tab" aria-controls="gallerylist">Flower</a>
				</li>
				<li role="presentation">
					<a data-filter=".nature" href="#gallerylist" role="tab" data-toggle="tab" aria-controls="gallerylist">Nature</a>
				</li>
				<li role="presentation">
					<a data-filter=".other" href="#gallerylist" role="tab" data-toggle="tab" aria-controls="gallerylist">Other</a>
				</li>
			</ul>
		</div>
		<div class="row filter-gallery tab-content padding-0" id="gallerylist">
			<!-- Start Gallery Box Section -->
			<div class="grid">
				<figure class="effect-layla element-item cloud">
					<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
					<figcaption class="inner-middle">
						<div class="overlap-panel overlap-background overlap-fade overlap-icon v-align">
							<div class="align-middle">
								<div class="inner-middle">
									<h4 class="data-title titlehover">Cloud</h4>
									<a class="icon icon_search " href="{{ asset('assets/images/media/img_720x480.jpg') }}"></a>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure class="effect-layla element-item cloud nature">
					<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
					<figcaption>
						<div class="overlap-panel overlap-background overlap-fade overlap-icon v-align">
							<div class="align-middle">
								<div class="inner-middle">
									<h4 class="data-title titlehover">Cloud,Nature</h4>
									<a class="icon icon_search " href="{{ asset('assets/images/media/img_720x480.jpg') }}"></a>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure class="effect-layla element-item other">
					<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
					<figcaption>
						<div class="overlap-panel overlap-background overlap-fade overlap-icon v-align">
							<div class="align-middle">
								<div class="inner-middle">
									<h4 class="data-title titlehover">Other</h4>
									<a class="icon icon_search " href="{{ asset('assets/images/media/img_720x480.jpg') }}"></a>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure class="effect-layla element-item other">
					<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
					<figcaption>
						<div class="overlap-panel overlap-background overlap-fade overlap-icon v-align">
							<div class="align-middle">
								<div class="inner-middle">
									<h4 class="data-title titlehover">Other</h4>
									<a class="icon icon_search " href="{{ asset('assets/images/media/img_720x480.jpg') }}"></a>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure class="effect-layla element-item nature">
					<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
					<figcaption>
						<div class="overlap-panel overlap-background overlap-fade overlap-icon v-align">
							<div class="align-middle">
								<div class="inner-middle">
									<h4 class="data-title titlehover">Nature</h4>
									<a class="icon icon_search " href="{{ asset('assets/images/media/img_720x480.jpg') }}"></a>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure class="effect-layla element-item other">
					<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
					<figcaption>
						<div class="overlap-panel overlap-background overlap-fade overlap-icon v-align">
							<div class="align-middle">
								<div class="inner-middle">
									<h4 class="data-title titlehover">Other</h4>
									<a class="icon icon_search " href="{{ asset('assets/images/media/img_720x480.jpg') }}"></a>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure class="effect-layla element-item flower">
					<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
					<figcaption>
						<div class="overlap-panel overlap-background overlap-fade overlap-icon v-align">
							<div class="align-middle">
								<div class="inner-middle">
									<h4 class="data-title titlehover">Flower</h4>
									<a class="icon icon_search " href="{{ asset('assets/images/media/img_720x480.jpg') }}"></a>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure class="effect-layla element-item cloud nature">
					<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
					<figcaption>
						<div class="overlap-panel overlap-background overlap-fade overlap-icon v-align">
							<div class="align-middle">
								<div class="inner-middle">
									<h4 class="data-title titlehover">Cloud, Nature</h4>
									<a class="icon icon_search " href="{{ asset('assets/images/media/img_720x480.jpg') }}"></a>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure class="effect-layla element-item other">
					<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
					<figcaption>
						<div class="overlap-panel overlap-background overlap-fade overlap-icon v-align">
							<div class="align-middle">
								<div class="inner-middle">
									<h4 class="data-title titlehover">Other</h4>
									<a class="icon icon_search " href="{{ asset('assets/images/media/img_720x480.jpg') }}"></a>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure class="effect-layla element-item other">
					<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
					<figcaption>
						<div class="overlap-panel overlap-background overlap-fade overlap-icon v-align">
							<div class="align-middle">
								<div class="inner-middle">
									<h4 class="data-title titlehover">Other</h4>
									<a class="icon icon_search" href="{{ asset('assets/images/media/img_720x480.jpg') }}"></a>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure class="effect-layla element-item flower">
					<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
					<figcaption>
						<div class="overlap-panel overlap-background overlap-fade overlap-icon v-align">
							<div class="align-middle">
								<div class="inner-middle">
									<h4 class="data-title titlehover">Flower</h4>
									<a class="icon icon_search " href="{{ asset('assets/images/media/img_720x480.jpg') }}"></a>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure class="effect-layla element-item nature">
					<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
					<figcaption>
						<div class="overlap-panel overlap-background overlap-fade overlap-icon v-align">
							<div class="align-middle">
								<div class="inner-middle">
									<h4 class="data-title titlehover">Nature</h4>
									<a class="icon icon_search " href="{{ asset('assets/images/media/img_720x480.jpg') }}"></a>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<!-- End Gallery Box Section -->
		</div>
	</div>
</div>
<!-- End Contain Section -->
@endsection
		
@section('page-template-js')
<!-- Page Template JavaScript -->
<script src="{{ asset('assets/js/gallery/imagesloaded.pkgd.js') }}"></script>
<script src="{{ asset('assets/js/gallery/isotope.min.js') }}"></script>
<script src="{{ asset('assets/plugin/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/gallery/gallery.min.js') }}"></script>
<script src="{{ asset('assets/js/gallery/isotop-custom.js') }}"></script>
@endsection