<script type="text/javascript">

    @if(Session::has('success'))
        Snackbar.show({text: '{{ Session::get('success') }}', pos: 'bottom-right', duration: 10000});
    @endif

    @if(Session::has('errors'))
        @if(is_string(Session::get('errors')))
            Snackbar.show({text: '{{ Session::get('errors') }}', pos: 'bottom-right', backgroundColor : '#B00020', actionTextColor: '#fff', duration: 10000});
        @else
            Snackbar.show({text: '{{ Session::get('errors')->first() }}', pos: 'bottom-right', backgroundColor : '#B00020', actionTextColor: '#fff', duration: 10000});
        @endif
    @endif

    {{--@if(isset($errors) && $errors->any())
        Snackbar.show({text: '{{ $errors->first() }}', pos: 'bottom-center'});
    @endif--}}

</script>
