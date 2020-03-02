<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/backEnd-all.min.css') }}" rel="stylesheet">
</head>
<body class="white-content">
    <div id="app" class="wrapper wrapper-full-page ">
        <div class="full-page login-page ">
            <div class="content">
                <div class="container-fluid">
                    <div class="row justify-content-around align-items-center">
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto tw-mt-100">

                            <div class="logo-container mb-5">
                                <img src="{{ asset('assets/img/droplens_logo.png') }}" alt="" class="img-fluid">
                            </div>

                            <div>
                                @yield('content')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{--<div class="container-fluid">
            <div class="row row-eq-height h-100">
                <div class="col-md-4">

                </div>
            </div>
        </div>--}}
    </div>


    @include('partials._body_js')
</body>
</html>
