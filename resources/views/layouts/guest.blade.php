<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'TarRPT') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <!--corpo das telas de auth-->
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col justify-center items-center bg-blue-200 bg-cover bg-center"
            style="background-image: url('{{ asset('images/4879.jpg') }}');">

            <!-- Logo -->
            <div class="mb-6 mt-6 flex justify-center">
                <img
                    src="{{ asset('images/target_logo.png') }}"
                    alt="Logo da Target"
                    class="h-28 w-auto drop-shadow-2xl transition-all duration-300"
                >
            </div>


            <!-- Card de Login -->
            <div class="w-full sm:max-w-md px-6 py-4 bg-blue-900/20 border border-blue-300 rounded-lg shadow-lg backdrop-blur-sm">
                {{ $slot }}
            </div>

        </div>
    </body>

</html>
