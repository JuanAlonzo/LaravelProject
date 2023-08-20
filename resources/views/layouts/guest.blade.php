<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-black antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 selection:bg-red-500 selection:text-white">
            
            <div class="w-full sm:max-w-md mt-6 px-8 py-6 bg-yellow-300 shadow-md overflow-hidden sm:rounded-lg">
                <div class="text-center p-4">
                    <a href="/">
                        <x-custom-logo class="block" />
                    </a>
                </div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>