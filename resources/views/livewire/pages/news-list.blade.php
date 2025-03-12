<div>
    <div class="relative w-full min-h-screen bg-transparent rounded-lg backdrop-blur-sm">
        <div class="relative z-10 py-8 sm:py-12">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="mb-8 animate-fade-in">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                        News & Updates
                    </h1>
                </div>

                <div class="grid grid-cols-1 gap-6 lg:grid-cols-4">
                    <div class="lg:col-span-1">
                        <div class="sticky top-6">
                            <div class="p-4 space-y-4 bg-white border-2 border-gray-300 rounded-lg shadow-sm sm:p-6 sm:space-y-6">
                                <div class="space-y-2">
                                    <label for="search" class="text-sm font-medium text-gray-900">Search Articles</label>
                                    <div class="relative">
                                        <input type="text" wire:model.live="search" id="search"
                                               class="w-full py-2 pl-4 pr-4 text-sm border-2 border-gray-300 rounded-lg sm:text-base focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                               placeholder="Search by title...">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-gray-900">Sort By</label>
                                    <select wire:model.live="sort"
                                            class="w-full px-2 py-1.5 text-sm border-2 border-gray-300 rounded-lg sm:px-3 sm:py-2 sm:text-base focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                        <option value="">Select sorting</option>
                                        <option value="latest">Newest First</option>
                                        <option value="oldest">Oldest First</option>
                                    </select>
                                </div>

                                <div class="flex flex-col gap-2 sm:flex-row sm:gap-3">
                                    <button type="button"
                                            wire:click="$refresh"
                                            class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border-2 border-blue-600 rounded-lg sm:flex-1 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                        Apply Filters
                                    </button>
                                    <button type="button"
                                            wire:click="resetFilters"
                                            class="px-4 py-2 text-sm font-medium text-center text-gray-700 bg-white border-2 border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="lg:col-span-3">
                        <div class="flex flex-col gap-2 mb-6 sm:flex-row sm:items-center sm:justify-between">
                            <h2 class="text-2xl font-bold text-gray-900">Latest Articles</h2>
                            <div class="px-3 py-1 text-sm text-gray-500 bg-white border-2 rounded-full shadow-sm">
                                Showing {{ $news->firstItem() ?? 0 }} to {{ $news->lastItem() ?? 0 }} of {{ $news->total() ?? 0 }}
                                articles
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2">
                            @forelse($news as $article)
                                <div class="group animate-fade-in" style="animation-delay: {{ $loop->index * 0.1 }}s">
                                    <div
                                        class="relative overflow-hidden transition-all duration-300 bg-white border-2 border-gray-200 shadow-sm rounded-2xl hover:shadow-xl hover:-translate-y-1">
                                        <a href="{{ route('news.show', $article->slug) }}"
                                           class="relative block overflow-hidden aspect-w-3 aspect-h-2 group">
                                            @if($article->image)
                                                <img src="{{ asset('storage/'. $article->image) }}" alt="{{ $article->title }}"
                                                     class="object-cover w-full transition-transform duration-500 transform group-hover:scale-110"
                                                     loading="lazy">
                                                <div
                                                    class="absolute inset-0 transition-all duration-300 opacity-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent group-hover:opacity-100">
                                                    <div class="absolute inset-x-0 bottom-0 p-4">
                                                        <span
                                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition-transform duration-300 transform translate-y-2 border-2 border-white rounded-lg group-hover:translate-y-0 backdrop-blur-sm bg-black/10">
                                                            Read More
                                                        </span>
                                                    </div>
                                                </div>
                                            @else
                                                <div
                                                    class="flex items-center justify-center w-full h-full bg-gradient-to-br from-gray-50 to-gray-100">
                                                    <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                              d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                              d="M16 2v4M8 2v4M3 10h18" />
                                                    </svg>
                                                </div>
                                            @endif
                                        </a>

                                          <div class="p-6">
                                            <h2
                                                class="mb-1 text-lg font-bold text-gray-900 transition-colors duration-300 line-clamp-2 group-hover:text-blue-600">
                                                <a href="{{ route('news.show', $article->slug) }}">
                                                    {{ $article->title }}
                                                </a>
                                            </h2>

                                            <div class="mb-2 prose-sm prose text-gray-600 line-clamp-3">
                                                {!! Str::limit(strip_tags($article->content), 200) !!}
                                            </div>

                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center text-sm text-gray-500">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                    {{ $article->created_at->format('M d, Y') }}
                                                </div>

                                                <a href="{{ route('news.show', $article->slug) }}"
                                                   class="text-sm font-medium text-blue-600 transition-colors hover:text-blue-700">
                                                    Read More →
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-span-full">
                                    <div class="flex flex-col items-center justify-center px-6 py-12 bg-white rounded-2xl">
                                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                  d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                  d="M16 2v4M8 2v4M3 10h18" />
                                        </svg>
                                        <h3 class="mt-4 text-lg font-medium text-gray-900">No articles found</h3>
                                        <p class="mt-1 text-gray-500">Check back later for updates.</p>
                                    </div>
                                </div>
                            @endforelse
                        </div>

                        @if($news->hasPages())
                            <div class="mt-8">
                                {{ $news->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
