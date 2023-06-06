<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SbcMedic</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/js/root.js'])
{{--    <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />--}}
{{--    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}" defer></script>--}}
{{--    <script defer--}}
{{--            src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&libraries=places"></script>--}}
</head>

<body>
@include('layouts.root.navbar')

<a href="https://wa.me/51919446233" class="action-float" target="_blank">
    <i class="fa-brands fa-whatsapp"></i>
</a>

@yield('content')

@include('layouts.root.footer')
</body>
</html>
