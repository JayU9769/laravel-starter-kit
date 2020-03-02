
@include('partials._body_header')

@yield('custom_css')

<body class="white-content">


<div id="app" class="wrapper">
    <div id="loading">
        <div class="loader">
            Loading...
        </div>
    </div>

    @include('partials._body_sidebar')

    {{-- Main section starts here --}}
    <div class="main-panel">

        @include('partials._body_navbar')


        @include('partials._body_content')


        @include('partials._body_footer')

    </div>
    {{-- Main section ends here --}}

</div>


@include('partials._body_js')


</body>
