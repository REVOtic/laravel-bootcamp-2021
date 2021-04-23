<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'My Contact App') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body class="admin-layout">
    {{-- Admin Template Wrapper --}}
    <div class="d-flex" id="wrapper">
        {{-- Importing Navigation Menu --}}
        @include('components/admin/sidenav')

        <!-- Page Content -->
        <div id="page-content-wrapper">
            {{-- Importing Navigation Menu --}}
            @include('components/admin/topnav')

            {{-- Exporting The Layout --}}
            @yield('admin_layout')

        </div>
        <!-- /#page-content-wrapper -->

        {{-- Importing Footer --}}
        @include('components/admin/footer')
    </div>
    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>