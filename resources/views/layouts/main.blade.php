<!doctype html>
<html lang="{{ config('app.locale') }}" class="no-focus"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"><title>Securitief</title><meta name="description" content="Securitief"><meta name="author" content="pixelcave"><meta name="robots" content="noindex, nofollow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/iofrm-style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/iofrm-theme10.css') }}" rel="stylesheet" type="text/css" />
    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/corporate.css') }}"> -->
@yield('css_after')
<!-- Scripts -->
    <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
</head>
<body>
<!-- Main Container -->
@yield('content')
<!-- END Main Container -->
<!-- END Page Container -->
<!-- Codebase Core JS -->
<!-- Laravel Scaffolding JS -->
@yield('js_before')

<script src="{{ asset('js/laravel.app.js') }}" type="text/js"></script>
<script src="{{ asset('js/jquery.min.js') }}" type="text/js"></script>
<script src="{{ asset('js/popper.min.js') }}" type="text/js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/js"></script>
<script src="{{ asset('js/main.js') }}" type="text/js"></script>
@yield('js_after')


</body>
</html>
