<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'My Contact App') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    {{-- Importing Navigation Menu --}}
    @include('components/nav')

    {{-- Exporting The Layout --}}
    @yield('applicaton_layout')

    {{-- Importing Footer --}}
    @include('components/footer')
</body>
</html>