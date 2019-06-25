<!doctype html>
<html lang="{{ config('app.locale') }}" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Securitief</title>

    <meta name="description" content="Securitief">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{ mix('/css/codebase.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/register/register.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/register/1.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/register/2.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/register/3.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/register/4.css') }}" rel="stylesheet" type="text/css"/>
    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/corporate.css') }}"> -->
@yield('css_after')

<!-- Scripts -->
    <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
</head>
<body>
<div id="app">
    <div id="app-wrapper">
        <div class="app-container public light">

        @include('component/register/header')
        @include('component/register/progress')
        @yield('content')
        @include('component/register/footer')
        <!-- <div class="toaster-wrapper bottom_center gdpr-wrapper" style="bottom: 0px;"><div class="toaster toast-primary gdpr-wrapper" style="background-color: rgb(56, 155, 255); color: rgb(255, 255, 255);"><div class="container"><div class="set-gdpr-cookie"><div class="gdpr-message"><p>We use cookies to personalize content and ads, to provide social media features and to analyse our traffic. We also share information about your use of our site with our social media, advertising and analytics partners. For objecting to such cookies, please consult our
                                <a class="policy-link" href="/disclosures/privacy-policy">Cookie Policy</a></p></div><button type="button" class="accept-gdpr-button btn btn-link btn-lg">Accept</button></div></div></div></div> -->
        </div>
    </div>
</div>
<!-- END Page Container -->

<!-- Codebase Core JS -->
<!-- Laravel Scaffolding JS -->

<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

@yield('js_after')
</body>
</html>
