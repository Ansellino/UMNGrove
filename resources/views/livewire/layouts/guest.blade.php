<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('Lembur Mangrove Patikang', 'Lembur Mangrove Patikang') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900">
        <!-- Full screen background with overlay -->
        <div class="fixed inset-0 z-0">
            <img src="{{ asset('images1/banner.webp') }}" alt="Background" class="object-cover w-full h-full">
            <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
        </div>

        <!-- Main content -->
        <div class="relative z-10 flex flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0">
            <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="text-white fill-current h-max w-max" />
                </a>
            </div>

            <div class="w-full px-6 py-4 mt-6 overflow-hidden shadow-xl bg-white/90 backdrop-blur-sm sm:max-w-md sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
