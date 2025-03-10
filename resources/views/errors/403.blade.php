<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="relative flex items-center justify-center min-h-screen px-4 py-8 font-inter">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset( 'images1/banner.webp') }}" alt="Background" class="object-cover w-full h-full blur-sm">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <main class="relative z-10 w-full max-w-lg p-8 border shadow-lg bg-white/10 backdrop-blur-md rounded-3xl border-white/20">
        <div class="flex flex-col items-center">
            <figure class="mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                </svg>
                <figcaption class="sr-only">403 Error Icon</figcaption>
            </figure>

            <h1 class="mb-2 text-6xl font-bold text-white font-lora">403</h1>
            <h2 class="mb-1 text-2xl font-semibold text-white/90">Access Forbidden</h2>
            <p class="mb-6 text-center text-white/70">Sorry, but you don't have permission to access this page.</p>

            <div class="flex flex-col w-full max-w-xs gap-4 sm:flex-row">
                <a href="/" class="flex items-center justify-center w-full px-6 py-3 font-semibold text-white transition-colors duration-200 rounded-full bg-gray-700/50 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Return Home
                </a>
                <button onclick="history.back()" class="flex items-center justify-center w-full px-6 py-3 font-semibold text-white transition-colors duration-200 border rounded-full border-white/20 hover:bg-white/10 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-white/20 focus:ring-opacity-50">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Go Back
                </button>
            </div>
        </div>
    </main>
</body>
</html>
