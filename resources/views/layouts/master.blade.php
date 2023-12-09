<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.common.includes.head')
    @livewireStyles
</head>

<body>
    <div class="wrapper">
        <!--================================= preloader -->
        <div id="pre-loader">
            <img src="{{ asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
        </div>
        <!--================================= preloader -->
        @include('layouts.common.includes.main-header')
        @include('layouts.common.includes.main-sidebar')
        <!--================================= Main content -->
        <!-- main-content -->
        <div class="content-wrapper" style="overflow: hidden; width: auto !important;">
            @yield('page-header')
            @yield('content')
            @include('layouts.common.includes.footer')
        </div>
        <!-- main content wrapper end-->
    </div>

    <!--================================= footer -->

    @include('layouts.common.includes.footer-scripts')
    @livewireScripts
</body>

</html>
