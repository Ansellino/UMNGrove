<x-app-layout>
    <div class="relative min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100">
        <div class="absolute inset-0 z-0 hidden max-w-full max-h-screen opacity-40 bg-grid-pattern sm:block"></div>
        <div class="absolute inset-0 z-0 max-w-full max-h-screen opacity-20 bg-grid-pattern sm:hidden"></div>

        <div class="relative z-10 flex items-center justify-center min-h-screen px-4 py-12">
            <div class="w-full max-w-7xl">
                <div class="overflow-hidden transition-all duration-300 transform bg-white shadow-2xl rounded-3xl hover:shadow-3xl">
                    <div class="relative px-6 py-10 overflow-hidden bg-center bg-no-repeat bg-cover sm:px-12 sm:py-16"
                         style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(17, 24, 39, 0.8)), url('{{ asset('images1/banner.png') }}');">
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
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.864696014467!2d105.5117217748805!3d-6.162489993872215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418b3293027b5b%3A0x6a0c0e7041f92e21!2sKp%20Patikang%2C%20Citereup%2C%20Panimbang%2C%20Pandeglang%2C%20Banten!5e0!3m2!1sid!2sid!4v1707267152010!5m2!1sid!2sid"
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
                                                Kp Patikang, Citereup Village,<br>
                                                Panimbang, Pandeglang Banten<br>
                                                Indonesia
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
                                                    <span class="font-medium">Deden:</span>
                                                    <span class="ml-2">+62 817-849-463</span>
                                                </p>
                                                <p class="flex items-center text-gray-600">
                                                    <span class="font-medium">Hours:</span>
                                                    <span class="ml-2">Mon-Fri, 8:00-22:00</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Button -->
                            <div class="flex justify-center mt-6">
                                <a href="#" class="inline-flex items-center px-6 py-3 space-x-2 text-base font-medium text-black transition-all duration-200 bg-green-600 border-4 border-green-500 rounded-lg shadow-lg hover:bg-green-700 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 hover:border-green-600">
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
    </div>

    <style>
        @layer utilities {
          .bg-grid-pattern {
                background-image:
                    linear-gradient(to right, rgba(0,0,0,0.1) 1px, transparent 1px),
                    linear-gradient(to bottom, rgba(0,0,0,0.1) 1px, transparent 1px);
                background-size: 20px 20px;
            }

          .shadow-3xl {
                --tw-shadow: 0 35px 60px -15px rgba(0, 0, 0, 0.3);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                            var(--tw-ring-shadow, 0 0 #0000),
                            var(--tw-shadow);
            }
        }

        /* Custom Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

      .animate-float {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</x-app-layout>