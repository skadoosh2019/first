<!doctype html>
<html lang="{{ config('app.locale') }}" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Securitief </title>
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/icon?family=Material+Icons%7CPlayfair+Display:400,400i,700%7CRoboto+Condensed:400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="{{ asset('css/night-gold-orange.css') }}" rel="stylesheet" id="crypto-stylesheet"/>
{{--    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="crypto-stylesheet"/>--}}
    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/corporate.css') }}"> -->
@yield('css_after')
<!-- Scripts -->
    <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
</head>
<body class="mdc-typography pace-on mdc-theme--background crypro-theme-gradient">
@include('component/loader')

<div class="crypto-wrapper">
@include('component/navbar')
@yield('content')

<!-- END Main Container -->
    <!-- END Page Container -->
    <!-- Codebase Core JS -->
    <!-- Laravel Scaffolding JS -->
    @include('component/switch')
    <script src="{{ asset('js/material-components-web.min.js') }}" type="text/javascript"></script>
    <script>mdc.autoInit()</script>
    <script src="{{ asset('js/marquee3k.js') }}" type="text/javascript"></script>
    <script>Marquee3k.init()</script>
    <script data-pace-options='{ "ajax": false, "restartOnRequestAfter": false}' src="{{ asset('js/pace.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('js/apexcharts.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/partials/switcher.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            let themeID = sessionStorage.getItem('crypto-html-theme');
            
            if(themeID == 'light-purple-red'){
                document.getElementById('logo_img').src="../../../images/small-secuiritiif.png";
            }
            if(themeID == 'night-gold-orange'){
                document.getElementById('logo_img').src="../../../images/small-white-secuiritiif.png";
            }
        });
    </script>
@yield('js_after')
</body>
</html>
