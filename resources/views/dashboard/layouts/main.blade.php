
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PERCASI JATENG - {{ $title }}</title>

    <!-- Favicons -->
    <link href="{{ asset('img') }}/logo-percasi.png" rel="icon">
    <link href="{{ asset('img') }}/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte') }}/dist/css/adminlte.min.css">
    <!-- Additional meta tags -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    @stack('head')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
		@include('dashboard.layouts.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('dashboard.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!-- Content header goes here -->
                @yield('content-header')

            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Main content goes here -->
                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                Build with ✨ by <a href="https://github.com/rayvles?tab=repositories" target="_blank">Rajah Rayvles Pangkey</a>
            </div>
            <strong>Copyright &copy; Rajah Rayvles Pangkey <a href="https://github.com/rayvles?tab=repositories">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @stack('bottom')
    <!-- jQuery -->
    <script src="{{ asset('vendor/adminlte') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendor/adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/adminlte') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('vendor/adminlte') }}/dist/js/demo.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script>

        const logoutHandler = () => {
            Swal.fire({
                title: 'Logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d00',
                cancelButtonColor: '#0AC519',
                confirmButtonText: 'Logout',
            }).then((result) => {
                if (!result.isConfirmed) return;
                $('#logoutForm').submit();
            });
        }
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

    </script>
    @stack('script')
</body>

</html>
