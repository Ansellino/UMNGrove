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

    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <!-- Main Container -->
    <div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-50">
        <livewire:layout.navigation />

        <!-- Main Content -->
        <main>
            <div class="mx-auto max-w-screen">
                <!-- Page Header -->
                @if (isset($header))
                    <header class="mb-8">
                        {{ $header }}
                    </header>
                @endif

                <!-- Content -->
                {{ $slot }}
            </div>
        </main>

        <!-- Footer - Now a Livewire Component -->
        <livewire:layout.footer />
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts
</body>
</html>
