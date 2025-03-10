<x-app-layout>
    <div class="relative min-h-screen py-8 bg-gradient-to-br from-gray-50 via-white to-gray-100 sm:py-12">
        <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
            <!-- Interactive Breadcrumb with Animation -->
            <nav class="flex items-center p-4 mb-8 space-x-2 overflow-x-auto rounded-xl scrollbar-hide"
                 aria-label="Breadcrumb">
                <a href="{{ route('dashboard') }}"
                   class="flex items-center px-3 py-2 space-x-2 text-gray-600 transition-all duration-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 group">
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:scale-110" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                    </svg>
                    <span class="hidden sm:block">Home</span>
                </a>
                <span class="text-gray-400">/</span>
                <a href="{{ route('news.index') }}"
                   class="px-3 py-2 text-gray-600 transition-all duration-300 rounded-lg hover:bg-blue-50 hover:text-blue-600">
                    News & Updates
                </a>
                <span class="text-gray-400">/</span>
                <span class="px-3 py-2 font-medium text-gray-900 truncate max-w-[200px] sm:max-w-xs">
                    {{ $newsItem->title }}
                </span>
            </nav>

            <!-- Main Article Card with Enhanced Animations -->
            <article class="overflow-hidden transition-all duration-500 bg-white border-2 border-gray-200 shadow-xl rounded-2xl hover:shadow-2xl hover:border-blue-200"
                     x-data="{ showShareMenu: false }">
                <!-- Dynamic Header Section -->
                <div class="relative p-6 overflow-hidden border-b-2 border-gray-100 sm:p-8 lg:p-10">
                    <!-- Background Image with Blur -->
                    <div class="absolute inset-0 z-0">
                        <img src="{{ asset('images1/banner.webp') }}"
                             alt="Background"
                             class="object-cover w-full h-full"
                             style="filter: blur(8px); opacity: 0.15;">
                    </div>

                    <div class="relative z-10">
                        <h1 class="text-3xl font-bold tracking-tight text-black bg-gradient-to-r from-gray-900 via-blue-800 to-gray-900 bg-clip-text sm:text-4xl lg:text-5xl animate-fade-in">
                            {{ $newsItem->title }}
                        </h1>

                        <!-- Interactive Metadata -->
                        <div class="flex flex-wrap items-center gap-3 mt-6 sm:gap-4">
                            <div class="flex items-center px-4 py-2 text-sm transition-all duration-300 rounded-full bg-blue-50 hover:bg-blue-100 hover:scale-105">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <time datetime="{{ $newsItem->created_at->format('Y-m-d') }}"
                                      class="text-blue-700">
                                    {{ $newsItem->created_at->format('F j, Y') }}
                                </time>
                            </div>
                            @if($newsItem->author)
                                <div class="flex items-center px-4 py-2 text-sm transition-all duration-300 rounded-full bg-blue-50 hover:bg-blue-100 hover:scale-105">
                                    <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    <span class="text-blue-700">{{ $newsItem->author->name }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Image Section with Enhanced Border -->
                @if($newsItem->image)
                    <div class="mx-auto overflow-hidden border-b-2 border-gray-100 group">
                        <div class="w-full overflow-hidden" style="max-height: 30rem;">
                            <img src="{{ asset('storage/' . $newsItem->image) }}"
                                 alt="{{ $newsItem->title }}"
                                 class="object-contain w-full h-full transition-all duration-700"
                                 style="max-height: 30rem; width: auto; margin: 0 auto;"
                            >
                            <div class="transition-opacity duration-500 opacity-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent group-hover:opacity-100"></div>
                        </div>
                    </div>
                @endif

                <!-- Enhanced Content Section with Typography -->
                <div class="p-6 border-b-2 border-gray-100 sm:p-8 lg:p-10">
                    <div class="prose prose-lg max-w-none prose-blue">
                        <div class="space-y-6 text-xl leading-relaxed text-black animate-fade-in">
                            {!! $newsItem->content !!}
                        </div>
                    </div>
                </div>

                <!-- Interactive Footer Section with Enhanced Border -->
                <div class="p-6 border-t-2 border-gray-200 sm:p-8 lg:p-10 bg-gradient-to-br from-gray-50 via-white to-gray-50">
                    <div class="flex flex-col items-center justify-between gap-6 sm:flex-row">
                        <!-- Direct Share Buttons -->
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                               target="_blank"
                               class="flex items-center px-4 py-2 space-x-2 text-gray-700 transition-all duration-300 bg-white border-2 border-gray-200 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/>
                                </svg>
                                <span>Share on Facebook</span>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ urlencode($newsItem->title) }}"
                               target="_blank"
                               class="flex items-center px-4 py-2 space-x-2 text-gray-700 transition-all duration-300 bg-white border-2 border-gray-200 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                                <span>Share on Twitter</span>
                            </a>
                        </div>

                        <!-- Back Button with Animation -->
                        <a href="{{ route('news.index') }}"
                           class="inline-flex items-center px-6 py-3 text-base font-medium text-white transition-all duration-300 bg-blue-600 rounded-lg shadow-md group hover:bg-blue-700 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            <svg class="w-5 h-5 mr-2 transition-transform duration-300 transform group-hover:-translate-x-1"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            <span>Back to News</span>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <!-- Alpine.js for Interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fade-in 0.6s ease-out forwards;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Enhanced Typography Styles */
        .prose img {
            @apply rounded-xl shadow-lg transition-all duration-300 hover:shadow-xl cursor-pointer;
            max-height: 28rem;
            object-fit: contain;
            margin: 2.5rem auto;
        }

        .prose a {
            @apply text-blue-600 transition-colors duration-300 hover:text-blue-800 no-underline hover:underline;
        }

        .prose h2 {
            @apply text-2xl font-bold mt-8 mb-4 text-transparent bg-gradient-to-r from-gray-900 via-blue-800 to-gray-900 bg-clip-text;
        }

        .prose h3 {
            @apply text-xl font-semibold mb-3 mt-6 text-gray-800;
        }

        .prose p {
            @apply leading-relaxed text-gray-700 text-lg;
        }

        .prose ul, .prose ol {
            @apply my-6 ml-6 text-gray-700;
        }

        .prose li {
            @apply mb-2 text-lg;
        }

        .prose blockquote {
            @apply pl-4 border-l-4 border-blue-500 italic text-gray-700 my-6 bg-blue-50/50 py-2 px-4 rounded-r-lg;
        }

        @media (max-width: 640px) {
            .prose h2 { @apply text-xl; }
            .prose h3 { @apply text-lg; }
            .prose p, .prose li { @apply text-base; }
        }

        /* Add these styles to your existing styles */
        .prose {
            @apply border-2 border-gray-100 rounded-lg p-6;
        }

        .prose blockquote {
            @apply border-l-4 border-blue-500;
        }

        .prose img {
            @apply border-2 border-gray-100;
        }

        /* Enhanced Button Borders */
        a.focus\:ring-2:focus {
            @apply ring-offset-2 ring-blue-500;
        }

        /* Enhanced Border Transitions */
        .border-2 {
            @apply transition-colors duration-300;
        }

        /* Mobile Optimizations */
        @media (max-width: 640px) {
            .border-2 {
                @apply border;
            }
        }
    </style>
</x-app-layout>
