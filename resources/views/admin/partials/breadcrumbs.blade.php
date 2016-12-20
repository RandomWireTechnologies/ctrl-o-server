<ol class="breadcrumb">
	<li><a href="{{ route('admin.index') }}">Dashboard</a></li>
	@foreach(bcs()->render() as $breadcrumb)
	@if($breadcrumb['route'] == 'last')
	<li class="active">{{ $breadcrumb['text'] }}</li>
	@else
	<li><a href="{{ route($breadcrumb['route']) }}">{{ $breadcrumb['text'] }}</a></li>
	@endif
	@endforeach
</ol>