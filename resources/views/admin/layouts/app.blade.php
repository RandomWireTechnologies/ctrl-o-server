<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <title>{{ config('app.name') }} | @yield('title')</title>
        @include('admin.partials.favicons')

        @include('admin.partials.global-css')
        
        <!--  Page plugin CSS -->
        @yield('page-plugin-css')
        
        <!--  Page CSS -->
        @yield('page-css')
    </head>
    <body class="dashboard2 site-menu-left">
        @include('admin.partials.header')

        @include('admin.partials.left-menu')

        @yield('content')

        @include('admin.partials.footer')

        @include('admin.partials.global-js')

        @yield('page-plugin-js')

        @include('admin.partials.global-template-js')

        @yield('page-js')

        @yield('page-template-js')

    </body>
</html>
