<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AdminLTE 3 | Blank Page</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('') }}plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('') }}dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
  @livewireStyles
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layouts.partials.navbar')
    @include('layouts.partials.sidebar')
    <div class="content-wrapper">

        @include('layouts.partials.content_header')

        <section class="content">

            {{ $slot }}


        </section>

    </div>
    @include('layouts.partials.footer')
    @include('layouts.partials.rightbar')
</div>


<script src="{{ asset('') }}plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('') }}dist/js/adminlte.min.js"></script>
{{--<script src="{{ asset('') }}dist/js/demo.js"></script>--}}
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
<script>
    $(document).ready(function () {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": true,
        }

        window.addEventListener('hide-form', event => {
            $('#user-create').modal('hide');
            toastr.success(event.detail.message,'Success');
        });
        window.addEventListener('hide-form', event => {
            $('#user-edit').modal('hide');
            toastr.success(event.detail.message,'Success');
        });
        window.addEventListener('hide-form', event => {
            $('#user-delete').modal('hide');
            toastr.success(event.detail.message,'Success');
        });
    });
</script>
<script>
    window.addEventListener('user-create-modal', event => {
        $('#user-create').modal('show');
    });
    window.addEventListener('user-edit-modal', event => {
        $('#user-edit').modal('show');
    });
    window.addEventListener('user-delete-modal', event => {
        $('#user-delete').modal('show');
    });



</script>
@livewireScripts
</body>
</html>
