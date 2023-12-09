<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Cairo:300,400&amp;subset=arabic,latin-ext" rel="stylesheet">
    @yield('css')

    <!-- css -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/plugins/toastr.css') }}" rel="stylesheet">
    @if (App::getLocale() == 'en')
    <link href="{{ URL::asset('assets/css/ltr.css') }}" rel="stylesheet">
    <style>
        html,
        body,
        a,
        i,
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        table,
        input,
        button,
        .btn,
        .alert {
            font-family: 'Cairo', sans-serif;
             !important;
        }
    </style>
    @else
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
    <style>
        html,
        body,
        a,
        i,
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        table,
        input,
        button,
        .btn,
        .alert {
            font-family: 'Cairo', sans-serif;
             !important;
        }
    </style>
    @endif
</head>

<body>
    <!-- Start Wrapper -->
    <div class="wrapper">