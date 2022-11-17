<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">

        <title>Dashboard</title>

        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        {{-- <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script> --}}

        <!-- Scripts -->
        @vite(['public/dist/css/app.css', 'public/dist/js/app.js' ])
    </head>
    <body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">

            <!-- Page Heading -->
            @include('layouts.topbar')

            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    </body>
</html>
