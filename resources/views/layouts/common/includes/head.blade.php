<!-- Title -->
<title>@yield("title")</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon" />

<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Cairo:300,400&amp;subset=arabic,latin-ext" rel="stylesheet">
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
    .btn,
    .alert {
        font-family: 'Cairo', sans-serif;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .alert-info {
        color: #0c5461;
        background-color: #d1dce5;
        border-color: #c3d9e7;
    }
</style>
@yield('css')
<!--- Style css -->
@if (App::getLocale() == 'en')
<link href="{{ asset('assets/css/ltr.css') }}" rel="stylesheet">
<style>
    .scrollbar {
        overflow-x: hidden !important;
    }
</style>
@else
<link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
@endif
