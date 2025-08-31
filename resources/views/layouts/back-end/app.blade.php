<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{Session::get('direction')}}"
      style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->

    <title>@yield('title')</title>
    <meta name="_token" content="{{csrf_token()}}">
    <!--to make http ajax request to https-->
    <!--    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ asset('assets/back-end/assets/css/fancybox.css') }}" rel="stylesheet">
    @php($colors = \App\Models\BusinessSetting::where(['type'=>'colors'])->first())
    @php($data=json_decode($colors['value']))
    <style>
        :root{
            --primary-color : {!! $data->primary !!};
            --secondary-color : {!! $data->secondary !!};
        }
    </style>

    <!-- Fontfamily -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/back-end/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/back-end/assets/plugins/feather/feather.css') }}">

    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/back-end/assets/plugins/icons/flags/flags.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/back-end/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/back-end/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/select2/css/select2.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/back-end/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('assets/back-end/css/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <link href="{{ asset('assets/back-end/js/tailwind.min.js') }}" rel="stylesheet">
    @stack('css_or_js')
</head>
<body>
@include('layouts.back-end.partials._front-settings')
<!-- Main Wrapper -->
<div class="main-wrapper">

    @include('layouts.back-end.partials._header')

    @include('layouts.back-end.partials._side-bar')

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">
            <!-- Content -->
            @yield('content')
            <!-- End Content -->
        </div>

        <!-- Footer -->
        @include('layouts.back-end.partials._footer')
        <!-- End Footer -->

    </div>
    <!-- /Page Wrapper -->


    @include('layouts.back-end.partials._modals')
</div>
<!-- /Main Wrapper -->
@if ($errors->any())
    <script>
        @foreach($errors->all() as $error)
        @endforeach
    </script>
@endif
<audio id="myAudio">
    <source src="{{asset('assets/back-end/sound/notification.mp3')}}" type="audio/mpeg">
</audio>
<!-- jQuery -->
<script src="{{ asset('assets/back-end/assets/js/jquery-3.6.0.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('assets/back-end/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Feather Icon JS -->
<script src="{{ asset('assets/back-end/assets/js/feather.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/back-end/assets/css/bootstrap-datetimepicker.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/back-end/assets/plugins/datatables/datatables.css') }}">

<!-- Slimscroll JS -->
<script src="{{ asset('assets/back-end/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>


<script src="{{ asset('assets/back-end/assets/js/fancybox.umd.js') }}" ></script>
<script src="{{ asset('assets/back-end/assets/plugins/select2/js/select2.min.js') }}"></script>
{{--<script src="{{ asset('assets/back-end/vendor/datatables/jquery.dataTables.js') }}"></script>--}}
{{--<script src="{{ asset('assets/back-end/vendor/datatables/jquery.dataTables.min.js') }}"></script>--}}
<script src="{{ asset('assets/back-end/assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/back-end/assets/js/bootstrap-datetimepicker.min.js') }}"></script>

@stack('script')

<!-- Custom JS -->
<script src="{{ asset('assets/back-end/assets/js/script.js') }}"></script>
<script src="{{ asset('assets/back-end/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/back-end/js/all.min.js') }}"></script>
<script src="{{asset('assets/back-end/js/toastr.js')}}"></script>
<script src="{{asset('assets/back-end/js/app.js')}}"></script>
@stack('script_2')
<script src="{{asset('assets/js/lightbox.min.js')}}"></script>
<script>
    function form_alert(id, message) {
        Swal.fire({
            title: '{{__('Are you sure')}}?',
            text: message,
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'No',
            confirmButtonText: 'Yes',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $('#' + id).submit()
            }
        })
    }
    @if(\App\CPU\Helpers::module_permission_check('order_management') && env('APP_MODE')!='dev')
    setInterval(function () {
        $.get({
            url: '{{route('admin.get-order-data')}}',
            dataType: 'json',
            success: function (response) {
                let data = response.data;
                if (data.new_order > 0) {
                    playAudio();
                    $('#popup-modal').appendTo("body").modal('show');
                }
            },
        });
    }, 10000);
    @endif

    function check_order() {
        location.href = '{{route('admin.orders.list',['status'=>'all'])}}';
    }
    function formUrlChange(t){
        let action = $(t).data('action');
        $('#form-data').attr('action', action);
    }
</script>
</body>
</html>
