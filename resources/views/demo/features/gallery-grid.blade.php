@extends('demo.layouts.app')
@section('title', 'Gallery Grid')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	<div class="page-header">
		<div class="header-left-panel">
			<!--  Title Page -->
			<h1 class="page-title">Gallery grid</h1>
			<ol class="breadcrumb">
				<!--  Breadcrumb Section -->
				<li><a href="{{ route('demo.index') }}">Home</a></li>
				<li class="text-info">General Pages</li>
				<li class="active">Gallery grid</li>
			</ol>
		</div>
	</div>
	<div class="page-content gallary-grid">
		<div class="panel">
			<div class="panel-body">
				<div class="row">
					<!-- Start Gallery Grid Box Section -->
					<div class="col-xs-12">
						<div class="row">
							<div class="grid">
								<figure class="effect-layla">
									<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
									<figcaption>
										<h2><span>Mi volutpat dignissim potenti.</span></h2>
										<p>08/07/2016</p>
										<button type="button" class="btn btn-info waves-effect waves-dark">SHOW MORE</button>
									</figcaption>
								</figure>
								<figure class="effect-layla">
									<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
									<figcaption>
										<h2><span>Aliquet venes dis dignissim.</span></h2>
										<p>22/04/2015</p>
										<button type="button" class="btn btn-info waves-effect waves-dark">SHOW MORE</button>
									</figcaption>
								</figure>
								<figure class="effect-layla">
									<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
									<figcaption>
										<h2><span>Vel Quam msas Pur tincidun.</span></h2>
										<p>05/03/2016</p>
										<button type="button" class="btn btn-info waves-effect waves-dark">SHOW MORE</button>
									</figcaption>
								</figure>
								<figure class="effect-layla">
									<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
									<figcaption>
										<h2><span>Adiping soles fames fames.</span></h2>
										<p>02/07/2014</p>
										<button type="button" class="btn btn-info waves-effect waves-dark">SHOW MORE</button>
									</figcaption>
								</figure>
								<figure class="effect-layla">
									<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
									<figcaption>
										<h2><span>Pede all tincidunt magnis.</span></h2>
										<p>07/07/2015</p>
										<button type="button" class="btn btn-info waves-effect waves-dark">SHOW MORE</button>
									</figcaption>
								</figure>
								<figure class="effect-layla">
									<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
									<figcaption>
										<h2><span>Primis quam fas in congue id.</span></h2>
										<p>09/10/2015</p>
										<button type="button" class="btn btn-info waves-effect waves-dark">SHOW MORE</button>
									</figcaption>
								</figure>
								<figure class="effect-layla">
									<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
									<figcaption>
										<h2><span>Elit lania dimst nulla platea.</span></h2>
										<p>01/01/2016</p>
										<button type="button" class="btn btn-info waves-effect waves-dark">SHOW MORE</button>
									</figcaption>
								</figure>
								<figure class="effect-layla">
									<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
									<figcaption>
										<h2><span>Dicmst primis dit venenatis.</span></h2>
										<p>19/12/2015</p>
										<button type="button" class="btn btn-info waves-effect waves-dark">SHOW MORE</button>
									</figcaption>
								</figure>
								<figure class="effect-layla">
									<img src="{{ asset('assets/images/media/img_720x480.jpg') }}" alt="img06" />
									<figcaption>
										<h2><span>Nunc dictum ptitor nullam sit.</span></h2>
										<p>25/05/2016</p>
										<button type="button" class="btn btn-info waves-effect waves-dark">SHOW MORE</button>
									</figcaption>
								</figure>
							</div>
						</div>
						<!--
							<div class="col-xs-12 col-lg-4 col-sm-6 padding-0">
							    <div class="left-panel">
							        <div class="cvr overlap overlap-hover">
							            <img class="cvr-image overlap-scale" src="{{ asset('assets/images/gallery/gallery10.jpg') }}" alt="gallery"> 
							            <div class="overlap-panel overlap-fade overlap-background overlap-background-fixed text-center v-align">
							                <div class="align-middle">
							                    <div class="inner-middle">
							                        <h3 class="data-title data-divider">Sed dictum eros pulvinar.</h3>
							                        <div class="data-time margin-bottom-20">
							                            <span>21/11/2015</span>
							                        </div>
							                        <button type="button" class="btn btn-info waves-effect waves-dark">SHOW MORE</button>
							                    </div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<div class="col-xs-12 col-lg-4 col-sm-6 padding-0">
							    <div class="left-panel">
							        <div class="cvr overlap overlap-hover">
							            <img class="cvr-image overlap-scale" src="{{ asset('assets/images/gallery/gallery11.jpg') }}" alt="gallery"> 
							            <div class="overlap-panel overlap-fade overlap-background overlap-background-fixed text-center v-align">
							                <div class="align-middle">
							                    <div class="inner-middle">
							                        <h3 class="data-title data-divider">Amet mstie potenti Massa.</h3>
							                        <div class="data-time  margin-bottom-20">
							                            <span>30/05/2016</span>
							                        </div>
							                        <button type="button" class="btn btn-info waves-effect waves-dark">SHOW MORE</button>
							                    </div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<div class="col-xs-12 col-lg-4 col-sm-6 padding-0">
							    <div class="left-panel">
							        <div class="cvr overlap overlap-hover">
							            <img class="cvr-image overlap-scale" src="{{ asset('assets/images/gallery/gallery12.jpg') }}" alt="gallery"> 
							            <div class="overlap-panel overlap-fade overlap-background overlap-background-fixed text-center v-align">
							                <div class="align-middle">
							                    <div class="inner-middle">
							                        <h3 class="data-title data-divider">Velit primis luctus platea.</h3>
							                        <div class="data-time  margin-bottom-20">
							                            <span>05/10/2015</span>
							                        </div>
							                        <button type="button" class="btn btn-info waves-effect waves-dark">SHOW MORE</button>
							                    </div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							-->
						<!-- End Gallery Grid Box Section -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Contain Section -->
@endsection
