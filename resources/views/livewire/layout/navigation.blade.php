<div>
    <?php
    use App\Livewire\Actions\Logout;
    use Livewire\Volt\Component;

    new class extends Component {
        public function logout(Logout $logout): void {
            $logout();
            $this->redirect('/', navigate: true);
        }
    }; ?>

    <nav x-data="{ open: false }"
         class="sticky top-0 z-50 transition-all duration-300 border-b border-gray-200 shadow-md backdrop-blur-lg bg-[#FCFCE4]"
         :class="{ 'shadow-lg': open }">
        <!-- Container with responsive padding -->
        <div class="px-2 mx-auto max-w-7xl sm:px-4 lg:px-4 xl:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <!-- Logo Section -->
                <div class="flex items-center flex-shrink-0">
                    <a href="/" class="flex items-center transition-transform duration-300 hover:scale-105">
                        <x-application-logo class="w-auto h-10 lg:h-12" />
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-center">
                    <div class="flex items-center justify-center">
                        @foreach([
                            ['route' => 'aboutus', 'label' => 'About'],
                            ['route' => 'contact', 'label' => 'Contact'],
                            ['route' => 'posts.index', 'label' => 'Products & Tours'],
                            ['route' => 'news.index', 'label' => 'News & Blog'],
                            ['route' => 'csrprogram', 'label' => 'CSR Programs'],
                            ['route' => 'researchdedication', 'label' => 'Research & Dedication']
                        ] as $item)
                            <x-nav-link
                                :href="route($item['route'])"
                                :active="request()->routeIs($item['route'])"
                                wire:navigate
                                class="relative px-2 py-2 mx-2 text-base font-medium text-black transition-all duration-200 whitespace-nowrap lg:text-sm xl:text-base hover:text-blue-600 xl:mx-4">
                                <span>{{ __($item['label']) }}</span>
                                @if(request()->routeIs($item['route']))
                                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 rounded-full"></span>
                                @endif
                            </x-nav-link>
                        @endforeach
                    </div>
                </div>

                <!-- Auth Section with responsive spacing -->
                <div class="hidden lg:flex lg:items-center">
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center px-2 py-2 transition-all duration-200 rounded-lg hover:bg-gray-50">
                                    <!-- Avatar Placeholder -->
                                    <div class="flex items-center justify-center w-8 h-8 text-white bg-blue-600 rounded-full">
                                        {{ substr(auth()->user()->name, 0, 1) }}
                                    </div>
                                    <span class="hidden ml-2 text-sm font-medium text-gray-700 xl:block">
                                        {{ auth()->user()->name }}
                                    </span>
                                    <svg class="w-4 h-4 ml-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <div class="py-1">
                                    <x-dropdown-link :href="route('profile')" wire:navigate
                                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    <button wire:click="logout" class="w-full">
                                        <x-dropdown-link class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </button>
                                </div>
                            </x-slot>
                        </x-dropdown>
                    @else
                        <div class="flex items-center space-x-2 xl:space-x-4">
                            <a href="{{ route('login') }}"
                               class="text-sm font-medium text-gray-700 transition-colors whitespace-nowrap hover:text-blue-600">
                                Sign in
                            </a>
                            <a href="{{ route('register') }}"
                               class="inline-flex items-center px-3 py-2 text-sm font-medium text-white transition-all duration-200 bg-blue-600 rounded-lg shadow-sm whitespace-nowrap hover:bg-blue-700 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Register
                            </a>
                        </div>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <button type="button"
                        @click="open = !open"
                        class="inline-flex items-center justify-center p-2 text-gray-700 rounded-lg lg:hidden hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <span class="sr-only">Toggle menu</span>
                    <svg class="w-6 h-6 transition-transform duration-200"
                         :class="{'rotate-180': open}"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'inline-flex': open, 'hidden': !open }"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-1"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-1"
             class="lg:hidden"
             @click.away="open = false">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-gray-50">
                @foreach([
                    ['route' => 'aboutus', 'label' => 'About'],
                    ['route' => 'contact', 'label' => 'Contact'],
                    ['route' => 'posts.index', 'label' => 'Products & Tours'],
                    ['route' => 'news.index', 'label' => 'News & Blog'],
                    ['route' => 'csrprogram', 'label' => 'CSR Programs'],
                    ['route' => 'researchdedication', 'label' => 'Research & Dedication']
                ] as $item)
                    <x-responsive-nav-link
                        :href="route($item['route'])"
                        :active="request()->routeIs($item['route'])"
                        wire:navigate
                        class="block px-3 py-2 text-base font-medium rounded-lg {{ request()->routeIs($item['route']) ? 'bg-blue-50 text-blue-700' : 'text-gray-700 hover:bg-gray-100' }}">
                        {{ __($item['label']) }}
                    </x-responsive-nav-link>
                @endforeach
            </div>

            @auth
                <!-- Mobile User Menu -->
                <div class="pt-4 pb-3 border-t border-gray-200 bg-gray-50">
                    <div class="flex items-center px-4 py-2">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-10 h-10 text-lg text-white bg-blue-600 rounded-full">
                                {{ substr(auth()->user()->name, 0, 1) }}
                            </div>
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium text-gray-800">{{ auth()->user()->name }}</div>
                            <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
                        </div>
                    </div>
                    <div class="px-2 mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile')" wire:navigate
                            class="block px-3 py-2 text-base font-medium text-gray-700 rounded-lg hover:bg-gray-100">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
                        <button wire:click="logout" class="w-full text-left">
                            <x-responsive-nav-link
                                class="block px-3 py-2 text-base font-medium text-red-600 rounded-lg hover:bg-red-50">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </button>
                    </div>
                </div>
            @else
                <!-- Mobile Auth Links -->
                <div class="px-4 py-3 border-t border-gray-200 bg-gray-50">
                    <div class="grid gap-2">
                        <a href="{{ route('login') }}"
                           class="block px-3 py-2 text-base font-medium text-gray-700 rounded-lg hover:bg-gray-100">
                            Sign in
                        </a>
                        <a href="{{ route('register') }}"
                           class="flex justify-center px-3 py-2 text-base font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                            Register
                        </a>
                    </div>
                </div>
            @endauth
        </div>
    </nav>
</div>
