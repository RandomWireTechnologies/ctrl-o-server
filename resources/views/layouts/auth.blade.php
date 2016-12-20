<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>{{ config('app.name') }} | @yield('title')</title>
		@include('partials.favicons')

        @include('partials.global-css')
        
        <!--  Page plugin CSS -->
        @yield('page-plugin-css')
        
        <!--  Page CSS -->
        @yield('page-css')
	</head>

	@yield('content')

	@yield('scripts')
	
	<script>
		$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
	</script>
</html>