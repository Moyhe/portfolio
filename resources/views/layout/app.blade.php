<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <script src="https://apis.google.com/js/platform.js"></script> --}}

    <title> Mohye Mahmoud portfolio </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Mohye Mahmoud portfolio to show my skills and projects.">

    <!-- Open Graph / Portfolio -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Mohye Mahmoud - Portfolio">
    <meta property="og:description" content="Mohye Mahmoud portfolio to show my skills and projects.">
    <meta property="og:image" content="{{ asset('images/portfolio.png') }}">

    <title>Mohye Mahmoud - portfolio</title>

    <!-- Styles -->

    @vite('resources/js/app.js')

</head>

<body class="text-gray-800 dark:text-gray-200">

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
        <x-layout.navbar></x-layout.navbar>
        {{ $slot }}
        <x-layout.footer></x-layout.footer>

    </div>
</body>

</html>
