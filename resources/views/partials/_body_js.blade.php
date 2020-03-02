
<!-- Scripts -->
<script src="{{ asset('js/backEnd-all.min.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>

@include('partials.app_message')

<script>
    $(document).ready(function() {

        demo.initDashboardPageCharts();

        $('#loading').fadeOut();
    });

</script>


@yield('body_bottom')
