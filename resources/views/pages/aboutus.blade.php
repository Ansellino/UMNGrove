<x-app-layout>
    <div class="relative min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100">
        <div class="absolute inset-0 z-0 hidden max-w-full max-h-screen opacity-40 bg-grid-pattern sm:block"></div>
            <div class="absolute inset-0 z-0 max-w-full max-h-screen opacity-20 bg-grid-pattern sm:hidden"></div>
                <div class="relative z-10 flex items-center justify-center min-h-screen px-4 py-12">
                    <div class="w-full max-w-7xl">
                    <div class="overflow-hidden transition-all duration-300 transform bg-white shadow-2xl rounded-3xl hover:shadow-3xl">
                        <div class="relative h-[40vh] px-6 py-10 overflow-hidden mb-12 sm:px-12 sm:py-16">
                        <div class="absolute inset-0 bg-black/40">
                            <img src="{{ asset('ABOUT/Header.png') }}" alt="Background"
                            class="object-cover w-full h-full transition-transform duration-300 hover:scale-105">
                        </div>
                        <div class="relative flex flex-col items-center justify-center h-full space-y-4">
                            <h1 class="text-4xl font-bold text-center text-white sm:text-5xl lg:text-6xl">
                            About Us
                            </h1>
                            <p class="max-w-2xl text-lg text-center text-gray-200">
                            Discover the beauty of nature and local wisdom at Lembur Mangrove
                            </p>
                        </div>
                        </div>

                        <div class="px-4 py-10 mx-8 space-y-12 sm:px-6 lg:px-8 lg:pb-8 sm:py-16">
                            <div class="grid grid-cols-1 gap-16 md:grid-cols-2">
                                <div class="relative group">
                                <img src="{{ asset('ABOUT/About.jpg') }}" alt="About Us Image"
                                    class="object-cover w-full transition-all duration-300 rounded-lg shadow-lg h-96 group-hover:shadow-xl">
                                <div class="absolute inset-0 transition-opacity duration-300 rounded-lg opacity-0 bg-gradient-to-t from-black/60 to-transparent group-hover:opacity-100"></div>
                                </div>
                                <div class="ml-12 prose lg:prose-xl">
                                <h2 class="text-3xl font-bold text-gray-900">Welcome to Lembur Mangrove</h2>
                                <p class="mt-2 text-justify text-gray-600">
                                    Lembur Mangrove, a tourism village nestled in Patikang Village, Citeureup Village, Panimbang, Pandeglang, Banten. Surrounded by beautiful mangrove forests and the natural charm of the beach, we are a community that combines environmental conservation with local wisdom.
                                </p>

                                <div class="p-4 mt-6 bg-green-50 rounded-xl">
                                    <h3 class="text-xl font-semibold text-gray-900">Operating Hours</h3>
                                    <ul class="mt-3 space-y-2 text-gray-600">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Monday - Thursday: 08.00 - 17.00
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Saturday - Sunday: 08.00 - 17.00
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                            Friday: Closed
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="relative p-8 py-8 mt-12 overflow-hidden rounded-xl">
                            <div class="absolute inset-0 z-0">
                                <img src="{{ asset('ABOUT/Header.png') }}" alt="Background"
                                     class="object-cover w-full h-full filter blur-[8px] opacity-20">
                            </div>
                            <div class="relative z-10">
                                <h2 class="mb-6 text-3xl font-bold text-center text-gray-900">Our Vision</h2>
                                <div class="max-w-3xl mx-auto prose text-center lg:prose-xl">
                                    <p class="text-gray-700">
                                        Inspiring environmental stewardship and sustainable tourism through mangrove conservation combined with authentic cultural experiences. We aspire to be a leading tourism village that connects people with the beauty and importance of mangroves.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="py-8 mt-8 mb-4">
                            <h2 class="mb-12 text-4xl font-bold text-center text-gray-900">What We Offer</h2>
                            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                                <div class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl group hover:shadow-xl">
                                    <div class="relative overflow-hidden">
                                        <img src="{{ asset('ABOUT/WWO1.jpg') }}" alt="Mangrove Exploration"
                                            class="object-cover w-full h-48 transition-transform duration-300 group-hover:scale-110">
                                        <div class="absolute inset-0 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/60 to-transparent group-hover:opacity-100"></div>
                                    </div>
                                    <div class="p-6">
                                        <h3 class="mb-4 text-xl font-semibold text-gray-900">Mangrove Exploration</h3>
                                        <p class="text-gray-600">Take a guided tour to explore the mangrove forest, learn about its biodiversity and understand the importance of mangrove conservation.</p>
                                    </div>
                                </div>

                                <div class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl group hover:shadow-xl">
                                    <div class="relative overflow-hidden">
                                        <img src="{{ asset('ABOUT/WWO2.jpg') }}" alt="Ocean Adventure"
                                            class="object-cover w-full h-48 transition-transform duration-300 group-hover:scale-110">
                                        <div class="absolute inset-0 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/60 to-transparent group-hover:opacity-100"></div>
                                    </div>
                                    <div class="p-6">
                                        <h3 class="mb-4 text-xl font-semibold text-gray-900">Ocean Adventure</h3>
                                        <p class="text-gray-600">Experience thrilling water activities including snorkeling, beach exploration, and traditional fishing techniques in pristine waters.</p>
                                    </div>
                                </div>

                                <div class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl group hover:shadow-xl">
                                    <div class="relative overflow-hidden">
                                        <img src="{{ asset('ABOUT/WWO3.jpg') }}" alt="Educational Experience"
                                            class="object-cover w-full h-48 transition-transform duration-300 group-hover:scale-110">
                                        <div class="absolute inset-0 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/60 to-transparent group-hover:opacity-100"></div>
                                    </div>
                                    <div class="p-6">
                                        <h3 class="mb-4 text-xl font-semibold text-gray-900">Educational Experience</h3>
                                        <p class="text-gray-600">Join our interactive workshops on mangrove ecology, local culture, and sustainable practices. Perfect for students and nature enthusiasts.</p>
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

          .group:hover.group-hover\:scale-110 {
                transform: scale(1.1);
            }

          .from-black\/60 {
                --tw-gradient-from: rgb(0 0 0 / 0.6);
                --tw-gradient-to: rgb(0 0 0 / 0);
                --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
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
