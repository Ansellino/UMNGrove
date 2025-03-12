
<div>
    <div class="relative min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100">
        <div class="relative z-10 flex items-center justify-center min-h-screen px-4 py-12">
            <div class="w-full max-w-7xl">
                <div class="overflow-hidden transition-all duration-300 transform bg-white shadow-2xl rounded-3xl hover:shadow-3xl">
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
                            @foreach ($programs as $program)
                                <div class="flex flex-col items-center p-6 text-center transition-all duration-300 bg-white border-2 border-gray-200 shadow-lg cursor-pointer sm:p-8 rounded-xl hover:shadow-xl hover:scale-105">
                                    <svg class="w-16 h-16 mb-4 {{ $program['color'] }} {{ $program['animation'] }}"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $program['icon'] }}"></path>
                                    </svg>
                                    <h3 class="mb-3 text-xl font-bold sm:text-2xl">{{ $program['title'] }}</h3>
                                    <p class="text-base text-gray-600 sm:text-lg">{{ $program['description'] }}</p>
                                </div>
                            @endforeach
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
</div>
