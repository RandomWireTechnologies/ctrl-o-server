@extends('demo.layouts.app')
@section('title', 'Invoice')

@section('page-css')
<link href="{{ asset('assets/css/footable/footable.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/invoice/invoice-print.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	<div class="page-header">
		<div class="header-left-panel">
			<!--  Title Page -->
			<h1 class="page-title">Invoice</h1>
			<!--  Breadcrumb Section -->
			<ol class="breadcrumb">
				<li><a href="{{ route('demo.index') }}">Home</a></li>
				<li class="text-info">General Pages</li>
				<li class="active">Invoice</li>
			</ol>
		</div>
	</div>
	<div class="page-content invoice container-fluid">
		<div class="panel">
			<div id="ele3" class="a">
				<div class="panel-body">
					<div class="row">
						<!--  Logo Template -->
						<div class="col-md-9 col-sm-6 col-xs-3 logo-center">
							<img class="logo-size" src="{{ asset('assets/images/login.png') }}" alt="logo">
						</div>
					</div>
					<div class="row invoice-info">
						<div class="col-md-4 col-sm-4">
							<div class="panel panel-alt">
								<!--  Bill Section -->
								<div class="panel-heading">
									<span class="panel-title"> Bill To:</span>
								</div>
								<div class="panel-body padding-bottom-20">
									<ul class="bill-box-invoice">
										<li><strong>John Ochoa</strong></li>
										<li>Phone: (123) 456-7890</li>
										<li>Email: info@mail.com</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="panel panel-alt">
								<!--  Bill Ship -->
								<div class="panel-heading">
									<span class="panel-title"> Ship To:</span>
								</div>
								<div class="panel-body padding-bottom-20">
									<ul class="bill-box-invoice">
										<li><strong>Broadway Avenue</strong></li>
										<li>Long drive, 12345</li>
										<li>New York, NY 12345</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="panel panel-alt">
								<!--  Invoice Detail Section -->
								<div class="panel-heading">
									<span class="panel-title"> Invoice Details: </span>
									<div class="panel-btns pull-right ml10"></div>
								</div>
								<div class="panel-body padding-bottom-20">
									<ul class="bill-box-invoice">
										<li><b>Invoice #:</b> INV0123</li>
										<li><b>Invoice Date:</b> 01 JULY 2016</li>
										<li><b>Due Date:</b> 04 JULY 2016</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="table-responsive table-margin">
						<!--  Start Detail Product Section -->
						<table class="table table-bordered table-hover toggle-circle margin-bottom-0" id="pageFootableFiltering">
							<thead>
								<tr>
									<th data-toggle="true" class="text-center">#</th>
									<th>DESCRIPTION</th>
									<th data-hide="phone, tablet">QUANTITY</th>
									<th data-hide="phone, tablet">RATE</th>
									<th data-hide="phone, tablet">PRICE</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">
										1
									</td>
									<td>
										Website Design
									</td>
									<td>
										3
									</td>
									<td>
										$1,000
									</td>
									<td>
										$3,000
									</td>
								</tr>
								<tr>
									<td class="text-center">
										2
									</td>
									<td>
										Logo Design
									</td>
									<td>
										5
									</td>
									<td>
										$500
									</td>
									<td>
										$2,500
									</td>
								</tr>
								<tr>
									<td class="text-center">
										3
									</td>
									<td>
										Application Design
									</td>
									<td>
										2
									</td>
									<td>
										$2,000
									</td>
									<td>
										$4,000
									</td>
								</tr>
								<tr>
									<td class="text-center">
										4
									</td>
									<td>
										Application Development
									</td>
									<td>
										3
									</td>
									<td>
										$1,500
									</td>
									<td>
										$4,500
									</td>
								</tr>
								<tr>
									<td class="text-center">
										5
									</td>
									<td>
										Php Development
									</td>
									<td>
										8
									</td>
									<td>
										$2,200
									</td>
									<td>
										$3,700
									</td>
								</tr>
							</tbody>
						</table>
						<!--  End Detail Product Section  -->
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 pull-left">
							<!--  Sign Section  -->
							<p class="text-left autho-sign-invoice">Authorized Sign</p>
							<p class="text-left"><img class="img-responsive sign-invoice" src="{{ asset('assets/images/invoice/signature.png') }}" alt="signature" width="130" height="130"></p>
							<p class="text-left margin-bottom-0"><strong>John Ochoa</strong></p>
							<p class="text-left">Web Developer</p>
						</div>
						<div class="col-md-5 col-lg-3 col-sm-5 col-xs-12 pull-right total-section">
							<!--  Start Total Section  -->
							<div class="panel page-total">
								<p>Sub Amount:
									<span>$17,700</span>
								</p>
								<p>Tax:
									<span>$40</span>
								</p>
								<p class="invoice-total text-info">Grand Total:
									<span>$17,740</span>
								</p>
								<button type="submit" onclick="jQuery.print('#ele3')" class="print-link btn w-icon btn-info btn-animate btn-animate-side waves-effect margin-bottom-5">
								<span><i class="icon icon_printer" aria-hidden="true"></i>Print</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
		
@section('page-plugin-js')
<script src="{{ asset('assets/js/footable/footable.all.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/footable/footable.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/invoice-print/jQuery.print.js') }}" type="text/javascript"></script>
@endsection