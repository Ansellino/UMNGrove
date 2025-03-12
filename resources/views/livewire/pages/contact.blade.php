
<div>
    <div class="relative min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100">
        <div class="relative z-10 flex items-center justify-center min-h-screen px-4 py-12">
            <div class="w-full max-w-7xl">
                <div class="overflow-hidden transition-all duration-300 transform bg-white shadow-2xl rounded-3xl hover:shadow-3xl">
                    <div class="relative px-6 py-10 overflow-hidden bg-center bg-no-repeat bg-cover sm:px-12 sm:py-16"
                         style="background-image: url('{{ asset('images1/banner.webp') }}');">
                        <div class="relative">
                            <h1 class="relative max-w-3xl mx-auto text-3xl font-bold text-center text-white sm:text-4xl lg:text-5xl">
                                CONTACT US
                            </h1>
                        </div>
                    </div>
                    <div class="p-6 transition-all duration-300 transform bg-white shadow-md rounded-2xl">
                        <div class="flex flex-col space-y-8">
                            <!-- Map Section -->
                            <div class="space-y-2 text-center">
                                <h2 class="text-2xl font-bold text-gray-800">Our Google Maps Location</h2>
                                <p class="text-gray-600">Find us easily using Google Maps</p>
                            </div>

                            <div class="relative w-full overflow-hidden bg-gray-200 shadow-lg rounded-xl h-96">
                                <iframe
                                    src="{{ $mapEmbedUrl }}"
                                    width="100%"
                                    height="100%"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>

                            <!-- Contact Information -->
                            <div class="grid gap-8 md:grid-cols-2">
                                <!-- Location Info -->
                                <div class="p-6 space-y-4 transition-colors duration-300 border-4 border-gray-200 bg-gray-50 rounded-xl hover:border-blue-500">
                                    <div class="flex items-start space-x-4">
                                        <div class="p-2 bg-blue-100 rounded-lg">
                                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-semibold text-gray-800">Our Location</h3>
                                            <p class="mt-2 text-gray-600">
                                                {{ $address['line1'] }}<br>
                                                {{ $address['line2'] }}<br>
                                                {{ $address['line3'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Contact Info -->
                                <div class="p-6 space-y-4 transition-colors duration-300 border-4 border-gray-200 bg-gray-50 rounded-xl hover:border-green-500">
                                    <div class="flex items-start space-x-4">
                                        <div class="p-2 bg-green-100 rounded-lg">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-semibold text-gray-800">Contact Details</h3>
                                            <div class="mt-2 space-y-2">
                                                <p class="flex items-center text-gray-600">
                                                    <span class="font-medium">{{ $contactName }}:</span>
                                                    <span class="ml-2">{{ $phone }}</span>
                                                </p>
                                                <p class="flex items-center text-gray-600">
                                                    <span class="font-medium">Hours:</span>
                                                    <span class="ml-2">{{ $hours }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Button -->
                            <div class="flex justify-center mt-6">
                                <a href="{{ $whatsAppLink }}"
                                   target="_blank"
                                   class="inline-flex items-center px-6 py-3 space-x-2 text-base font-medium text-white transition-all duration-200 bg-green-600 border-4 border-green-500 rounded-lg shadow-lg hover:bg-green-700 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 hover:border-green-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    <span>Chat with Us</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
