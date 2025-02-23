<x-app-layout>
    <div class="relative min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100">
        <div class="relative z-10 flex items-center justify-center min-h-screen px-4 py-12">
            <div class="w-full max-w-7xl">
                <div class="overflow-hidden transition-all duration-300 transform bg-white shadow-2xl rounded-3xl hover:shadow-3xl">
                    <!-- Hero Section -->
                    <div class="mb-24">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('CSR/background.jpg') }}" 
                                 alt="CSR Initiatives" 
                                 class="object-cover w-full h-[30vh] sm:h-[40vh] lg:h-[50vh] transition-transform duration-300">
                            <div class="absolute inset-0 bg-black/40"></div>
                            <div class="absolute inset-0 flex flex-col items-center justify-center p-4 space-y-6">
                                <h1 class="max-w-4xl text-3xl font-bold text-center text-white sm:text-4xl md:text-5xl lg:text-6xl">
                                    Research & Dedication
                                </h1>
                                <p class="max-w-2xl text-base text-center text-white sm:text-lg lg:text-xl">
                                    Research & Community Service for the Mangrove World                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="px-4 py-12 space-y-16 sm:px-6 lg:px-8 sm:py-16">
                        <!-- Main Info Section -->
                        <div class="p-8 shadow-lg transform transition-all duration-300 hover:scale-[1.02] bg-blue-50 rounded-xl">
                            <div class="flex flex-col gap-8 lg:flex-row">
                                <!-- Image Column -->
                                <div class="lg:w-1/2">
                                    <div class="relative overflow-hidden rounded-xl group">
                                        <img src="{{ asset('CSR/Research.jpg') }}" 
                                             alt="Research & Dedication" 
                                             class="w-full h-[300px] sm:h-[400px] object-cover transition-transform duration-500 group-hover:scale-110">
                                        <div class="absolute inset-0 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/60 to-transparent group-hover:opacity-100"></div>
                                    </div>
                                </div>

                                <!-- Content Column -->
                                <div class="space-y-8 lg:w-1/2">
                                    <h3 class="mt-4 text-3xl font-bold text-blue-800 transition-all duration-300 sm:text-4xl lg:text-5xl hover:text-blue-600">
                                        Open to All Research & Dedication Initiatives!
                                    </h3> 
                                    <div class="space-y-6 text-gray-700">
                                        <p class="mr-2 text-lg leading-relaxed text-justify transition-colors duration-300 sm:text-xl hover:text-blue-800">
                                            Patikang Mangrove Valley in Citeureup Village is an area rich in potential for research and community service activities. As a conservation and empowerment-based tourism village, we open opportunities for collaboration with universities and academic institutions.
                                        </p>
                                        <p class="mr-2 text-lg leading-relaxed text-justify transition-colors duration-300 sm:text-xl hover:text-blue-800">
                                            Lembur Mangrove believes that synergy between the academic world and local communities can be a strong foundation for creating sustainable change. We are committed to providing facilities and access that support the success of research and service programs.
                                        </p>
                                        <p class="mr-2 text-lg leading-relaxed text-justify transition-colors duration-300 sm:text-xl hover:text-blue-800">
                                            If your university or institution is interested in working together, please contact us through our official contact for more information.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Section -->
                            <div class="flex flex-col items-center justify-center gap-6 pb-8 mt-12 mb-8 sm:flex-row">
                                <a href="https://wa.me/62817849463" 
                                   target="_blank" 
                                   class="inline-flex items-center px-8 py-4 text-lg font-medium transition-all duration-300 bg-green-500 rounded-lg shadow-lg text-blue hover:bg-green-600 hover:shadow-xl hover:scale-105">
                                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0C5.373 0 0 5.373 0 12c0 6.016 4.432 10.984 10.207 11.852V15.18h-2.969v-3.154h2.969V9.927c0-3.475 1.693-5 4.581-5 1.383 0 2.115.103 2.461.149v2.753h-1.97c-1.226 0-1.654 1.163-1.654 2.473v1.724h3.593l-.487 3.154h-3.106v8.697C19.481 23.083 24 18.075 24 12c0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                    Chat on WhatsApp
                                </a>
                                <a href="mailto:hello@lemburmangrove.com" 
                                   class="inline-flex items-center px-8 py-4 text-lg font-medium text-blue-600 transition-all duration-300 rounded-lg shadow-lg bg-blue-50 hover:bg-blue-100 hover:shadow-xl hover:scale-105">
                                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    Email Us
                                </a>
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

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</x-app-layout>