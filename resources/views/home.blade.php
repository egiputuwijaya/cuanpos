<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'CuanPOS') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-800">

    <x-layout.navbar />

    <main>

        <x-home.hero />

        <x-home.features />
        <x-home.benefits />
        <x-home.testimonial />


    </main>

    <x-layout.footer />

    @livewireScripts
</body>

</html>
