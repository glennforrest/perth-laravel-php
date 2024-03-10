<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @googlefonts

    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-black text-white font-sans font-medium">
    <x-banner />

    <x-nav />

    {{ $slot }}

    <x-footer />
</body>

</html>
