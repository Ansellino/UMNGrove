<x-app-layout>
    <div class="relative min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100">
        <div class="relative z-10 flex items-center justify-center min-h-screen px-4 py-12">
            <div class="w-full max-w-7xl">
                <div class="overflow-hidden transition-all duration-300 transform bg-white shadow-2xl rounded-3xl hover:shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)]">
                    <!-- Hero Section -->
                    <div class="mb-24">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('CSR/background.jpg') }}"
                                 alt="CSR Initiatives"
                                 class="object-cover w-full transition-transform duration-300 h-[30vh] sm:h-[40vh] lg:h-[50vh]">
                            <div class="absolute inset-0 bg-black/40"></div>
                            <div class="absolute inset-0 flex flex-col items-center justify-center p-4 space-y-6">
                                <h1 class="max-w-4xl text-3xl font-bold text-center text-white sm:text-4xl md:text-5xl lg:text-6xl">
                                    CSR (Corporate Social Responsibility)
                                </h1>
                                <p class="max-w-2xl text-base text-center text-white sm:text-lg lg:text-xl">
                                    Initiatives in Collaborations - Lembur Mangrove Patikang
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="px-4 mt-8 space-y-24 sm:px-6 lg:px-8">
                        <!-- Introduction Section -->
                        <div class="max-w-4xl mx-auto">
                            <div class="p-6 transition-all duration-300 transform bg-green-50 sm:p-8 lg:p-10 rounded-xl hover:scale-105">
                                <h2 class="mb-8 text-3xl font-bold text-center text-green-800 sm:text-4xl lg:text-5xl">
                                    Open to All CSR Initiatives
                                </h2>
                                <div class="space-y-6">
                                    <p class="text-lg text-justify text-gray-700 sm:text-xl lg:text-2xl">
                                        At Lembur Mangrove, we believe that environmental conservation and community empowerment are shared responsibilities. Therefore, we open collaboration opportunities through Corporate Social Responsibility (CSR) programs to support initiatives that focus on sustainability, education, and local economic development.
                                    </p>
                                    <p class="text-lg font-medium text-gray-700 sm:text-xl lg:text-2xl">
                                        Through CSR partnerships, companies and organizations can contribute in various activities, such as:
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Programs Grid -->
                        <div class="grid grid-cols-1 gap-8 px-4 mt-8 sm:grid-cols-2 lg:grid-cols-4 sm:px-6 lg:px-8">
                            <!-- Card 1 - Community Empowerment -->
                            <div class="flex flex-col items-center p-6 text-center transition-all duration-300 bg-white border-2 border-gray-200 shadow-lg cursor-pointer sm:p-8 rounded-xl hover:shadow-xl hover:scale-105">
                                <svg class="w-16 h-16 mb-4 text-orange-500 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <h3 class="mb-3 text-xl font-bold sm:text-2xl">Community Empowerment</h3>
                                <p class="text-base text-gray-600 sm:text-lg">Skills training, local business funding, and mangrove-based product development.</p>
                            </div>

                            <!-- Card 2 - Environmental Education -->
                            <div class="flex flex-col items-center p-6 text-center transition-all duration-300 bg-white border-2 border-gray-200 shadow-lg cursor-pointer sm:p-8 rounded-xl hover:shadow-xl hover:scale-105">
                                <svg class="w-16 h-16 mb-4 text-blue-500 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <h3 class="mb-3 text-xl font-bold sm:text-2xl">Environmental Education</h3>
                                <p class="text-base text-gray-600 sm:text-lg">Educational programs for children and communities to raise awareness of ecosystem conservation.</p>
                            </div>

                            <!-- Card 3 - Village Infrastructure -->
                            <div class="flex flex-col items-center p-6 text-center transition-all duration-300 bg-white border-2 border-gray-200 shadow-lg cursor-pointer sm:p-8 rounded-xl hover:shadow-xl hover:scale-105">
                                <svg class="w-16 h-16 mb-4 text-gray-500 animate-[bounce_3s_ease-in-out_infinite]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                <h3 class="mb-3 text-xl font-bold sm:text-2xl">Village Infrastructure</h3>
                                <p class="text-sm text-gray-600 sm:text-base">Support for public facilities that improve the quality of life of the surrounding community.</p>
                            </div>

                            <!-- Card 4 - Mangrove Conservation -->
                            <div class="flex flex-col items-center p-6 text-center transition-all duration-300 bg-white border-2 border-gray-200 shadow-lg sm:p-8 rounded-xl hover:shadow-xl hover:scale-105">
                                <svg class="w-12 h-12 mb-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>
                                <h3 class="mb-3 text-lg font-semibold sm:text-xl">Mangrove Conservation</h3>
                                <p class="text-sm text-gray-600 sm:text-base">Mangrove planting to protect the coast, improve environmental quality, and mitigate tsunami disasters.</p>
                            </div>
                        </div>

                        <!-- Contact Section -->
                        <div class="max-w-4xl px-4 pb-8 mx-auto mt-8 mb-8 sm:px-6 lg:px-8">
                            <div class="p-8 text-center border-2 border-blue-200 sm:p-10 lg:p-12 bg-blue-50 rounded-xl">
                                <h3 class="mb-6 text-2xl font-bold text-blue-900 sm:text-3xl lg:text-4xl">
                                    Interested in Collaboration?
                                </h3>
                                <p class="mb-8 text-base text-gray-700 sm:text-lg">
                                    We welcome discussions about potential CSR partnerships. Contact us to learn more about how we can work together.
                                </p>
                                <a href="{{ route('contact') }}"
                                   class="inline-flex items-center px-6 py-3 text-base font-medium text-white transition-all duration-200 transform bg-blue-600 rounded-lg sm:text-lg hover:bg-blue-700 hover:scale-105 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    Contact Us
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
