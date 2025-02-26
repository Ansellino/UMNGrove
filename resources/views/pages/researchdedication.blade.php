<x-app-layout>
    <div class="relative min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100">
        <div class="relative z-10 flex items-center justify-center min-h-screen px-4 py-8 sm:py-12 lg:py-16">
            <div class="w-full max-w-7xl">
                <div class="overflow-hidden transition-all duration-300 transform bg-white shadow-xl rounded-2xl sm:rounded-3xl hover:shadow-2xl">
                    <!-- Hero Section -->
                    <div class="mb-8 sm:mb-12 lg:mb-16">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('CSR/background.jpg') }}"
                                 alt="Research Initiatives"
                                 class="object-cover w-full h-48 transition-transform duration-300 sm:h-64 md:h-72 lg:h-96 hover:scale-105">
                            <!-- Removed grid pattern, simplified overlay -->
                            <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/40 backdrop-blur-[2px]"></div>
                            <div class="absolute inset-0 flex flex-col items-center justify-center p-4 sm:p-6 lg:p-8">
                                <h1 class="max-w-4xl text-2xl font-bold text-center text-white sm:text-3xl md:text-4xl lg:text-5xl">
                                    Research & Dedication
                                </h1>
                                <p class="max-w-2xl mt-2 text-sm text-center text-white/90 sm:text-base lg:text-lg sm:mt-4">
                                    Research & Community Service for the Mangrove World
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="px-4 py-6 space-y-8 sm:px-6 lg:px-8 sm:py-8 lg:py-12">
                        <!-- Main Info Section -->
                        <div class="overflow-hidden transition-all duration-300 shadow-lg bg-blue-50 rounded-xl hover:shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)]">
                            <div class="p-4 sm:p-6 lg:p-8">
                                <div class="flex flex-col gap-6 lg:flex-row lg:gap-12">
                                    <!-- Image Column -->
                                    <div class="lg:w-1/2">
                                        <div class="relative overflow-hidden rounded-lg sm:rounded-xl group">
                                            <img src="{{ asset('CSR/Research.jpg') }}"
                                                 alt="Research & Dedication"
                                                 class="object-cover w-full h-48 transition-transform duration-500 sm:h-64 md:h-72 lg:h-80 group-hover:scale-110">
                                            <div class="absolute inset-0 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/60 to-transparent group-hover:opacity-100"></div>
                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="space-y-4 lg:w-1/2 sm:space-y-6">
                                        <h2 class="text-xl font-bold text-blue-800 transition-colors duration-300 sm:text-2xl lg:text-3xl hover:text-blue-600">
                                            Open to All Research & Dedication Initiatives!
                                        </h2>
                                        <div class="space-y-3 sm:space-y-4">
                                            <p class="text-sm text-justify text-gray-700 transition-colors duration-300 sm:text-base lg:text-lg hover:text-gray-900">
                                                Patikang Mangrove Valley in Citeureup Village is an area rich in potential for research and community service activities.
                                            </p>
                                            <p class="text-sm text-justify text-gray-700 transition-colors duration-300 sm:text-base lg:text-lg hover:text-gray-900">
                                                Lembur Mangrove believes that synergy between the academic world and local communities can be a strong foundation for creating sustainable change.
                                            </p>
                                            <p class="text-sm text-justify text-gray-700 transition-colors duration-300 sm:text-base lg:text-lg hover:text-gray-900">
                                                If your university or institution is interested in working together, please contact us through our official contact for more information.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Contact Section -->
                                <div class="flex flex-col items-stretch gap-3 mt-6 sm:flex-row sm:items-center sm:justify-center sm:gap-4 sm:mt-8 lg:mt-12">
                                    <a href="https://wa.me/62817849463"
                                       target="_blank"
                                       class="inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white transition-all duration-300 bg-green-500 rounded-lg shadow-md sm:text-base lg:text-lg hover:bg-green-600 hover:shadow-lg active:transform active:scale-95">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                        </svg>
                                        Chat on WhatsApp
                                    </a>
                                    <a href="mailto:hello@lemburmangrove.com"
                                       class="inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium text-blue-600 transition-all duration-300 bg-white rounded-lg shadow-md sm:text-base lg:text-lg hover:bg-blue-50 hover:shadow-lg active:transform active:scale-95">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
    </div>
</x-app-layout>
