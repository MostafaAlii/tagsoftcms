<!DOCTYPE html>
<html lang="ar" dir="rtl">
<!-- Mirrored from maestrolux.vercel.app/agency/ar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Dec 2023 12:46:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Alexstrap Agency - HTML5 Bootstrap Landing Page Template" />
    <meta name="viewport" content="minimum-scale=1,initial-scale=1,width=device-width,shrink-to-fit=no" />
    <!-- Favicon-->
    <link rel="shortcut icon" href="#" />
    <link rel="apple-touch-icon" sizes="57x57"
        href="{{ asset('assets/website/resources/assets/favicons/apple-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60"
        href="{{ asset('assets/website/resources/assets/favicons/apple-icon-60x60.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('assets/website/resources/assets/favicons/apple-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset('assets/website/resources/assets/favicons/apple-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('assets/website/resources/assets/favicons/apple-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('assets/website/resources/assets/favicons/apple-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('assets/website/resources/assets/favicons/apple-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('assets/website/resources/assets/favicons/apple-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/website/resources/assets/favicons/apple-icon-180x180.png') }}" />
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/website/resources/assets/favicons/android-icon-192x192.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/website/resources/assets/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('assets/website/resources/assets/favicons/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/website/resources/assets/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/website/resources/assets/favicons/manifest.json') }}" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage"
        content="{{ asset('assets/website/resources/assets/favicons/ms-icon-144x144.png') }}" />
    <!-- PWA primary color-->
    <meta name="theme-color" content="#2196f3" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="{{ asset('assets/website/resources/assets/css/ionicons.min.css') }}" />
    <!-- Facebook-->
    <meta property="author" content="luxi" />
    <meta property="og:site_name" content="alexstrap.ux-maestro.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <!-- Twitter-->
    <meta property="twitter:site" content="luxi.ux-maestro.com" />
    <meta property="twitter:domain" content="luxi.ux-maestro.com" />
    <meta property="twitter:creator" content="luxi" />
    <meta property="twitter:card" content="summary" />
    <meta property="og:title" content="Agency Project" />
    <meta property="og:description" content="Alexstrap Agency - HTML5 Bootstrap Landing Page Template" />
    <meta name="twitter:site" content="alexstrap.ux-maestro.com/agency" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <title>{{ trans('website.general_name') }} | @yield('title')</title>
    <!-- Styles-->
    <link href="{{ asset('assets/website/assets/css/side-right.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/website/resources/assets/css/agency-bundle-rtl.min.css') }}" rel="stylesheet" />
    @yield('css')
</head>

<body>
    <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%;">
        <img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px);"
            src="{{ asset('assets/website/resources/assets/images/loading.gif') }}" alt="loading" />
    </div>
    <!-- Start m-application -->
    <div class="m-application theme--light transition-page" id="app">
        <div class="loading"></div>
