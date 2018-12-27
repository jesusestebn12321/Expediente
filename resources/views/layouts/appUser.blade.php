<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel')}}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ asset('fonts/css/font-awesome.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin-lte/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/datatables/dataTables.bootstrap.css"') }}">
    <link rel="stylesheet" href="{{ asset('admin-lte/dist/css/skins/_all-skins.min.css') }}">
	<script src="{{asset('sweetalert/docs/assets/sweetalert/sweetalert.min.js')}}"></script>
    
    <link href="{{ asset('plugins/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/css/mainUser.css') }}" rel="stylesheet">
    

</head>
<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            @include('layouts.header.header')
        </header>
        <aside class="main-sidebar">
            @include('layouts.sidebar.sidebar')
        </aside>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            @include('layouts.footer.footer')
        </footer>
    </div>

<!-- jQuery 2.2.3 -->
{{-- <script src="{{ asset('js/app.js')}}"></script> --}}
<script src="{{ asset('admin-lte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('admin-lte/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('admin-lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin-lte/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('admin-lte/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin-lte/dist/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin-lte/dist/js/pages/dashboard.js')}}"></script>
<script src="{{ asset('plugins/js/main.js')}}"></script>
@yield('js')

</body>
</html>
