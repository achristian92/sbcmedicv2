<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SbcMedic</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    @vite(['resources/js/root.js'])
{{--    <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />--}}
{{--    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}" defer></script>--}}
{{--    <script defer--}}
{{--            src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&libraries=places"></script>--}}
</head>

<body>
@include('layouts.root.navbar')

@yield('content')

@include('layouts.root.footer')
</body>
</html>
