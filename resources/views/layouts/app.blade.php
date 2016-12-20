<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta name="token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }} | @yield('title')</title>
        @include('partials.favicons')

        @include('partials.global-css')
        
        <!--  Page plugin CSS -->
        @yield('page-plugin-css')
        
        <!--  Page CSS -->
        @yield('page-css')
    </head>
    <body class="dashboard2 site-menu-left">
        @include('partials.header')

        @include('partials.left-menu')

        @yield('content')

        @include('partials.footer')

        @include('partials.global-js')

        @yield('page-plugin-js')

        @include('partials.global-template-js')

        @yield('page-js')

        @yield('page-template-js')

        @yield('scripts')

        <script>
            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
        </script>
    </body>
</html>
